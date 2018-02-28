<h1>Kategori artikel <button class="btn btn-info" id="btn-kanan" onclick="document.location='<?php echo site_url('admin/page/f_kategori_artikel'); ?>'"><span class="glyphicon glyphicon-plus"></span> Tambah</button></h1>
<div class="table-responsive">
	<table class="table table-bordered" id="table">
		<thead>
			<tr>
				<th style="width: 5%;">No</th>
				<th>Nama Kategori Artikel</th>
				<th style="width: 20%">Action</th>
			</tr>
		</thead>
		 <tbody>
		<?php 
		$no = 0;
		foreach ($tmp_kategori_artikel as $data) { $no++;
		 ?>
		 	<tr>
		 		<td><?php echo $no; ?></td>
		 		<td><?php echo $data->nama_kategori_artikel; ?></td>
		 		<td>
		 		<a href="<?php echo site_url('admin/page/f_kategori_artikel') ?>/<?php echo $data->id_kategori_artikel ?>" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a>
				<a href="<?php echo site_url('admin/hapus_kategori_artikel') ?>/<?php echo $data->id_kategori_artikel ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
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