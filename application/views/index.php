<!DOCTYPE html>
<html>
<head>
  <title></title>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="veiwport"> 
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/index.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('DataTables/media/css/dataTables.bootstrap.min.css'); ?>">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>ckeditor/ckeditor.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>DataTables/media/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>DataTables/media/js/dataTables.bootstrap.min.js"></script>
</head>
<body>
<div class="header">
  <div class="logo">
    <img src="<?php echo base_url("img/logo.png") ?>">
    <h2 class="satu">DASHBORD</h2>
    <h2 class="dua"><?php echo $this->session->userdata('level'); ?></h2>
    <h1 onclick="menu_header()"><span class="glyphicon glyphicon-align-justify"></span></h1>
  </div>
  <div class="logout">
    <a href="<?php echo site_url('master/logout');?>" data-toggle="tooltip" data-placement="bottom" title="Logout"><span class="glyphicon glyphicon-user"></span></a>
  </div>
  <div class="user">
    
  </div>
</div>
<div class="menu_header">
  <section>
  <?php if($this->session->userdata('level')=="master"){ ?>
         <a href="<?php echo site_url('admin/page/beranda');?>">Beranda</a>
         <a href="<?php echo site_url('admin/page/slide');?>">Slide</a>
         <a data-toggle="collapse" data-target="#artikel_atas">Artikel</a>
         <div class="collapse drop-menu-kiri" id="artikel_atas">
         <a href="<?php echo site_url('admin/page/kategori_artikel');?>">Kategori Artkel</a>  
         <a href="<?php echo site_url('admin/page/artikel');?>">Data Artikel</a>
         </div>
         <a data-toggle="collapse" data-target="#galery_atas">Gallery</a>
         <div class="collapse drop-menu-kiri" id="galery_atas">
         <a href="<?php echo site_url('admin/page/kategori_galery');?>">Kategori Gallery</a>
         <a href="<?php echo site_url('admin/page/galery');?>">Data Gallery</a>  
         </div>
         <a href="<?php echo site_url('admin/page/indentitas');?>">Identitas</a>
         <?php }else{?>
         <a href="<?php echo site_url('admin/page/beranda');?>">Beranda</a>
         <a href="<?php echo site_url('admin/page/slide');?>">Slide</a>
         <a data-toggle="collapse" data-target="#artikel_atas_2">Artikel</a>
         <div class="collapse drop-menu-kiri" id="artikel_atas_2">  
         <a href="<?php echo site_url('admin/page/artikel');?>">Data Artikel</a>
         </div>
         <a data-toggle="collapse" data-target="#galery_atas_2">Gallery</a>
         <div class="collapse drop-menu-kiri" id="galery_atas_2">
         <a href="<?php echo site_url('admin/page/galery');?>">Data Gallery</a>  
         </div>
         <?php } ?>
  </section>
</div>
<div class="menu_kiri">
  <section>
          <?php if($this->session->userdata('level')=="master"){ ?>
         <a href="<?php echo site_url('admin/page/beranda');?>">Beranda</a>
         <a href="<?php echo site_url('admin/page/slide');?>">Slide</a>
         <a data-toggle="collapse" data-target="#artikel_bawah">Artikel</a>
         <div class="collapse drop-menu-kiri" id="artikel_bawah">
         <a href="<?php echo site_url('admin/page/kategori_artikel');?>">Kategori Artkel</a>  
         <a href="<?php echo site_url('admin/page/artikel');?>">Data Artikel</a>
         </div>
         <a data-toggle="collapse" data-target="#galery_bawah">Gallery</a>
         <div class="collapse drop-menu-kiri" id="galery_bawah">
         <a href="<?php echo site_url('admin/page/kategori_galery');?>">Kategori Gallery</a>
         <a href="<?php echo site_url('admin/page/galery');?>">Data Gallery</a>  
         </div>
         <a href="<?php echo site_url('admin/page/identitas');?>">Identitas</a>
         <?php }else{ ?>
         <a href="<?php echo site_url('admin/page/beranda');?>">Beranda</a>
         <a href="<?php echo site_url('admin/page/slide');?>">Slide</a>
         <a data-toggle="collapse" data-target="#artikel_bawah_2">Artikel</a>
         <div class="collapse drop-menu-kiri" id="artikel_bawah_2">  
         <a href="<?php echo site_url('admin/page/artikel');?>">Data Artikel</a>
         </div>
         <a data-toggle="collapse" data-target="#galery_bawah_2">Gallery</a>
         <div class="collapse drop-menu-kiri" id="galery_bawah_2">
         <a href="<?php echo site_url('admin/page/galery');?>">Data Gallery</a>  
         </div>
         <?php } ?>
  </section>
</div>
<div class="content">
  <?php
    include "content/".$page.".php";
  ?>
</div>
</body>
</html>
<script type="text/javascript">
 $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
  function menu_header(){
    $(".menu_header").slideToggle(500);
  }
</script>