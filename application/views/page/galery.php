<div class="container-fluid">
	<div class="row">
		<div class="exit">
			<h3><a href="<?php echo site_url('sims/page/home') ?>"><span class="glyphicon glyphicon-remove"></span></a></h3>
		</div>
			<h1 class="judul-page">Gallery</h1>
	</div>
</div>
<div class="container-fluid">
	<div class="container skin-page-galery">
		<div class="col-sm-10 col-md-10">
			<button class="btn btn-galery" data-filter="all">All</button>
			<?php
			foreach ($tmp_ket_galery as $item_ket_galery) {
			?>
			<button class="btn btn-galery" data-filter="<?php echo $item_ket_galery->id_kategori_galery; ?>"><?php echo $item_ket_galery->nama_kategori_galery ?></button>
			<?php } ?>
		</div>
		<div class="col-sm-10 col-md-10 item-fil-gallery">
			<div class="row">
				<div class="filtr-container">
					<div class="chocolat-parent">
						<?php 
						foreach ($tmp_galery as $item_galery) {
						 ?>
						 <div class="filtr-item" data-category="<?php echo $item_galery->id_kategori_galery; ?>">
						 	<a class="chocolat-image" href="<?php echo base_url() ?>galery/<?php echo $item_galery->foto_galery; ?>">
						 		<img src="<?php echo base_url() ?>galery/<?php echo $item_galery->foto_galery; ?>" class="item-gallery">
						 	</a>
						 </div>
						 <?php } ?>
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>