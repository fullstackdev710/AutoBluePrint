<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');

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
			'assets/js/pages/home/count-down-script.js?ver=' . time(),
		];

		$data = [
			// 'user' => $this->User_model->get_user_by_user_id($user_id)
		];

		$this->load->view('_includes/header', ['styles' => $styles]);
		$this->load->view('home/top-banner', $data);
		$this->load->view('home/watch-video');
		$this->load->view('home/faq-video');
		$this->load->view('home/people-saying');
		$this->load->view('home/happy-members');
		$this->load->view('home/faq');
		$this->load->view('home/contact-title');
		$this->load->view('home/contact-section');
		$this->load->view('home/desc-section');
		$this->load->view('_includes/footer', ['scripts' => $scripts]);
	}

	function send()
	{
		$this->load->config('email');
		$this->load->library('email');

		$from = $this->config->item('smtp_user');
		$to = $this->input->post('to');
		$subject = $this->input->post('subject');
		$message = $this->input->post('message');

		$this->email->set_newline("\r\n");
		$this->email->from($from);
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($message);

		if ($this->email->send()) {
			echo 'Your Email has successfully been sent.';
		} else {
			show_error($this->email->print_debugger());
		}
	}
}
