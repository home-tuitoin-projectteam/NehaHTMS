<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function __construct()
	{
	parent::__construct();
	}

	function header(){
		$this->load->view('admin/include/header');
	}

	function sidebar(){
		$this->load->view('admin/include/sidebar');
	}

	function footer(){
		$this->load->view('admin/include/footer');
	}
	
	public function index()
	{
		$this->header();
		$this->sidebar();
		$this->load->view('admin/home');
		$this->footer();
	}

}
