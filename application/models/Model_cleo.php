<?php 
/*model bagian backend*/
	class model_cleo extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		function tmp_slide(){
			return $this->db->get('slide');
		}
		function tmp_produk(){
			return $this->db->get('produk');
		}
		function tmp_kategori_galery(){
			return $this->db->get('kategori_galery');
		}
		function tmp_identitas(){
			return $this->db->get('identitas');
		}
		function tmp_kategori_artikel(){
			return $this->db->get('kategori_artikel');
		}
		function qw($table,$prop){
			return $this->db->query("SELECT * FROM $table $prop");
		}
		function id_slide(){
			$qr = $this->db->query("SELECT max(id_slide) as maxKode FROM slide");
			$hs = $qr->row_array();
			$kb = $hs['maxKode'];
			$nu = (int) substr($kb,3,3);
			$nu++;
			$char = "SLD";
			$newid = $char . sprintf("%03s",$nu);
			return $newid;
		}
		function id_artikel(){
			$qr = $this->db->query("SELECT max(id_artikel) as maxKode FROM artikel");
			$hs = $qr->row_array();
			$kb = $hs['maxKode'];
			$nu = (int) substr($kb,3,3);
			$nu++;
			$char = "ART";
			$newid = $char . sprintf("%03s",$nu);
			return $newid;
		}
		function id_produk(){
			$qr = $this->db->query("SELECT max(id_produk) as maxKode FROM produk");
			$hs = $qr->row_array();
			$kb = $hs['maxKode'];
			$nu = (int) substr($kb,3,3);
			$nu++;
			$char = "PRK";
			$newid = $char . sprintf("%03s",$nu);
			return $newid;
		}
		function id_galery(){
			$qr = $this->db->query("SELECT max(id_galery) as maxKode FROM galery");
			$hs = $qr->row_array();
			$kb = $hs['maxKode'];
			$nu = (int) substr($kb,3,3);
			$nu++;
			$char = "GRY";
			$newid = $char . sprintf("%03s",$nu);
			return $newid;
		}
		function id_identitas(){
			$qr = $this->db->query("SELECT max(id_identitas) as maxKode FROM identitas");
			$hs = $qr->row_array();
			$kb = $hs['maxKode'];
			$nu = (int) substr($kb,3,3);
			$nu++;
			$char = "IDT";
			$newid = $char . sprintf("%03s",$nu);
			return $newid;
		}
		function id_kategori_artikel(){
			$qr = $this->db->query("SELECT max(id_kategori_artikel) as maxKode FROM kategori_artikel");
			$hs = $qr->row_array();
			$kb = $hs['maxKode'];
			$nu = (int) substr($kb,3,3);
			$nu++;
			$char = "KTA";
			$newid = $char . sprintf("%03s",$nu);
			return $newid;
		}
		function simpan_slide($table,$value){
			return $this->db->insert($table,$value);
		}
		function edit_slide($table,$where,$value){
			$this->db->where('id_slide',$where);
			return $this->db->update($table,$value);
		}
		function hapus_slide($table,$where){
			$this->db->where('id_slide',$where);
			return $this->db->delete($table);
		}
		function simpan_artikel($table,$value){
			return $this->db->insert($table,$value);
		}
		function edit_artikel($table,$where,$value){
			$this->db->where('id_artikel',$where);
			return $this->db->update($table,$value);
		}
		function hapus_artikel($table,$where){
			$this->db->where('id_artikel',$where);
			return $this->db->delete($table);
		}
		function simpan_produk($table,$value){
			return $this->db->insert($table,$value);
		}
		function edit_produk($table,$where,$value){
			$this->db->where('id_produk',$where);
			return $this->db->update($table,$value);
		}
		function hapus_produk($table,$where){
			$this->db->where('id_produk',$where);
			return $this->db->delete($table);
		}
		function simpan_kategori_galery($table,$value){
			return $this->db->insert($table,$value);
		}
		function edit_kategori_galery($table,$where,$value){
			$this->db->where('id_kategori_galery',$where);
			return $this->db->update($table,$value);
		}
		function hapus_kategori_galery($table,$where){
			$this->db->where('id_kategori_galery',$where);
			return $this->db->delete($table);
		}
		function simpan_galery($table,$value){
			return $this->db->insert($table,$value);
		}
		function edit_galery($table,$where,$value){
			$this->db->where('id_galery',$where);
			return $this->db->update($table,$value);
		}
		function hapus_galery($table,$where){
			$this->db->where('id_galery',$where);
			return $this->db->delete($table);
		}
		function simpan_identitas($table,$value){
			return $this->db->insert($table,$value);
		}
		function edit_identitas($table,$where,$value){
			$this->db->where('id_identitas',$where);
			return $this->db->update($table,$value);
		}
		function simpan_kategori_artikel($table,$value){
			return $this->db->insert($table,$value);
		}
		function edit_kategori_artikel($table,$where,$value){
			$this->db->where('id_kategori_artikel',$where);
			return $this->db->update($table,$value);
		}
		function hapus_kategori_artikel($table,$where){
			$this->db->where('id_kategori_artikel',$where);
			return $this->db->delete($table);
		}
	}
/*model bagian backend*/
 ?>