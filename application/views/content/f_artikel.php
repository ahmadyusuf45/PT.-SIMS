<?php 
	if($status == "edit"){
		$val = $hsl->row_array();
	}else{
		$val['id_artikel']="$kode";
		$val['judul_artikel']="";
		$val['isi_artikel']="";
		$val['id_kategori_artikel']="";
	}
 ?>
 <h1><?php echo $judul ?></h1>
 <?php echo form_open_multipart($open); ?>
 <input type="text" hidden name="id_artikel" value="<?php echo $val['id_artikel']; ?>">
 <div class="form-group">
 	<label>Foto Artikel <b><i>Max 1920x1080</i></b></label>
 	<input type="file" name="foto_artikel" class="form-control">
 </div>
  <div class="form-group">
 	<label>Judul Artikel</label>
 	<input type="text" name="judul_artikel" class="form-control" value="<?php echo $val['judul_artikel']; ?>">
 </div>
 <div class="form-group">
 	<label>Isi Artikel</label>
 	<textarea id="editor" name="isi_artikel"><?php echo $val['isi_artikel']; ?></textarea>
 </div>
 <div class="form-group">
 	<label>Kategori Artikel</label>
 	<?php 
 	$kategori = $this->db->get('kategori_artikel');
 	$artikel = $this->db->get('artikel');
 	foreach ($kategori->result() as $row) {
 		$hasil[$row->id_kategori_artikel] = $row->nama_kategori_artikel;
 	}
 	$pilih = array($artikel);
 	$pilih = array('class'=>'form-control');
 	echo form_dropdown('id_kategori_artikel',$hasil,$val['id_kategori_artikel'],$pilih);
 	 ?>
 </div>
 <input type="submit" name="<?php echo $value ?>" class="btn btn-primary" value="<?php echo $value ?>">
 <?php echo form_close(); ?>
 <script type="text/javascript">
 	CKEDITOR.replace('editor');
 </script>