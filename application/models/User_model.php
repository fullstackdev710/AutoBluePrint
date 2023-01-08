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

   function addNewUser()
   {
      $data = $this->input->post();

      $this->db->insert('users', [
         'username' => $data['username'],
         'parent_username' => $data['parent_username'],
         'password' => $data['password'],
         'signup_datetime' => date('Y-m-d H:i:s'),
         'referral_id' => $data['referral_id'],
         'approved' => 1
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
      $user_info = $this->db->where('ID', $user_id)->select('username, approved, signup_counts, signup_datetime, view_counts, referral_id, payment_status')->get('users')->row_array();
      $signup_counts = count($this->db->where('parent_username', $user_info['username'])->get('users')->result_array()) + (int)$user_info['signup_counts'];

      if ((int)$user_info['view_counts'] > 148) {
         $signup_counts = $signup_counts + 3;
      } else if ((int)$user_info['view_counts'] > 38) {
         $signup_counts = $signup_counts + 2;
      } else if ((int)$user_info['view_counts'] > 11) {
         $signup_counts = $signup_counts + 1;
      }

      $result = [
         'approved'        => $user_info['approved'] ? 'APPROVED ACCOUNT' : 'UNDER REVIEW',
         'signup_date'     => explode(' ', $user_info['signup_datetime'])[0],
         'view_counts'     => (int)$user_info['view_counts'],
         'link'            => $user_info['referral_id'] == '' ? base_url() : base_url() . '?' . $user_info['referral_id'],
         'signup_counts'   => $user_info['payment_status'] ? $signup_counts : 0
      ];

      return $result;
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
      return $this->db->delete('users', array('ID' => $user_id));
   }
}
