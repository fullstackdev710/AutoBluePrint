<?php defined("BASEPATH") or exit();

class Admin extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();

      $user_id = getSession('user_id');

      if (!isset($user_id) || $user_id == '') {
         redirect(site_url('login'), 'refresh');
         return;
      }

      $user_level = getSession('user_level');

      if ($user_level != 1) {
         redirect(site_url('user'), 'refresh');
         return;
      }
   }

   public function index()
   {
      $user_id = getSession('user_id');
      $this->load->model('User_model');
      $user_info = $this->User_model->getUserInfo($user_id);
      $users = $this->User_model->getUserList();

      $styles = [
         'https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.css',
         'assets/css/pages/admin/styles.css?ver=' . time(),
      ];

      $scripts = [
         'https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.js',
         'assets/js/pages/user/scripts.js?ver=' . time(),
         'assets/js/pages/admin/scripts.js?ver=' . time(),
      ];

      $data = [
         'user_info' => $user_info,
         'users'     => $users
      ];

      $this->load->view('_includes/header', ['styles' => $styles]);
      $this->load->view('admin', $data);
      $this->load->view('_includes/footer', ['scripts' => $scripts]);
   }

   public function updateUserPaymentStatus()
   {
      $this->load->model('User_model');
      $user_id = $this->input->post('user_id');
      $status = $this->input->post('status');
      $update_user_approve = $this->User_model->updateUserPaymentStatus($user_id, $status);

      echo $update_user_approve;
   }

   public function addSignUps()
   {
      $users = $this->input->post('selected_users');
      $amount = $this->input->post('amount');

      $this->load->model('User_model');
      $addSignUps = $this->User_model->addFakeSignUps($users, $amount);

      echo $addSignUps;
   }

   public function deleteUser()
   {
      $user_id = $this->input->post('user_id');
      $this->load->model('User_model');
      $deleted = $this->User_model->deleteUser($user_id);

      echo $deleted;
   }
}
