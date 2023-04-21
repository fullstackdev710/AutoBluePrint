<?php defined("BASEPATH") or exit();

class CronJob extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
   }

   public function index()
   {
   }

   public function addHits()
   {
      $this->load->model('User_model');
      $this->User_model->addFakeHits();
   }
}
