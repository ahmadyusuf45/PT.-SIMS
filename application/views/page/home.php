<div id="skin-home">
	<div class="container-fluid" id="skin-logo">
		<div id="item-logo">
			<img src="<?php echo base_url() ?>img/logo.png">
		</div>
	</div>
	<div class="container-fluid" id="skin-slide">
	<div id="skin-all-slide">
		<div class="col-lg-10 skin-deep-slide ">
			<ul class="rslides" id="slider">
				<?php 
				foreach ($tmp_slide as $data) {
				 ?>
				 <li><img src="<?php echo base_url() ?>slide/<?php echo $data->foto_slide; ?>" class="image-slide"></li>
				 <?php } ?>
			</ul>
		</div>
	</div>
	</div>
	<div class="container-fluid" id="skin-menu">
	<div id="box-menu">
		<div class="col-sm-3 col-md-3" >
		<div class="col-sm-12 col-md-12" id="item-menu">
			<img src="<?php echo base_url() ?>img/item_(1).png" type="button" data-toggle="tooltip" onclick="list_menu()" data-placement="bottom" title="Artikel" class="img-menu" >
		</div>
		<div class="col-sm-12 col-md-12 " id="list-menu">
			<div class="row">
				<a href="<?php echo site_url('sims/page/layanan') ?>"><img src="<?php echo base_url() ?>img/item_(6).png" data-toggle="tooltip" data-placement="left" title="Layanan" class="img-menu"></a>
				<a href="<?php echo site_url('sims/page/csr') ?>"><img src="<?php echo base_url() ?>img/item_(4).png" data-toggle="tooltip" data-placement="left" title="CSR" class="img-menu"></a>
				<a href="<?php echo site_url('sims/page/promo') ?>"><img src="<?php echo base_url() ?>img/item_(7).png" data-toggle="tooltip" data-placement="left" title="Promo" class="img-menu"></a>
			</div>
		</div>
		</div>
		<div class=" col-sm-3 col-md-3">
		<div class="col-sm-12 col-md-12" id="item-menu">
			<a href="<?php echo site_url('sims/page/profil') ?>"><img src="<?php echo base_url() ?>img/item_(2).png" data-toggle="tooltip" data-placement="bottom" title="Profil" class="img-menu"></a>
		</div>
		</div>
		<div class="col-sm-3 col-md-3">
		<div class="col-sm-12 col-md-12" id="item-menu">
			<a href="<?php echo site_url('sims/page/galery') ?>"><img src="<?php echo base_url() ?>img/item_(5).png" data-toggle="tooltip" data-placement="bottom" title="Gallery" class="img-menu"></a>
		</div>
		</div>
		<div class="col-sm-3 col-md-3" >
		<div class="col-sm-12 col-md-12" id="item-menu">
			<a href="<?php echo site_url('sims/page/kontak') ?>"><img src="<?php echo base_url() ?>img/item_(3).png" data-toggle="tooltip" data-placement="bottom" title="Kontak" class="img-menu"></a>
		</div>
		</div>
	</div>
	</div>
</div>