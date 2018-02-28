<?php 
	if($status == 'edit'){
		$val = $hsl->row_array();
	}else{
		$val['id_identitas'] = "$kode";
		$val['deskripsi_profil']="";
		$val['sekilas_profil']="";
		$val['visi_misi']="";
		$val['lisensi']="";
		$val['no_tlp']="";
		$val['fex']="";
		$val['alamat']="";
		$val['map']="";
	}
 ?>
 <h1><?php echo $judul; ?></h1>
 <?php echo form_open_multipart($open); ?>
 <div class="container-fluid">
 <input type="text" hidden name="id_identitas" value="<?php echo $val['id_identitas']; ?>">
 		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#profil">Form Profil</a></li>
			<li><a data-toggle="tab" href="#visi_misi">Form Visi Misi Dan Lisensi</a></li>
			<li><a data-toggle="tab" href="#kontak">Form Kontak</a></li>
		</ul>
		<div class="tab-content">
			<div id="profil" class="tab-pane fade in active">
				<div class="col-sm-12 col-md-12">
					<div class="form-group">
						<label>Foto Profil <b><i>Max 1920x1080</i></b></label>
						<input type="file" name="foto_profil" class="form-control">
					</div>
				</div>
				<div class="col-sm-6 col-md-6">
					<div class="form-group">
						<label>Data Profil</label>
						<textarea name="deskripsi_profil" id="deskripsi_profil"><?php echo $val['deskripsi_profil']; ?></textarea>
					</div>
				</div>
				<div class="col-sm-6 col-md-6">
					<div class="form-group">
						<label>Sekilas Profil</label>
						<textarea name="sekilas_profil" id="sekilas_profil"><?php echo $val['sekilas_profil']; ?></textarea>
					</div>
				</div>
			</div>
			<div id="visi_misi" class="tab-pane fade">
				<div class="col-sm-12 col-md-12">
					<div class="form-group">
						<label>Lisensi</label>
						<textarea id="lisensi" name="lisensi"><?php echo $val['lisensi']; ?></textarea>
					</div>
				</div>
				<div class="col-sm-12 col-sm-12">
					<div class="form-group">
						<label>Visi Dan Misi</label>
						<textarea id="visi" name="visi_misi"><?php echo $val['visi_misi']; ?></textarea>
					</div>
				</div>
			</div>
			<div id="kontak" class="tab-pane fade">
				<div class="form-group">
					<label>Nomor Telepon</label>
					<input type="text" name="no_tlp" value="<?php echo $val['no_tlp'] ?>" class="form-control">
				</div>
				<div class="form-group">
					<label>Fex</label>
					<input type="text" name="fex" value="<?php echo $val['fex']; ?>" class="form-control">
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<input type="text" name="alamat" value="<?php echo $val['alamat']; ?>" class="form-control">
				</div>
				<div class="form-group">
					<label>Map</label>
					<textarea class="form-control" name="map"><?php  echo $val['map']; ?></textarea>
				</div>
			</div>
		</div>
 <input type="submit" class="btn btn-primary" name="<?php echo $value; ?>" value="<?php echo $value; ?>">
 </div>
 <?php echo form_close(); ?>
 <script type="text/javascript">
 	CKEDITOR.replace('visi');
 	CKEDITOR.replace('lisensi');
 	CKEDITOR.replace('sekilas_profil');
 	CKEDITOR.replace('deskripsi_profil');
 </script>