<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-23 14:05:53
         compiled from "application\views\administrator\user_pemerintah\pemerintah_kota.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11568555d4c08e552b8-19201814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5125c59f90f30c1173c49558f79f83534f86a88' => 
    array (
      0 => 'application\\views\\administrator\\user_pemerintah\\pemerintah_kota.tpl',
      1 => 1432227235,
      2 => 'file',
    ),
    '4bf1b8ab844cf1976ef2e024066a41bd37c557ee' => 
    array (
      0 => 'application\\views\\layout\\master.tpl',
      1 => 1432322939,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11568555d4c08e552b8-19201814',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555d4c090e44d9_11864281',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555d4c090e44d9_11864281')) {function content_555d4c090e44d9_11864281($_smarty_tpl) {?><!DOCTYPE html>
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
assets/assets/data-tables/bootstrap3/dataTables.bootstrap.css" rel="stylesheet" type="text/css" media="all"/>


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
        <li>Akun Pemerintah</li>
        <li class="active">Pemerintah Kota</li>
    </ol>

            <!-- end:breadcrumb -->   

            <div class="row" id="home-content">
            
    <div class="col-lg-12">
        <h2 class="page-header">
            Akun Pemerintah Kota
        </h2>
        <div class="clearfix">
            <div class="btn-group">
                <a href="<?php echo site_url('administrator/pemerintahkota/insert');?>
" class="btn btn-primary">
                    Tambah Akun <i class="fa fa-plus" data-original-title="" title=""></i>
                </a>
            </div>
            <div class="btn-group pull-right">
                <button class="btn btn-warning dropdown-toggle" data-toggle="dropdown" data-original-title="" title="">Tools <i class="fa fa-angle-down" data-original-title="" title=""></i>
                </button>
                <ul class="dropdown-menu pull-right">
                    <li><a href="#">Print</a></li>
                    <li><a href="#">Save as PDF</a></li>
                    <li><a href="#">Export to Excel</a></li>
                </ul>
            </div>
        </div>
        <br>
        <!-- start:state overview -->
        <section class="panel">
            <div class="panel-body">
                <table class="table table-advance table-responsive" id="example3">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Kota/Kabupaten</th>
                            <th>Modifikasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  $_smarty_tpl->tpl_vars['kota'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kota']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['PemerintahKota']->result(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kota']->key => $_smarty_tpl->tpl_vars['kota']->value) {
$_smarty_tpl->tpl_vars['kota']->_loop = true;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['kota']->value->ID;?>
</td>
                                <td><b><?php echo $_smarty_tpl->tpl_vars['kota']->value->NamaPemerintah;?>
</b></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['kota']->value->Username;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['kota']->value->NamaKota;?>
</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="<?php echo site_url('administrator/pemerintahkota/edit');?>
/<?php echo $_smarty_tpl->tpl_vars['kota']->value->ID;?>
" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit" data-original-title="" title=""></i></a>
                                        <a class="btn btn-danger" data-toggle="modal" data-target="#delete<?php echo $_smarty_tpl->tpl_vars['kota']->value->ID;?>
" title="Delete"><i class="fa fa-trash-o" data-original-title="" title=""></i></a>
                                    </div>
                                    <div class="modal fade bs-example-modal-sm" id ="delete<?php echo $_smarty_tpl->tpl_vars['kota']->value->ID;?>
">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title">Hapus Akun Pemerintah Kota</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <b>Anda Yakin akan menghapus?</b><br>
                                                    <?php echo $_smarty_tpl->tpl_vars['kota']->value->ID;
echo $_smarty_tpl->tpl_vars['kota']->value->NamaPemerintah;?>

                                                    <input type="text" name="UserID" value="<?php echo $_smarty_tpl->tpl_vars['kota']->value->UserID;?>
">
                                                </div>
                                                <div class="modal-footer">
                                                    <a href='<?php echo site_url('administrator/pemerintahkota/delete');?>
/<?php echo $_smarty_tpl->tpl_vars['kota']->value->ID;?>
?user=<?php echo $_smarty_tpl->tpl_vars['kota']->value->UserID;?>
' type="button" class="btn btn-primary">Ya</a>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
    
    

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


    <?php echo '<script'; ?>
 src="http://code.highcharts.com/highcharts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/assets/data-tables/jquery.dataTables.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/assets/data-tables/bootstrap3/dataTables.bootstrap.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function () {
            $('#example3').DataTable();
        });
    <?php echo '</script'; ?>
>

</body>
</html>	<?php }} ?>
