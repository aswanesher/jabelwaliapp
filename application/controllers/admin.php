<?php if (!defined('BASEPATH')) die();
session_start();

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('is_logged_in')) redirect('login');
	}

	public function index()
	{
		$data = array(
			"page" => "main",
			"title" => "Dashboard",
			);
		$this->load->view("dashboard",$data);

	}

}

?>