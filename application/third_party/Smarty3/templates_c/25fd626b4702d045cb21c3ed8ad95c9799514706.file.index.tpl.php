<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-01 02:33:16
         compiled from "application\views\pembimbing\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3156754f217fc63b295-72239431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25fd626b4702d045cb21c3ed8ad95c9799514706' => 
    array (
      0 => 'application\\views\\pembimbing\\index.tpl',
      1 => 1425151678,
      2 => 'file',
    ),
    '5a55614e90e193056bf3ce16a104c2bab6c20d4f' => 
    array (
      0 => 'application\\views\\layout\\master.tpl',
      1 => 1424997864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3156754f217fc63b295-72239431',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f217fc8004f7_79164394',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f217fc8004f7_79164394')) {function content_54f217fc8004f7_79164394($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistem Layanan Jasa dan Informasi P2F LIPI</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Icon -->
                
        <!--base css styles-->
        
        <!-- font Awesome -->
        
        
        <!--flaty css styles-->
        
        
		
		<!--base css styles-->
		<link rel="stylesheet" href="<?php echo base_url();?>
assets/assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>
assets/assets/font-awesome/css/font-awesome.min.css">

		<!--page specific css styles-->

		<!--flaty css styles-->
		<link rel="stylesheet" href="<?php echo base_url();?>
assets/css/flaty.css">
		<link rel="stylesheet" href="<?php echo base_url();?>
assets/css/flaty-responsive.css">

        <!-- Addons Style -->
        
        <!-- Theme style -->
        

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
          <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"><?php echo '</script'; ?>
>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- Header -->
        <?php echo $_smarty_tpl->getSubTemplate ('layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        
        <div class="container" id="main-container">
            <!-- Menu Sidebar -->
            <?php echo $_smarty_tpl->getSubTemplate ('layout/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <!-- End Menu Sidebar -->
            
            <!-- Content -->
            
<!-- BEGIN Content -->
<div id="main-content">
<!-- BEGIN Page Title -->
	<div class="page-title">
		<div>
			<h1><i class="fa fa-file-o"></i> Dashboard</h1>
			<h4>Overview, stats, chat and more</h4>
		</div>
	</div>
	<!-- END Page Title -->

	<!-- BEGIN Breadcrumb -->
	<div id="breadcrumbs">
		<ul class="breadcrumb">
			<li class="active"><i class="fa fa-home"></i> Home</li>
		</ul>
	</div>
	<!-- END Breadcrumb -->

	<!-- BEGIN Tiles -->
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-3">
					<div class="tile tile-orange">
					<div class="img">
					<i class="fa fa-comments"></i>
					</div>
					<div class="content">
					<p class="big">128</p>
					<p class="title">Verifikasi JAIF</p>
					</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="tile tile-dark-blue">
					<div class="img">
					<i class="fa fa-download"></i>
					</div>
					<div class="content">
					<p class="big">+160</p>
					<p class="title">Verifikasi Pembimbing</p>
					</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="tile tile-orange">
					<div class="img">
					<i class="fa fa-comments"></i>
					</div>
					<div class="content">
					<p class="big">128</p>
					<p class="title">Belum Aktif</p>
					</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="tile tile-dark-blue">
					<div class="img">
					<i class="fa fa-download"></i>
					</div>
					<div class="content">
					<p class="big">+160</p>
					<p class="title">Aktif</p>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					<div class="tile tile-orange">
					<div class="img">
					<i class="fa fa-comments"></i>
					</div>
					<div class="content">
					<p class="big">128</p>
					<p class="title">Mahasiswa Lulus</p>
					</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="tile tile-dark-blue">
					<div class="img">
					<i class="fa fa-download"></i>
					</div>
					<div class="content">
					<p class="big">+160</p>
					<p class="title">Mahasiswa Tidak Lulus</p>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- END Tiles -->
	<footer>
	<p>2013 © FLATY Admin Template.</p>
	</footer>

	<a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
</div>
<!-- END Content -->

            <!-- End Content -->
        </div>
        <!-- Modal -->    
        <!-- End Modal -->
        


<!--page specific plugin scripts-->


        <!-- jQuery 2.0.2 -->
        <?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>window.jQuery || document.write('<?php echo '<script'; ?>
 src="assets/assets/jquery/jquery-2.1.1.min.js"><\/script>')<?php echo '</script'; ?>
>
        <!-- Bootstrap main  -->
        <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/assets/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/assets/jquery-slimscroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/assets/jquery-cookie/jquery.cookie.js"><?php echo '</script'; ?>
>

        <!--flaty scripts-->
        <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/flaty.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/flaty-demo-codes.js"><?php echo '</script'; ?>
>
        
        <!-- Addons Plugins -->
        
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/assets/flot/jquery.flot.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/assets/flot/jquery.flot.resize.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/assets/flot/jquery.flot.pie.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/assets/flot/jquery.flot.stack.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/assets/flot/jquery.flot.crosshair.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/assets/flot/jquery.flot.tooltip.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/assets/sparkline/jquery.sparkline.min.js"><?php echo '</script'; ?>
>


        <!-- Addons Scripts -->
        
    </body>
</html><?php }} ?>
