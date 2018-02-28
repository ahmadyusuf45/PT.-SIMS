<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/login.css'); ?>">
	<script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/jquery-3.2.1.min.js"></script>
</head>
<body>
<center>
<div class="badan-login">
	<div id="gambar">
		<img src="<?php echo base_url() ?>img/unnamed.png">
	</div>
	<?php echo form_open('master/aksi_login'); ?>
	<div id="login">
		<input type="text" name="username" placeholder="username" id="username">
		<input type="password" name="password" placeholder="password" id="password">
		<input type="submit" name="login" value="login">
	</div>
	<?php echo form_close(); ?>
</div>
</center>
</body>
</html>
