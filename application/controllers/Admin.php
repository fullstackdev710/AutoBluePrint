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
         'assets/css/pages/admin/styles.css?ver=' . time(),
      ];

      $scripts = [
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
}
