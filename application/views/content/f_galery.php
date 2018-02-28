<?php 
	if($status == 'edit'){
		$val = $hsl->row_array();
	}else{
		$val['id_galery'] = "$kode";
		$val['id_kategori_galery']="";
	}
 ?>
 <h1><?php echo $judul; ?></h1>
 <?php echo form_open_multipart($open); ?>
 <input type="text" hidden name="id_galery" value="<?php echo $val['id_galery'] ?>">
 <div class="form-group">
 	<label>Foto Galery <b><i>Max 1920x1080</i></b></label>
 	<input type="file" name="foto_galery" class="form-control">
 </div>
 <div class="form-group">
 	<label>Kategori Galery</label>
 	<?php 
 	$kategori = $this->db->get('kategori_galery');
 	$galery = $this->db->get('galery');
 	foreach ($kategori->result() as $row) {
 		$hasil[$row->id_kategori_galery] = $row->nama_kategori_galery;
 	}
 	$pilih = array($galery);
 	$pilih = array('class'=>'form-control');
 	echo form_dropdown('id_kategori_galery',$hasil,$val['id_kategori_galery'],$pilih);
 	 ?>
 </div>
 <input type="submit" class="btn btn-primary" value="<?php echo $value ?>" name="<?php echo $value; ?>">
 <?php echo form_close(); ?>