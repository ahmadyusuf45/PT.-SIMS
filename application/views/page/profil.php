<div class="container-fluid">
	<div class="row">
		<div class="exit">
			<h3><a href="<?php echo site_url('sims/page/home') ?>"><span class="glyphicon glyphicon-remove"></span></a></h3>
		</div>
		<h1 class="judul-page">Profil</h1>
	</div>
</div>
<div class="container">
<div class="row">
	<div class="col-sm-12 col-md-12">
	<img src="<?php echo base_url() ?>identitas/<?php echo $item_profil['foto_profil']; ?>" class="item-page-profil-img">	
	</div>
	<div class="col-sm-6 col-md-6">
		<h2>Sekilas Profil</h2>
		<?php echo $item_profil['sekilas_profil']; ?>
	</div>
	<div class="col-sm-6 col-md-6">
		<h2>Identitas</h2>
		<?php echo $item_profil['deskripsi_profil']; ?>
	</div>
	<div class="col-sm-12 col-md-12">
		<?php echo $item_profil['visi_misi']; ?>
	</div>
	<div class="col-sm-12 col-md-12">
		<?php echo $item_profil['lisensi']; ?>
	</div>
</div>
</div>