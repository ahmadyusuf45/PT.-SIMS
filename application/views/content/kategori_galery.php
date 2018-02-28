<h1>kategori galery <button class="btn btn-info" id="btn-kanan" onclick="document.location='<?php echo site_url('admin/page/f_kategori_galery'); ?>'"><span class="glyphicon glyphicon-plus"></span> Tambah</button></h1>
<div class="table-responsive">
	<table class="table table-bordered" id="table">
		<thead>
		<tr>
			<th>No</th>
			<th>Nama Kategori Galery</th>
			<th>Action</th>
		</tr>
	</thead>
	 <tbody>
	 <?php 
	$no = 0;
	foreach ($tmp_kategori_galery as $data) {$no++;
	 ?>
	 	<tr>
	 		<td><?php echo $no;?></td>
	 		<td><?php echo $data->nama_kategori_galery; ?></td>
	 		<td>
	 			<a href="<?php echo site_url('admin/page/f_kategori_galery') ?>/<?php echo $data->id_kategori_galery ?>" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a>
				<a href="<?php echo site_url('admin/hapus_kategori_galery') ?>/<?php echo $data->id_kategori_galery ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
	 		</td>
	 	</tr>
	 	<?php } ?>
	 </tbody>
	</table>
</div>
<script type="text/javascript">
$(document).ready(function(){
	$("#table").DataTable();
})
</script>