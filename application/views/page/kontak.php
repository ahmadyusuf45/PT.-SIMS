<div class="container-fluid">
	<div class="row">
		<div class="exit">
			<h3><a href="<?php echo site_url('sims/page/home') ?>"><span class="glyphicon glyphicon-remove"></span></a></h3>
		</div>
			<h1 class="judul-page">Kontak</h1>
	</div>
</div>
<div class="container-fluid">
	<div class="col-sm-8 col-md-8">
		<?php echo $item_kontak['map']; ?>
	</div>
	<div class="col-sm-4 col-md-4">
		<div class="media col-md-12">
			<div class="media-left">
				<img src="<?php echo base_url() ?>img/item_(10).png" class="media-object item-page-kontak-img">
			</div>
			<div class="media-body">
				<h4><?php echo $item_kontak['no_tlp']; ?></h4>
			</div>
		</div>
		<div class="media col-md-12">
			<div class="media-left">
				<img src="<?php echo base_url() ?>img/item_(8).png" class="media-object item-page-kontak-img">
			</div>
			<div class="media-body">
				<h4><?php echo $item_kontak['alamat']; ?></h4>
			</div>
		</div>
		<div class="media col-md-12">
			<div class="media-left">
				<img src="<?php echo base_url() ?>img/item_(9).png" class="media-object item-page-kontak-img">
			</div>
			<div class="media-body">
				<h4><?php echo $item_kontak['fex']; ?></h4>
			</div>
		</div>
	</div>
</div>