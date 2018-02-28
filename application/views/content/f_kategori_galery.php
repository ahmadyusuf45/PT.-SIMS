<?php 
	if($status == 'edit'){
		$val = $hsl->row_array();
	}else{
		$val['id_kategori_galery']="";
		$val['nama_kategori_galery']="";
	}
 ?>
 <h1><?php echo $judul ;?></h1>
 <?php echo form_open_multipart($open); ?>
 <input type="text" hidden name="id_kategori_galery" value="<?php echo $val['id_kategori_galery'] ?>">
 <div class="form-group">
 	<label>Nama Kategori Galery</label>
 	<input type="text" name="nama_kategori_galery" value="<?php echo $val['nama_kategori_galery'] ?>" class="form-control">
 </div>
 <input type="submit" class="btn btn-primary" name="<?php echo $value ?>" value="<?php echo $value ?>">
 <?php echo form_close(); ?>