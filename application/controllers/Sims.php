<?php 
	class sims extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('model_sims');
		}
		function page(){
			$page = $this->uri->segment(3);
			if(empty($page)){
				$page = 'home';
			}
			$item_slide = $this->model_sims->tmp_slide()->row_array();
			$data['item_slide'] = $item_slide;
			$data['tmp_slide'] = $this->model_sims->tmp_slide()->result();
			$data['page'] = $page;
			if($page == 'layanan'){
				$data['tmp_layanan'] = $this->model_sims->tmp_layanan()->result();
				$this->load->view('sims',$data);
			}else if($page == 'csr'){
				$jml_csr = $this->model_sims->jml_csr();
				$this->load->library('pagination');
				$config['base_url'] = base_url().'/sims/page/csr/';
				$config['total_rows'] = $jml_csr;
				$config['full_tag_open'] = '<ul class="pagination">';
				$config['full_tag_close'] = '</ul>';
				$config['first_link'] = '&laquo; First';
				$config['first_tag_open']= '<li class="prev page">';
				$config['first_tag_close'] = '</li>';
				$config['last_link'] = 'Last &raquo';
				$config['last_tag_open'] = '<li class ="next page">';
				$config['last_tag_close']='</li>';
				$config['next_link'] = 'Next &raquo';
				$config['next_tag_open'] = '<li class="next page">';
				$config['next_tag_close'] = '</li>';
				$config['prev_link'] = '&laquo; Prev';
				$config['prev_tag_open'] = '<li class="prev page">';
				$config['prev_tag_close']='</li>';
				$config['cur_tag_open'] = '<li  class="current"><a href="">';
				$config['cur_tag_close'] = '</a></li>';
				$config['num_tag_open']='<li class="page">';
				$config['num_tag_close'] = '</li>';
				$config['per_page'] = 6;
				$from = $this->uri->segment(4);
				$this->pagination->initialize($config);
				$data['paging'] = $this->pagination->create_links();
				$data['tmp_csr'] = $this->model_sims->data_csr($config['per_page'],$from);
				$this->load->view('sims',$data);
			}else if($page == 'promo'){
				$jml_promo = $this->model_sims->jml_promo();
				$this->load->library('pagination');
				$config['base_url'] = base_url().'/sims/page/promo/';
				$config['total_rows'] = $jml_promo;
				$config['full_tag_open'] = '<ul class="pagination">';
				$config['full_tag_close'] = '</ul>';
				$config['first_link'] = '&laquo; First';
				$config['first_tag_open']= '<li class="prev page">';
				$config['first_tag_close'] = '</li>';
				$config['last_link'] = 'Last &raquo';
				$config['last_tag_open'] = '<li class ="next page">';
				$config['last_tag_close']='</li>';
				$config['next_link'] = 'Next &raquo';
				$config['next_tag_open'] = '<li class="next page">';
				$config['next_tag_close'] = '</li>';
				$config['prev_link'] = '&laquo; Prev';
				$config['prev_tag_open'] = '<li class="prev page">';
				$config['prev_tag_close']='</li>';
				$config['cur_tag_open'] = '<li  class="current"><a href="">';
				$config['cur_tag_close'] = '</a></li>';
				$config['num_tag_open']='<li class="page">';
				$config['num_tag_close'] = '</li>';
				$config['per_page'] = 6;
				$from = $this->uri->segment(4);
				$this->pagination->initialize($config);
				$data['paging'] = $this->pagination->create_links();
				$data['tmp_promo'] = $this->model_sims->data_promo($config['per_page'],$from);
				$this->load->view('sims',$data);
			}else if($page == 'profil'){
				$item_profil = $this->model_sims->tmp_profil()->row_array();
				$data['item_profil'] = $item_profil;
				$this->load->view('sims',$data);
			}else if($page == 'kontak'){
				$item_kontak = $this->model_sims->tmp_profil()->row_array();
				$data['item_kontak'] = $item_kontak;
				$this->load->view('sims',$data);
			}else if($page == 'galery'){
				$data['tmp_ket_galery'] = $this->model_sims->tmp_ket_galery()->result();
				$data['tmp_galery'] = $this->model_sims->tmp_galery()->result();
				$this->load->view('sims',$data);
			}else if($page == 'detail_layanan'){
				$d_layanan = $this->uri->segment(4);
				$data['hsl'] = $this->model_sims->qw("artikel","WHERE id_artikel = '$d_layanan'");
				$this->load->view('sims',$data);
			}else if($page == 'detail_csr'){
				$d_csr = $this->uri->segment(4);
				$data['hsl'] = $this->model_sims->qw("artikel","WHERE id_artikel = '$d_csr'");
				$this->load->view('sims',$data);
			}else if($page == 'detail_promo'){
				$d_promo = $this->uri->segment(4);
				$data['hsl'] = $this->model_sims->qw("artikel","WHERE id_artikel  = '$d_promo'");
				$this->load->view('sims',$data);
			}else{
				$this->load->view('sims',$data);
			}
		}
	}
 ?>