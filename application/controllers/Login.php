<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

   public function index()
   {
      $user_id = getSession('user_id');

      if ($user_id > 0) {
         $user_level = getSession('user_level');
         if ($user_level == 1) {
            redirect(site_url('admin'), 'refresh');
         } else {
            redirect(site_url('user'), 'refresh');
         }
      }
      $this->load->view('login');
   }

   public function process()
   {
      $this->load->model("Auth_model");
      $user = $this->input->post('username');
      $pass = $this->input->post('password');

      $logged_in = $this->Auth_model->login_checker($user, $pass);

      if ($logged_in == 1) {
         header("Location: " . base_url() . 'Admin');
      } else if ($logged_in == 0) {
         header("Location: " . base_url() . 'User');
      } else {
         $data['error'] = 'Your Account is Invalid';
         $this->load->view('login', $data);
      }
   }
   public function logout()
   {
      //removing session  
      $this->session->sess_destroy();
      redirect("Login");
   }
}
