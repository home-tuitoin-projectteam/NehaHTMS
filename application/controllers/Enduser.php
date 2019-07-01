<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enduser extends CI_Controller {

		public function __construct(){
			parent::__construct();
			// $this->load->model("");
			 $this->load->helper('url');
             $this->load->library ( 'session' );  
             $this->load->model('data_model');
		}

		function header(){
			$this->load->helper('form');
			$this->load->view('include/nav_menu');
		}

		function footer(){
			$this->load->view('include/footer');
		}

		public function index(){
				$this->header();
				$this->load->view('home');
				$this->footer();
		}

		public function about(){
				$this->header();
				$this->load->view('about_us');
				$this->footer();				
		}

		public function subject(){
				$this->header();
				$this->load->view('subjects');
				$this->footer();				
		}

		public function fccon(){
				$this->header();
				$this->load->view('free-career-counselling');
				$this->footer();				
		}

		public function register(){
				$this->header();
			    $this->load->view('register');
				$this->footer();				
		}	
	

		public function contact(){
				$this->header();
				$this->load->view('contact');
				$this->footer();				
		}	

        public function user_dashboard(){
			    //$this->header();
				$this->load->view('user_dashboard');
				//$this->footer();				
		}

		public function check_login(){
			    //$this->header();
				//$this->load->view('user_dashboard');
				//$this->footer();
				//echo'hellow admin';	
	$data['username']=htmlspecialchars($_POST['name']);  
    $data['password']=htmlspecialchars($_POST['pwd']);  
    $res=$this->data_model->islogin($data);  
    if($res){     
        $this->session->set_userdata('id',$data['username']);   
      //echo base_url()."dashboard";  
        $this->load->view('user_dashboard');
    }  
    else{  
       echo 'username or password wrong ?';  
    }   
}  			
		}	
	
