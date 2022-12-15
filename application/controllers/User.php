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
      $this->load->view('user');
   }
}
