<h1>galery 
<?php if($this->session->userdata('level')=="master"){ ?>
<button class="btn btn-info" id="btn-kanan" onclick="document.location='<?php echo site_url('admin/page/f_galery'); ?>'"><span class="glyphicon glyphicon-plus"></span> Tambah</button>
<?php }else{} ?>
</h1>
<div class="table-responsive">
	<table class="table table-bordered" id="table">
		<thead>
			<tr>
				<th style="width: 5%">No</th>
				<th>Foto Galery</th>
				<th>Nama Kategori Galery</th>
				<th style="width: 20%">Action</th>
			</tr>
		</thead>
		 <tbody>
		 <?php 
		$no=0;
		foreach ($tmp_galery as $data) {$no++;
		 ?>
		 	<tr>
		 		<td><?php echo $no; ?></td>
		 		<td><img src="<?php echo base_url(); ?>galery/<?php echo $data->foto_galery; ?>" width="200px"></td>
		 		<td><?php echo $data->nama_kategori_galery ?></td>
		 		<td>
		 		<a href="<?php echo site_url('admin/page/f_galery') ?>/<?php echo $data->id_galery ?>" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a>
				<a href="<?php echo site_url('admin/hapus_galery') ?>/<?php echo $data->id_galery ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
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