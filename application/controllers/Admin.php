<?php 
/*controler bagian backend*/
	class admin extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('model_cleo');
		}
		/*fungsi halaman*/
		function page(){
			$page = $this->uri->segment(3);
			if(empty($page)){
				$page='beranda';
			}
			$data['page']=$page;
			/*halaman slide*/
			if($page == 'slide'){
				$data['tmp_slide']=$this->model_cleo->tmp_slide()->result();
				$this->load->view('index',$data);
			/*halaman slide*/
			/*halaman form slide*/
			}else if($page == 'f_slide'){
				$f_slide = $this->uri->segment(4);
				if(empty($f_slide)){
					$data['status']='simpan';
					$data['value']='Simpan';
					$data['judul']='Input Data Slide';
					$data['open'] = 'admin/simpan_slide';
					$data['kode']=$this->model_cleo->id_slide();
				}else{
					$data['status']='edit';
					$data['value']='Edit';
					$data['judul']='Edit Data Silde';
					$data['open'] = 'admin/edit_slide';
					$data['hsl']=$this->model_cleo->qw("slide","WHERE id_slide = '$f_slide'");
				}
				$this->load->view('index',$data);
			/*halaman form slide*/
			/*halaman artikel*/
			}else if($page == 'artikel'){
				$tmp_artikel = $this->db->query("SELECT * FROM artikel,kategori_artikel WHERE artikel.id_kategori_artikel = kategori_artikel.id_kategori_artikel");
				$data['tmp_artikel'] = $tmp_artikel->result();
				$this->load->view('index',$data);
			/*halaman artikel*/
			/*halaman form artikel*/
			}else if($page == 'f_artikel'){
				$f_artikel = $this->uri->segment(4);
					if(empty($f_artikel)){
						$data['status'] = 'simpan';
						$data['value'] = 'Simpan';
						$data['judul'] = 'Input Data Artikel';
						$data['open'] = 'admin/simpan_artikel';
						$data['kode'] = $this->model_cleo->id_artikel();
					}else{
						$data['status']='edit';
						$data['value'] = 'Edit';
						$data['judul'] = 'Edit Data Artikel';
						$data['open'] = 'admin/edit_artikel';
						$data['hsl'] = $this->model_cleo->qw("artikel","WHERE id_artikel = '$f_artikel'");
					}
					$this->load->view('index',$data);
			/*halaman form artikle*/
			/*halaman kategori artikel*/
			}else if($page == 'kategori_galery'){
				$data['tmp_kategori_galery']=$this->model_cleo->tmp_kategori_galery()->result();
				$this->load->view('index',$data);
			/*halaman kategori artikel*/
			/*halaman form kategori galery*/
			}else if($page == 'f_kategori_galery'){
				$f_kategori_galery = $this->uri->segment(4);
				if(empty($f_kategori_galery)){
					$data['status']='simpan';
					$data['value'] = 'Simpan';
					$data['judul'] = 'Input Data Kategori Galery';
					$data['open'] = 'admin/simpan_kategori_galery';
				}else{
					$data['status']='edit';
					$data['value']='Edit';
					$data['judul'] = 'Edit Data Kategori Galery';
					$data['open'] = 'admin/edit_kategori_galery';
					$data['hsl']=$this->model_cleo->qw("kategori_galery","WHERE id_kategori_galery = '$f_kategori_galery'");
				}
				$this->load->view('index',$data);
			/*halaman form kategori galery*/
			/*halaman galery*/
			}else if($page == 'galery'){
				$tmp_galery = $this->db->query("SELECT * FROM galery,kategori_galery WHERE galery.id_kategori_galery = kategori_galery.id_kategori_galery");
				$data['tmp_galery'] = $tmp_galery->result();
				$this->load->view('index',$data);
			/*halaman galery*/
			/*halaman form galery*/
			}else if($page == 'f_galery'){
				$f_galery = $this->uri->segment(4);
				if(empty($f_galery)){
					$data['status']='simpan';
					$data['value'] = 'Simpan';
					$data['judul']='Input Data Galery';
					$data['open'] = 'admin/simpan_galery';
					$data['kode'] = $this->model_cleo->id_galery();
				}else{
					$data['status'] = 'edit';
					$data['value'] = 'Edit';
					$data['judul'] = 'Edit Data Galery';
					$data['open'] = 'admin/edit_galery';
					$data['hsl'] = $this->model_cleo->qw("galery","WHERE id_galery = '$f_galery'");
				}
				$this->load->view('index',$data);
			/*halaman form galery*/
			/*halaman identitas*/
			}else if($page == 'identitas'){
				$item_identitas = $this->model_cleo->tmp_identitas()->row_array();
				$hsl_identitas = $item_identitas['id_identitas'];
				$data['item'] = $item_identitas;
				$data['kode'] = $hsl_identitas;
				$data['tmp_identitas'] = $this->model_cleo->tmp_identitas()->result();
				$this->load->view('index',$data);
			/*halaman identitas*/
			/*halaman form identitas*/
			}else if($page == 'f_identitas'){
				$f_identitas = $this->uri->segment(4);
				if(empty($f_identitas)){
					$data['status'] = 'simpan';
					$data['value'] = 'Simpan';
					$data['judul'] = 'Input Data Identitas';
					$data['open'] = 'admin/simpan_identitas';
					$data['kode'] = $this->model_cleo->id_identitas();
				}else{
					$data['status'] = 'edit';
					$data['value'] = 'Edit';
					$data['judul'] = 'Edit Data Identitas';
					$data['open'] = 'admin/edit_identitas';
					$data['hsl'] = $this->model_cleo->qw("identitas","WHERE id_identitas = '$f_identitas'");
				}
				$this->load->view('index',$data);
			/*halaman form identitas*/
			/*halaman kategori artikel*/
			}else if($page == 'kategori_artikel'){
				$data['tmp_kategori_artikel'] = $this->model_cleo->tmp_kategori_artikel()->result();
				$this->load->view('index',$data);
			/*halaman kategori artikel*/
			/*halaman form kategori artikel*/
			}else if($page == 'f_kategori_artikel'){
				$f_kategori_artikel = $this->uri->segment(4);
				if(empty($f_kategori_artikel)){
					$data['status'] = 'simpan';
					$data['value'] = 'Simpan';
					$data['judul'] = 'Input Data Kategori Artikel';
					$data['open'] = 'admin/simpan_kategori_artikel';
					$data['kode'] = $this->model_cleo->id_kategori_artikel();
				}else{
					$data['status'] = 'edit';
					$data['value'] = 'Edit';
					$data['judul'] = 'Edit Data Kategori Artikel';
					$data['open'] = 'admin/edit_kategori_artikel';
					$data['hsl'] = $this->model_cleo->qw("kategori_artikel","WHERE id_kategori_artikel = '$f_kategori_artikel'");
				}
				$this->load->view('index',$data);
			/*halaman form kategori artikel*/
			}else{
				$this->load->view('index',$data);
			}
		}
		/*fungsi halaman*/
		/*fungsi simpan slide*/
		function simpan_slide(){
			$config['upload_path']='./slide/'; /*folder slide*/
			$config['allowed_types']='gif|jpg|png';
			$this->load->library('upload',$config);
			$this->upload->do_upload('foto_slide');
			$file_foto = $this->upload->data();
			$foto = $file_foto['file_name'];
			$ar = array(
				'id_slide'=>$this->input->post('id_slide'),
				'foto_slide'=>$foto,
				'durasi'=>$this->input->post('durasi')
				);
			$this->model_cleo->simpan_slide('slide',$ar);
			redirect('admin/page/slide');
		}
		/*fungsi simpan slide*/
		/*fungsi edit slide*/
		function edit_slide(){
			$id = $this->input->post('id_slide');
			$config['upload_path']='./slide/'; /*folder slide*/
			$config['allowed_types']='gif|jpg|png';
			$this->load->library('upload',$config);
			$this->upload->do_upload('foto_slide');
			$file_foto = $this->upload->data();
			$foto = $file_foto['file_name'];
			if(empty($foto)){
				$ar = array(
					'id_slide'=>$this->input->post('id_slide'),
					'durasi'=>$this->input->post('durasi')
					);
				$this->model_cleo->edit_slide('slide',$id,$ar);
				redirect('admin/page/slide');
			}else{
				$mm = $this->db->query("SELECT foto_slide FROM slide WHERE id_slide = '$id'");
				$data = $mm->row_array();
				unlink('./slide/'.$data['foto_slide']);
				$ar = array(
					'id_slide'=>$this->input->post('id_slide'),
					'foto_slide'=>$foto,
					'durasi'=>$this->input->post('durasi')
					);
				$this->model_cleo->edit_slide('slide',$id,$ar);
				redirect('admin/page/slide');
			}
		}
		/*fungsi edit slide*/
		/*fungsi hapus slide*/
		function hapus_slide($id_slide){
			$mm = $this->db->query("SELECT foto_slide FROM slide WHERE id_slide = '$id_slide'");
			$data = $mm->row_array();
			unlink('./slide/'.$data['foto_slide']); /*folder slide*/
			$this->model_cleo->hapus_slide('slide',$id_slide);
			redirect('admin/page/slide');
		}
		/*fungsi hapus slide*/
		/*fungsi simpan artikel*/
		function simpan_artikel(){
			$config['upload_path']='./artikel/'; /*folder artikel*/
			$config['allowed_types']='gif|jpg|png';
			$this->load->library('upload',$config);
			$this->upload->do_upload('foto_artikel');
			$file_foto = $this->upload->data();
			$foto = $file_foto['file_name'];
			$ar = array(
				'id_artikel'=>$this->input->post('id_artikel'),
				'foto_artikel'=>$foto,
				'judul_artikel'=>$this->input->post('judul_artikel'),
				'isi_artikel'=>$this->input->post('isi_artikel'),
				'id_kategori_artikel'=>$this->input->post('id_kategori_artikel')
				);
			$this->model_cleo->simpan_artikel('artikel',$ar);
			redirect('admin/page/artikel');
		}
		/*fungsi simpan artikel*/
		/*fungsi edit artikel*/
		function edit_artikel(){
			$id = $this->input->post('id_artikel');
			$config['upload_path']='./artikel/'; /*folder artikel*/
			$config['allowed_types']='gif|jpg|png';
			$this->load->library('upload',$config);
			$this->upload->do_upload('foto_artikel');
			$file_foto = $this->upload->data();
			$foto = $file_foto['file_name'];
			if(empty($foto)){
				$ar = array(
				'id_artikel'=>$this->input->post('id_artikel'),
				'judul_artikel'=>$this->input->post('judul_artikel'),
				'isi_artikel'=>$this->input->post('isi_artikel'),
				'id_kategori_artikel'=>$this->input->post('id_kategori_artikel')
					);
				$this->model_cleo->edit_artikel('artikel',$id,$ar);
				redirect('admin/page/artikel');
			}else{
				$mm = $this->db->query("SELECT foto_artikel FROM artikel WHERE id_artikel = '$id'");
				$data = $mm->row_array();
				unlink('./artikel/'.$data['foto_artikel']);
				$ar = array(
				'id_artikel'=>$this->input->post('id_artikel'),
				'foto_artikel'=>$foto,
				'judul_artikel'=>$this->input->post('judul_artikel'),
				'isi_artikel'=>$this->input->post('isi_artikel'),
				'id_kategori_artikel'=>$this->input->post('id_kategori_artikel')
					);
				$this->model_cleo->edit_artikel('artikel',$id,$ar);
				redirect('admin/page/artikel');
			}
		}
		/*fungsi edit artikel*/
		/*fungsi hapus artikel*/
		function hapus_artikel($id_artikel){
			$mm = $this->db->query("SELECT foto_artikel FROM artikel WHERE id_artikel = '$id_artikel'");
			$data = $mm->row_array();
			unlink('./artikel/'.$data['foto_artikel']); /*folder artikel*/
			$this->model_cleo->hapus_artikel('artikel',$id_artikel);
			redirect('admin/page/artikel');
		}
		/*fungsi hapus artikel*/
		/*fungsi simpan kategori galery*/
		function simpan_kategori_galery(){
			$ar = array(
				'id_kategori_galery'=>$this->input->post('id_kategori_galery'),
				'nama_kategori_galery'=>$this->input->post('nama_kategori_galery')
				);
			$this->model_cleo->simpan_kategori_galery('kategori_galery',$ar);
			redirect('admin/page/kategori_galery');
		}
		/*fungsi simpan kategori galery*/
		/*fungsi edit kategori galery*/
		function edit_kategori_galery(){
			$id = $this->input->post('id_kategori_galery');
			$ar = array(
				'id_kategori_galery'=>$this->input->post('id_kategori_galery'),
				'nama_kategori_galery'=>$this->input->post('nama_kategori_galery')
					);
			$this->model_cleo->edit_kategori_galery('kategori_galery',$id,$ar);
			redirect('admin/page/kategori_galery');
		}
		/*fungsi edit kategori galery*/
		/*fungsi hapus kategori galery*/
		function hapus_kategori_galery($id_kategori_galery){
			$this->model_cleo->hapus_kategori_galery('kategori_galery',$id_kategori_galery);
			redirect('admin/page/kategori_galery');
		}
		/*fungsi simpan galery*/
		function simpan_galery(){
			$config['upload_path']='./galery/'; /*folder galery*/
			$config['allowed_types']='gif|jpg|png';
			$this->load->library('upload',$config);
			$this->upload->do_upload('foto_galery');
			$file_foto = $this->upload->data();
			$foto = $file_foto['file_name'];
			$ar = array(
				'id_galery'=>$this->input->post('id_galery'),
				'foto_galery'=>$foto,
				'id_kategori_galery'=>$this->input->post('id_kategori_galery')
				);
			$this->model_cleo->simpan_galery('galery',$ar);
			redirect('admin/page/galery');
		}
		/*fungsi simpan galery*/
		/*fungsi edit galery*/
		function edit_galery(){
			$id = $this->input->post('id_galery');
			$config['upload_path']='./galery/'; /*folder galery*/
			$config['allowed_types']='gif|jpg|png';
			$this->load->library('upload',$config);
			$this->upload->do_upload('foto_galery');
			$file_foto = $this->upload->data();
			$foto = $file_foto['file_name'];
			if(empty($foto)){
				$ar = array(
					'id_galery'=>$this->input->post('id_galery'),
					'id_kategori_galery'=>$this->input->post('id_kategori_galery')
					);
				$this->model_cleo->edit_galery('galery',$id,$ar);
				redirect('admin/page/galery');
			}else{
				$mm = $this->db->query("SELECT foto_galery FROM galery WHERE id_galery = '$id'");
				$data = $mm->row_array();
				unlink('./galery/'.$data['foto_galery']);
				$ar = array(
					'id_galery'=>$this->input->post('id_galery'),
					'foto_galery'=>$foto,
					'id_kategori_galery'=>$this->input->post('id_kategori_galery')
					);
				$this->model_cleo->edit_galery('galery',$id,$ar);
				redirect('admin/page/galery');
			}
		}
		/*fungsi edit galery*/
		/*fungsi hapus galery*/
		function hapus_galery($id_galery){
			$mm = $this->db->query("SELECT foto_galery FROM galery WHERE id_galery = '$id_galery'");
			$data = $mm->row_array();
			unlink('./galery/'.$data['foto_galery']); /*folder galery*/
			$this->model_cleo->hapus_galery('galery',$id_galery);
			redirect('admin/page/galery');
		}
		/*fungsi hapus galery*/
		/*fungsi simpan identitas*/
		function simpan_identitas(){
			$config['upload_path']='./identitas/'; /*folder identitas*/
			$config['allowed_types']='gif|jpg|png';
			$this->load->library('upload',$config);
			$this->upload->do_upload('foto_profil');
			$file_foto = $this->upload->data();
			$foto = $file_foto['file_name'];
			$ar = array(
				'id_identitas'=>$this->input->post('id_identitas'),
				'foto_profil'=>$foto,
				'deskripsi_profil'=>$this->input->post('deskripsi_profil'),
				'sekilas_profil'=>$this->input->post('sekilas_profil'),
				'visi_misi'=>$this->input->post('visi_misi'),
				'lisensi'=>$this->input->post('lisensi'),
				'no_tlp'=>$this->input->post('no_tlp'),
				'fex'=>$this->input->post('fex'),
				'alamat'=>$this->input->post('alamat'),
				'map'=>$this->input->post('map')
				);
			$this->model_cleo->simpan_identitas('identitas',$ar);
			redirect('admin/page/identitas');
		}
		/*fungsi simpan identitas*/
		/*fungsi edit identitas*/
		function edit_identitas(){
			$id = $this->input->post('id_identitas');
			$config['upload_path']='./identitas/'; /*folder identitas*/
			$config['allowed_types']='gif|jpg|png';
			$this->load->library('upload',$config);
			$this->upload->do_upload('foto_profil');
			$file_foto = $this->upload->data();
			$foto = $file_foto['file_name'];
			if(empty($foto)){
				$ar = array(
				'id_identitas'=>$this->input->post('id_identitas'),
				'deskripsi_profil'=>$this->input->post('deskripsi_profil'),
				'sekilas_profil'=>$this->input->post('sekilas_profil'),
				'visi_misi'=>$this->input->post('visi_misi'),
				'lisensi'=>$this->input->post('lisensi'),
				'no_tlp'=>$this->input->post('no_tlp'),
				'fex'=>$this->input->post('fex'),
				'alamat'=>$this->input->post('alamat'),
				'map'=>$this->input->post('map')
					);
				$this->model_cleo->edit_identitas('identitas',$id,$ar);
				redirect('admin/page/identitas');
			}else{
				$mm = $this->db->query("SELECT foto_profil FROM identitas WHERE id_identitas = '$id'");
				$data = $mm->row_array();
				unlink('./identitas/'.$data['foto_profil']);
				$ar = array(
				'id_identitas'=>$this->input->post('id_identitas'),
				'foto_profil'=>$foto,
				'deskripsi_profil'=>$this->input->post('deskripsi_profil'),
				'sekilas_profil'=>$this->input->post('sekilas_profil'),
				'visi_misi'=>$this->input->post('visi_misi'),
				'lisensi'=>$this->input->post('lisensi'),
				'no_tlp'=>$this->input->post('no_tlp'),
				'fex'=>$this->input->post('fex'),
				'alamat'=>$this->input->post('alamat'),
				'map'=>$this->input->post('map')
					);
				$this->model_cleo->edit_identitas('identitas',$id,$ar);
				redirect('admin/page/identitas');
			}
		}
		/*fungsi edit identitas*/
		/*fungsi simpan kategori artikel*/
		function simpan_kategori_artikel(){
			$ar = array(
				'id_kategori_artikel'=>$this->input->post('id_kategori_artikel'),
				'nama_kategori_artikel'=>$this->input->post('nama_kategori_artikel')
				);
			$this->model_cleo->simpan_kategori_artikel('kategori_artikel',$ar);
			redirect('admin/page/kategori_artikel');
		}
		/*fungsi simpan kategori artikel*/
		/*fungsi edit kategori artikel*/
		function edit_kategori_artikel(){
			$id = $this->input->post('id_kategori_artikel');
			$ar = array(
				'id_kategori_artikel'=>$this->input->post('id_kategori_artikel'),
				'nama_kategori_artikel'=>$this->input->post('nama_kategori_artikel')
					);
			$this->model_cleo->edit_kategori_artikel('kategori_artikel',$id,$ar);
			redirect('admin/page/kategori_artikel');
		}
		/*fungsi edit kategori artikel*/
		/*fungsi hapus kategori artikel*/
		function hapus_kategori_artikel($id_kategori_artikel){
			$this->model_cleo->hapus_kategori_artikel('kategori_artikel',$id_kategori_artikel);
			redirect('admin/page/kategori_artikel');
		}
		/*fungsi hapus kategori artikel*/
	}
/*controler bagian backend*/
 ?>