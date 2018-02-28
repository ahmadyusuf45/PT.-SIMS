<?php 
	if($status == 'edit'){
		$val=$hsl->row_array();
	}else{
		$val['id_slide']="$kode";
		$val['durasi']="";
	}
 ?>
 <h1><?php echo $judul ?></h1>
<?php echo form_open_multipart($open); ?>
<input type="text" hidden name="id_slide" value="<?php echo $val['id_slide'] ?>">
<div class="form-group">
	<label>Foto Slide <b><i>Max 1111x359</i></b></label>
	<input type="file" class="form-control" name="foto_slide">
</div>
<div class="form-group">
	<label>Durasi Slide <b><i>Max 1000</i></b></label>
	<input type="text" class="form-control" name="durasi" value="<?php echo $val['durasi']; ?>">
</div>
<input type="submit" class="btn btn-primary" name="<?php echo $value ?>" value="<?php echo $value ?>">
<?php echo form_close(); ?>