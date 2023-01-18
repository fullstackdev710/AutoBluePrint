<?php defined("BASEPATH") or exit();

class User extends CI_Controller
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

      if ($user_level == 1) {
         redirect(site_url('admin'), 'refresh');
         return;
      }
   }

   public function index()
   {
      $user_id = getSession('user_id');
      $this->load->model('User_model');
      $user_info = $this->User_model->getUserInfo($user_id);
      $signup_users = $this->User_model->getUserSignupListForEachUser($user_id);

      $styles = [
         'https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.css',
         'assets/css/pages/admin/styles.css?ver=' . time(),
      ];

      $scripts = [
         'https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.js',
         'assets/js/pages/user/scripts.js?ver=' . time(),
      ];

      $data = [
         'user_info'    => $user_info,
         'signup_users' => $signup_users
      ];

      $this->load->view('_includes/header', ['styles' => $styles]);
      $this->load->view('user', $data);
      $this->load->view('_includes/footer', ['scripts' => $scripts]);
   }
}
