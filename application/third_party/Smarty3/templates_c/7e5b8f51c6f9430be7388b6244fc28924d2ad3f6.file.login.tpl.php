<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-02 01:17:58
         compiled from "application\views\layout\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:815354f330d4794152-86638772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e5b8f51c6f9430be7388b6244fc28924d2ad3f6' => 
    array (
      0 => 'application\\views\\layout\\login.tpl',
      1 => 1425231187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '815354f330d4794152-86638772',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f330d4949165_55931315',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f330d4949165_55931315')) {function content_54f330d4949165_55931315($_smarty_tpl) {?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
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
        <link rel="shortcut icon" href="img/favicon.png">
    </head>
    <body class="login-page">
        <!-- BEGIN Main Content -->
        <div class="login-wrapper">
            <!-- BEGIN Login Form -->
            <?php echo form_open('auth/login',array('id'=>'form-login'));?>

            <p><a href="forgot_password"><?php echo '<?php'; ?>
 echo lang('login_forgot_password');<?php echo '?>'; ?>
</a></p>
            <h3>Masuk Sistem Layanan</h3>
            <hr/>
            <?php echo $_smarty_tpl->tpl_vars['data']->value['message'];?>

            <div class="form-group">
                <div class="controls">
                    <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['username']);?>

                    <?php echo form_error('username','<p class="help-block text-red">','</p>');?>

                </div>
            </div>
            <div class="form-group">
                <div class="controls">
                    <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['password']);?>

                </div>
            </div>
            <div class="form-group">
                <div class="controls">
                    <label class="checkbox">
                        <?php echo form_checkbox('remember');?>
 Biarkan Saya Masuk
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="controls">
                    <?php echo form_submit('login',"Masuk",'class="btn btn-primary form-control"');?>

                </div>
            </div>
            <hr/>
            <p class="clearfix">
                <a href="<?php echo base_url();?>
auth/" class="goto-forgot pull-left">Lupa Password?</a>
                <a href="<?php echo base_url();?>
auth/member_registration" class="goto-register pull-right">Daftar Anggota Baru</a>
            </p>
            <?php echo form_close();?>

            <!-- END Login Form -->
        </div>
        <!-- END Main Content -->
        <!--basic scripts-->
        <?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>window.jQuery || document.write('<?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/assets/jquery/jquery-2.1.1.min.js"><\/script>')<?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/assets/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    </body>
</html>
<?php }} ?>
