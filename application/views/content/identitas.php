<?php 
	if(empty($tmp_identitas)){
		$out = site_url('admin/page/f_identitas');
	}else{
		$out = site_url('admin/page/f_identitas/'.$kode);
	}
 ?>
<h1>Identitas <button class="btn btn-info" id="btn-kanan" onclick="document.location='<?php echo $out; ?>'"><span class="glyphicon glyphicon-edit"></span> Edit</button></h1>
<div class="container-fluid">
	<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#profil">Profil</a></li>
			<li><a data-toggle="tab" href="#visi_misi">Visi Misi Dan Lisensi</a></li>
			<li><a data-toggle="tab" href="#kontak"> Kontak</a></li>
		</ul>
		<div class="tab-content">
			<div id="profil" class="tab-pane fade in active">
				<div class="col-sm-12 col-md-12">
					<div class="form-group">
						<img src="<?php echo base_url() ?>identitas/<?php echo $item['foto_profil'] ?>?" class="item-page-identitas-img">
					</div>
				</div>
				<div class="col-sm-6 col-md-6">
					<div class="form-group">
						<label>Data Profil</label>
						<?php echo $item['deskripsi_profil'] ?>
					</div>
				</div>
				<div class="col-sm-6 col-md-6">
					<div class="form-group">
						<label>Sekilas Profil</label>
						<?php echo $item['sekilas_profil'] ?>
					</div>
				</div>
			</div>
			<div id="visi_misi" class="tab-pane fade">
				<div class="col-sm-12 col-md-12">
					<div class="form-group">
						<?php echo $item['lisensi'] ?>
					</div>
				</div>
				<div class="col-sm-12 col-sm-12">
					<div class="form-group">
						<?php echo $item['visi_misi'] ?>
					</div>
				</div>
			</div>
			<div id="kontak" class="tab-pane fade">
			<div class="col-sm-8 col-md-8">
				<?php echo $item['map']; ?>
			</div>
			<div class="col-sm-4 col-md-4">
				<div class="form-group col-md-12">
					<label>Nomor Telepon</label>
					<input type="text" name="no_tlp" value="<?php echo $item['no_tlp'] ?>" class="form-control" readonly>
				</div>
				<div class="form-group col-md-12">
					<label>Fex</label>
					<input type="text" name="fex" value="<?php echo $item['fex'] ?>" class="form-control" readonly>
				</div>
				<div class="form-group col-md-12">
					<label>Alamat</label>
					<input type="text" name="alamat" value="<?php echo $item['alamat'] ?>" class="form-control" readonly>
				</div>				
			</div>

			</div>
		</div>
</div>