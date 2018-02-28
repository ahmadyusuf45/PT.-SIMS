<div class="container-fluid">
	<div class="row">
		<div class="exit" id="exit-biru">
			<h3><a href="<?php echo site_url('sims/page/layanan') ?>"><span class="glyphicon glyphicon-arrow-left"></span></a></h3>
		</div>
		<div class="exit">
			<h3><a href="<?php echo site_url('sims/page/home') ?>"><span class="glyphicon glyphicon-remove"></span></a></h3>
		</div>		
	</div>	
</div>
<?php 
	$val = $hsl->row_array();
 ?>
<div class="container">
	<h1>Layanan <?php echo $val['judul_artikel']; ?></h1>
	<img src="<?php echo base_url() ?>artikel/<?php echo $val['foto_artikel'] ?>" class="item-page-detail-layanan-img">
	<?php echo $val['isi_artikel'] ?>
</div>
