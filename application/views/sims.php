<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset='utf-8'/>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
	<link href="https://fonts.googleapis.com/css?family=Asap+Condensed" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/sims.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/responsive-sims.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('Chocolat-0.4.18/src/css/chocolat.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('ResponsiveSlides.js-master/responsiveslides.css') ?>">
	<script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>ResponsiveSlides.js-master/responsiveslides.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>Chocolat-0.4.18/src/js/jquery.chocolat.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>Filterizr-master/dist/jquery.filterizr.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>Filterizr-master/src/jquery.filterizr.js"></script>
</head>
<body>

<div class="content">
<?php 
	include "page/".$page.".php";
 ?>
</div>
</body>
</html>
<script type="text/javascript" src="<?php echo base_url() ?>particles.js-master/particles.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>particles.js-master/app.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
		$("#slider").responsiveSlides({
			speed:200
		});
    $('[data-toggle="tooltip"]').tooltip(); 
     $('.filtr-container').filterizr();  
     $('.chocolat-parent').Chocolat();

});
	 function list_menu(){
		$("#list-menu").slideToggle(500);
	}
	function open_content(url,method){
	if(method == "tampil"){
		$(".content").load(url);
		$(".content").fadeIn(100);
	}else{
		$(".content").fadeOut(100);
		}
	}
	function open_list(url,method){
		if(method == "tampil"){
			$(".view-list").load(url);
			$(".view-list").fadeIn(100);
		}else{
			$(".view-list").fadeOut(100);
		}
	}
</script>
