<?php 
	class model_sims extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		function tmp_slide(){
			return $this->db->get('slide');
		}
		function tmp_layanan(){
			return $this->db->query("SELECT * FROM artikel,kategori_artikel WHERE artikel.id_kategori_artikel  = kategori_artikel.id_kategori_artikel AND artikel.id_kategori_artikel = 'KTA001'");

		}
		function tmp_profil(){
			return $this->db->get('identitas');
		}
		function tmp_galery(){
			return $this->db->get('galery');
		}
		function tmp_ket_galery(){
			return $this->db->get('kategori_galery');
		}
		function qw($table,$prop){
			return $this->db->query("SELECT * FROM $table $prop");
		}
		function data_csr($number,$offset){
			$this->db->select("*");
			$this->db->from("artikel,kategori_artikel");
			$this->db->where("artikel.id_kategori_artikel = kategori_artikel.id_kategori_artikel and artikel.id_kategori_artikel = 'KTA002'");
			$csr= $this->db->get('',$number,$offset);
			return $csr->result();			
		}
		function jml_csr(){
			return $this->db->query("SELECT * FROM artikel,kategori_artikel WHERE artikel.id_kategori_artikel  = kategori_artikel.id_kategori_artikel AND artikel.id_kategori_artikel = 'KTA002'")->num_rows();
		}
		function data_promo($number,$offset){
			$this->db->select("*");
			$this->db->from("artikel,kategori_artikel");
			$this->db->where("artikel.id_kategori_artikel = kategori_artikel.id_kategori_artikel and artikel.id_kategori_artikel = 'KTA003'");
			$csr= $this->db->get('',$number,$offset);
			return $csr->result();			
		}
		function jml_promo(){
			return $this->db->query("SELECT * FROM artikel,kategori_artikel WHERE artikel.id_kategori_artikel  = kategori_artikel.id_kategori_artikel AND artikel.id_kategori_artikel = 'KTA003'")->num_rows();
		}
	}
 ?>