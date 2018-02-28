<h1>Artikel 
<?php if($this->session->userdata('level')=="master"){ ?>
<button class="btn btn-info" id="btn-kanan" onclick="document.location='<?php echo site_url('admin/page/f_artikel'); ?>'"><span class="glyphicon glyphicon-plus"></span> Tambah</button>
<?php }else{} ?>
</h1>
<table class="table table-bordered" id="table">
	<thead>
		<tr>
			<th style="width: 5%;">No</th>
			<th>Foto Artikel</th>
			<th>Judul Artikel</th>
			<th>Isi Artikel</th>
			<th>Kategori Artikel</th>
			<th style="width: 20%">Action</th>
		</tr>
	</thead>
	<tbody>
	<?php 
	$no = 0;
	foreach ($tmp_artikel as $data) {$no++
	 ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><img src="<?php echo base_url() ?>artikel/<?php echo $data->foto_artikel ?>" width="200px"></td>
			<td><?php echo $data->judul_artikel; ?></td>
			<td><?php echo substr($data->isi_artikel, 0,110); ?></td>
			<td><?php echo $data->nama_kategori_artikel ?></td>
			<td>
				<a href="<?php echo site_url('admin/page/f_artikel') ?>/<?php echo $data->id_artikel ?>" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a>
				<a href="<?php echo site_url('admin/hapus_artikel') ?>/<?php echo $data->id_artikel ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>
<script type="text/javascript">
$(document).ready(function(){
	$("#table").DataTable();
})
</script>