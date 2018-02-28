<?php 
	if($status == 'edit'){
		$val = $hsl->row_array();
	}else{
		$val['id_kategori_artikel'] = "$kode";
		$val['nama_kategori_artikel'] = "";
	}
 ?>
 <h1><?php echo $judul ?></h1>
 <?php echo form_open_multipart($open); ?>
 <input type="text" hidden name="id_kategori_artikel" value="<?php echo $val['id_kategori_artikel']; ?>">
 <div class="form-group">
 	<label>Nama Kategori Artikel</label>
 	<input type="text" class="form-control" name="nama_kategori_artikel" value="<?php echo $val['nama_kategori_artikel']; ?>">
 </div>
 <input type="submit" class="btn btn-primary" name="<?php echo $value; ?>" value="<?php echo $value; ?>">
 <?php echo form_close(); ?>