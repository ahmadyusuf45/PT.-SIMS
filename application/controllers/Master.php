<?php
/*controler bagian login*/ 
	class master extends CI_Controller{
		function __construct(){
			parent:: __construct();
			$this->load->model('model_login');
		}
		function index(){
			if($this->session->userdata('status')=='login'){
				redirect('admin/page');
			}
			$this->load->view('master');
		}
		function aksi_login(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$where = array(
				'username' =>$username,
				'password'=>$password
				);
			$cek = $this->model_login->cek_login('login',$where)->num_rows();
			$qw = $this->db->where('username',$username)->get('login');
			$qy = $this->db->query("SELECT * FROM login WHERE username = '$username'");
			$id_login = $qy->row();
			$hsl = $qw->row();
			if($cek > 0 ){
				$data_session=array(
					'nama'=>$username,
					'id'=>$id_login->id_login,
					'status'=>'login',
					'level'=>$hsl->status
					);
				$this->session->set_userdata($data_session);
				redirect('adminlogin');
			}else{
				echo "<script>alert('Username Dan Password Salag !')</script>";
				$this->load->view('master');
			}
		}
		function logout(){
			$this->session->sess_destroy();
			redirect('adminlogin');
		}
	}
/*controler bagian backend*/
 ?>