<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		// $user_id = getSession('user_id');

		// if (!isset($user_id) || $user_id == '') {
		// 	redirect(site_url('login'), 'refresh');
		// 	return;
		// }
	}

	public function index()
	{
		$styles = [
			'assets/css/pages/home/styles.css?ver=' . time(),
		];

		$scripts = [
			'assets/js/pages/home/scripts.js?ver=' . time(),
		];

		$data = [
			// 'user' => $this->User_model->get_user_by_user_id($user_id)
		];

		$this->load->view('_includes/header', ['styles' => $styles]);
		$this->load->view('home', $data);
		$this->load->view('_includes/footer', ['scripts' => $scripts]);
	}
}
