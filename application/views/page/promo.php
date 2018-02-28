<div class="container-fluid">
	<div class="row">
		<div class="exit">
			<h3><a href="<?php echo site_url('sims/page/home') ?>"><span class="glyphicon glyphicon-remove"></span></a></h3>
		</div>
			<h1 class="judul-page">Promo</h1>
	</div>
</div>
<div class="container-fluid skin-page-promo">
<div class="row">
<?php 
	foreach ($tmp_promo as $data) {
 ?>
	<div class="col-sm-6 col-md-6 list-layanan">
		<div class="media">
			<div class="media-left">
				<img src="<?php echo base_url() ?>artikel/<?php echo $data->foto_artikel; ?>" class="media-object list-img-layanan">
			</div>
			<div class="media-body">
				<h3 class="media"><b><?php echo $data->judul_artikel; ?></b></h3>
				<div class="item-isi-artikel">
				<?php echo substr($data->isi_artikel, 0,120) ;echo"..."; ?>	
				</div>
				<a href="<?php echo site_url('sims/page/detail_promo'); ?>/<?php echo $data->id_artikel ?>">View Detail</a>
			</div>
		</div>
	</div>
<?php } ?>
</div>
<?php echo $paging; ?>
</div>