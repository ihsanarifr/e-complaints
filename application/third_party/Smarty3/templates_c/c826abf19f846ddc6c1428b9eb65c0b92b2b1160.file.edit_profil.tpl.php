<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-04 11:49:35
         compiled from "application\views\masyarakat\edit_profil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29145556fd619842af3-22109201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c826abf19f846ddc6c1428b9eb65c0b92b2b1160' => 
    array (
      0 => 'application\\views\\masyarakat\\edit_profil.tpl',
      1 => 1433393370,
      2 => 'file',
    ),
    '4bf1b8ab844cf1976ef2e024066a41bd37c557ee' => 
    array (
      0 => 'application\\views\\layout\\master.tpl',
      1 => 1432322939,
      2 => 'file',
    ),
    'b4ff62d5e0775e11a9da345261acea4de87fc380' => 
    array (
      0 => 'application\\views\\masyarakat\\widget_right.tpl',
      1 => 1433052495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29145556fd619842af3-22109201',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556fd619abe6a4_56362572',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556fd619abe6a4_56362572')) {function content_556fd619abe6a4_56362572($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>E-Complaints</title>
        <meta name="description" content="E-Complaint Responsive Admin Templates" />
        <meta name="keywords" content="resposinve, admin dashboard, admin page, admin template" />
        <meta name="author" content="Candra Dwi Waskito" />
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" href="<?php echo base_url();?>
assets/css/font-awesome.min.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>
assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>
assets/css/bootstrap-reset.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo base_url();?>
assets/css/style.css">

        <!-- css hanya untuk di page ini saja -->
    
    <link href="<?php echo base_url();?>
assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>
assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
assets/css/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
assets/css/owl.transitions.css">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="js/html5shiv.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="js/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
</head>
<body>
    <!-- start:wrapper -->
    <div id="wrapper">
        <!-- Header Top -->
        <?php echo $_smarty_tpl->getSubTemplate ('layout/header-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <!-- start:header -->
            <?php echo $_smarty_tpl->getSubTemplate ('layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!-- end:header -->

        <!-- start:main -->
        <div class="container">
            <div id="main">
                <!-- start:breadcrumb -->
            
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Profil</li>
    </ol>

            <!-- end:breadcrumb -->   

            <div class="row" id="home-content">
            
    <div class="col-lg-8">
        <!-- start:state overview -->
        <div class="panel panel-body">
            <h3 align="left">Edit Profil Identitas Diri</h3>
            <br>
            <?php echo form_open_multipart(('masyarakat/profil/edit/').($_smarty_tpl->tpl_vars['data']->value['id']),'class="form-horizontal"');?>

            
            <div class="form-group">
                <label class="col-sm-4 col-lg-3 control-label">Nama</label>
                <div class="col-sm-8 col-lg-9 controls">
                    <input type="hidden" name='ID' value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">
                    <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['nama']);?>

                    <?php echo form_error('nama','<p class="help-block">','</p>');?>

                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 col-lg-3 control-label">No Telepon</label>
                <div class="col-sm-8 col-lg-9 controls">
                    <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['telepon']);?>

                    <?php echo form_error('telepon','<p class="help-block">','</p>');?>

                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 col-lg-3 control-label">Jenis Kelamin</label>
                <div class="col-sm-8 col-lg-9 controls">
                    <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['jenis_kelamin']);?>

                    <?php echo form_error('jenis_kelamin','<p class="help-block">','</p>');?>

                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 col-lg-3 control-label">Tanggal Lahir</label>
                <div class="col-sm-8 col-lg-9 controls">
                    <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['tgl_lahir']);?>

                    <?php echo form_error('tgl_lahir','<p class="help-block">','</p>');?>

                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 col-lg-3 control-label">No Identitas</label>
                <div class="col-sm-8 col-lg-9 controls">
                    <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['no_identitas']);?>

                    <?php echo form_error('no_identitas','<p class="help-block">','</p>');?>

                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 col-lg-2 control-label">&nbsp;</label>

                <div class="col-sm-9 col-lg-10 controls">
                    <?php echo form_submit('submit',"Edit Profil",'class="btn btn-flat btn-primary"');?>

                </div>
            </div>
            <?php echo form_close();?>

        </div>
    </div>
    <?php /*  Call merged included template "masyarakat/widget_right.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("masyarakat/widget_right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '29145556fd619842af3-22109201');
content_556fd8df586982_80023917($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "masyarakat/widget_right.tpl" */?>

        </div>
        <div class="row">
        
    </div>
</div>
</div>
<!-- end:main -->

<!-- start:footer -->
<?php echo $_smarty_tpl->getSubTemplate ('layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('layout/footer-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- end:footer -->
</div>
<!-- end:wrapper -->

<!-- start:javascript -->
<!-- javascript default for all pages-->
<?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>

<!-- javascript for Srikandi admin -->
<?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/themes.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/jquery.scrollTo.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/jquery.nicescroll.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/jquery.sparkline.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 class="include" type="text/javascript" src="<?php echo base_url();?>
assets/js/jquery.dcjqaccordion.2.7.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/respond.min.js" ><?php echo '</script'; ?>
>
<!-- end:javascript -->


</body>
</html>	<?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-04 11:49:35
         compiled from "application\views\masyarakat\widget_right.tpl" */ ?>
<?php if ($_valid && !is_callable('content_556fd8df586982_80023917')) {function content_556fd8df586982_80023917($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['identitas']->result(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
    <div class="col-lg-4">
        <!-- start:user info -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <header class="panel-title">
                    <div class="text-center">
                        <strong>
                            <?php if ($_smarty_tpl->tpl_vars['row']->value->Nama=='') {?>
                                Belum Ada Nama
                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['row']->value->Nama;?>

                            <?php }?>
                        </strong>
                    </div>
                </header>
            </div>
            <div class="panel-body">
                <div class="text-center" id="author">
                    <?php if ($_smarty_tpl->tpl_vars['row']->value->photo=='') {?>
                        <img src="<?php echo base_url();?>
assets/img/avatar-mini.jpg" class="img-center img-thumbnail img-responsive">
                    <?php } else { ?>
                        <img src="<?php echo base_url();?>
assets/img/<?php echo $_smarty_tpl->tpl_vars['row']->value->photo;?>
" class="img-center img-thumbnail img-responsive">
                    <?php }?>
                    <h3><?php echo $_smarty_tpl->tpl_vars['row']->value->Nama;?>
</h3>
                    <small class="label label-info">Terakhir login <?php echo date('h:m',$_smarty_tpl->tpl_vars['user']->value->last_login);?>
</small>
                    <p>Masyarakat</p>
                    <p class="sosmed-author">
                        <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus"></i></a>
                        <a href="#"><i class="fa fa-linkedin" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin"></i></a>
                    </p>
                </div>
            </div>
        </div>
        <!-- end:user info -->
        <!-- start:user info table -->
        <section class="panel">
            <div class="panel-body">
                <a href="#" class="task-thumb">
                    <?php if ($_smarty_tpl->tpl_vars['row']->value->photo=='') {?>
                        <img src="<?php echo base_url();?>
assets/img/avatar-mini.jpg" class="img-center img-thumbnail img-responsive">
                    <?php } else { ?>
                        <img src="<?php echo base_url();?>
assets/img/<?php echo $_smarty_tpl->tpl_vars['row']->value->photo;?>
" class="img-center img-thumbnail img-responsive">
                    <?php }?>
                    
                </a>
                <div class="task-thumb-details">
                    <h1><a href="#"><?php echo $_smarty_tpl->tpl_vars['row']->value->Nama;?>
</a></h1>
                    <p>(<?php echo $_smarty_tpl->tpl_vars['row']->value->email;?>
)</p>
                </div>
            </div>
            <table class="table table-hover personal-task">
                <tbody>
                    <tr>
                        <td>
                            <i class=" fa fa-tasks"></i>
                        </td>
                        <td><label class="label label-warning">Belum Ditanggapi</label></td>
                        <td> <label class="label label-warning"><?php echo $_smarty_tpl->tpl_vars['data']->value['jumlah_keluhan']['belum'];?>
</label></td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fa fa-exclamation-triangle"></i>
                        </td>
                        <td><label class="label label-default">Proses Ditanggapi</label></td>
                        <td> <label class="label label-default"><?php echo $_smarty_tpl->tpl_vars['data']->value['jumlah_keluhan']['proses'];?>
</label></td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fa fa-envelope"></i>
                        </td>
                        <td><label class="label label-info">Sudah Ditanggapi</label></td>
                        <td> <label class="label label-info"><?php echo $_smarty_tpl->tpl_vars['data']->value['jumlah_keluhan']['selesai'];?>
</label></td>
                    </tr>
                </tbody>
            </table>
        </section>
        <!-- end:user info table -->
    </div>
<?php } ?><?php }} ?>
