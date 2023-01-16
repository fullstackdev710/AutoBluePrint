<?php defined("BASEPATH") or exit("Direct access not permitted");

class User_model extends CI_Model
{
   function __construct()
   {
      parent::__construct();
   }

   function existSameUser($username)
   {
      $duplicate_user = $this->db->where('username', $username)->select('ID')->get('users')->result_array();

      if (count($duplicate_user) > 0) {
         return true;
      } else {
         return false;
      }
   }

   function existSameReferralID($referral_id)
   {
      $duplicate_referral_id = $this->db->where('referral_id', $referral_id)->select('ID')->get('users')->result_array();

      if (count($duplicate_referral_id) > 0) {
         return true;
      } else {
         return false;
      }
   }

   function referral_idToUsername($referral_id)
   {
      $username = $this->db->where('referral_id', $referral_id)->select('username')->get('users')->row_array()['username'];

      return $username;
   }

   function addNewUser()
   {
      $data = $this->input->post();

      $this->db->insert('users', [
         'username'        => $data['username'],
         'parent_username' => $data['parent_username'],
         'password'        => $data['password'],
         'signup_datetime' => date('Y-m-d H:i:s'),
         'referral_id'     => $data['referral_id'],
         'approved'        => 1,
         'payment_status'  => 0
      ]);
   }

   function addNewView($page_owner)
   {
      $is_admin = true;
      if (count($this->db->where('referral_id', $page_owner)->select('ID')->get('users')->result_array()) > 0) {
         $is_admin = false;
      }

      if ($is_admin) {
         $view_counts = (int)$this->db->where('username', 'admin')->select('view_counts')->get('users')->row_array()['view_counts'] + 1;
         $this->db->where('username', 'admin')->update('users', array('view_counts' => $view_counts));
      } else {
         $view_counts = (int)$this->db->where('referral_id', $page_owner)->select('view_counts')->get('users')->row_array()['view_counts'] + 1;
         $this->db->where('referral_id', $page_owner)->update('users', array('view_counts' => $view_counts));
      }
   }

   function getUserInfo($user_id)
   {
      $user_info = $this->db->where('ID', $user_id)->select('username, approved, signup_counts, signup_datetime, view_counts, referral_id, payment_status, level')->get('users')->row_array();

      if (!$user_info['level']) {
         $hours_diff = dateDiffInHours($user_info['signup_datetime'], date('Y-m-d H:i:s'));
         if ((int)$hours_diff >= 50) {
            if ((int)$user_info['view_counts'] < 175) {
               $this->db->where('ID', $user_id)->update('users', array('view_counts' => 175));
               $user_info['view_counts'] = 175;
            }
         }

         $signup_counts = count($this->db->where(array('parent_username' => $user_info['username'], 'payment_status' => 1))->get('users')->result_array()) + (int)$user_info['signup_counts'] + getFakeSignupCounts((int)$user_info['view_counts']);
      } else {
         $signup_counts = count($this->db->where(array('parent_username' => $user_info['username'], 'payment_status' => 1))->get('users')->result_array()) + (int)$user_info['signup_counts'];
      }

      $result = [
         'username'        => $user_info['username'],
         'approved'        => $user_info['approved'] ? 'APPROVED ACCOUNT' : 'UNDER REVIEW',
         'signup_date'     => explode(' ', $user_info['signup_datetime'])[0],
         'view_counts'     => (int)$user_info['view_counts'],
         'link'            => $user_info['referral_id'] == '' ? base_url() : base_url() . '?' . $user_info['referral_id'],
         'signup_counts'   => $user_info['payment_status'] ? $signup_counts : 0
      ];

      return $result;
   }

   function getUserSignupListForEachUser($user_id)
   {
      $username = $this->db->where('ID', $user_id)->select('username')->get('users')->row_array()['username'];
      $real_users = $this->db->where(array('parent_username' => $username, 'payment_status' => 1))->select('ID, username, referral_id, signup_datetime')->get('users')->result_array();

      // Get Fake Signup Users Start
      $user_info = $this->db->where('ID', $user_id)->select('view_counts, signup_counts, signup_datetime')->get('users')->row_array();
      $fake_signup_counts = (int)$user_info['signup_counts'] + getFakeSignupCounts((int)$user_info['view_counts']);

      $cur_additional_signup_counts = count($this->db->where('parent_username', $username)->select('ID')->get('additional_signup_users')->result_array());
      $signup_counts_diff = $fake_signup_counts - $cur_additional_signup_counts;

      if ($signup_counts_diff > 0) {
         for ($i = 0; $i < $signup_counts_diff; $i++) {
            $fake_username = getRandomString();
            $fake_referral_id = getRandomString();
            $fake_signup_date = getRandomDateTime($user_info['signup_datetime'], date('Y-m-d H:i:s'));

            $this->db->insert('additional_signup_users', [
               'username'        => $fake_username,
               'parent_username' => $username,
               'signup_datetime' => $fake_signup_date,
               'referral_id'     => $fake_referral_id
            ]);
         }
      }

      $fake_users = $this->db->where('parent_username', $username)->select('ID, username, referral_id, signup_datetime')->get('additional_signup_users')->result_array();
      // Get Fake Signup Users End

      $signup_users = array_merge($real_users, $fake_users);

      if (count($signup_users) > 0) {
         return $signup_users;
      } else {
         return false;
      }
   }

   function getUserList()
   {
      $users = $this->db->where('username != ', 'admin')->select('ID, username, referral_id, payment_status, signup_datetime')->get('users')->result_array();

      if (count($users) > 0) {
         return $users;
      } else {
         return false;
      }
   }

   function updateUserPaymentStatus($user_id, $status)
   {
      return $this->db->where('ID', $user_id)->update('users', array('payment_status' => $status));
   }

   function addFakeSignUps($users, $amount)
   {
      foreach ($users as $user_id) {
         $cur_signups = $this->db->where('ID', $user_id)->select('signup_counts')->get('users')->row_array()['signup_counts'];
         $signup_counts = (int)$cur_signups + (int)$amount;
         $this->db->where('ID', $user_id)->update('users', array('signup_counts' => $signup_counts));
      }

      return true;
   }

   function deleteUser($user_id)
   {
      try {
         $username = $this->db->where('ID', $user_id)->select('username')->get('users')->row_array()['username'];
         $this->db->delete('users', array('ID' => $user_id));
         $this->db->delete('additional_signup_users', array('parent_username' => $username));

         return true;
      } catch (Exception $exception) {
         return $exception;
      }
   }
}
