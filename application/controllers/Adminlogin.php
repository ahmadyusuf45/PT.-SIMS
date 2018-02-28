<?php 
	class adminlogin extends CI_Controller{
		function __construct(){
			parent:: __construct();
			$this->load->model('model_login');
		}
		function index(){
			if($this->session->userdata('status') !='login'){
				redirect('master');
			}
			redirect('admin/page');
		}
	}
 ?>