<?php /* Smarty version Smarty-3.1.20, created on 2015-07-16 05:46:42
         compiled from "C:\wamp\www\kmhotel\app\views\user\login.html" */ ?>
<?php /*%%SmartyHeaderCode:912055a3ead1cb0009-85436412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee51855cbf4c48e4cc6f02e296f795663a5595d6' => 
    array (
      0 => 'C:\\wamp\\www\\kmhotel\\app\\views\\user\\login.html',
      1 => 1437018319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '912055a3ead1cb0009-85436412',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_55a3ead1d47bb3_70599508',
  'variables' => 
  array (
    'assets' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a3ead1d47bb3_70599508')) {function content_55a3ead1d47bb3_70599508($_smarty_tpl) {?>
<!DOCTYPE html>
<html class="no-js">

<head>

<meta charset="utf-8">
<title>html5响应式后台登录界面</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- CSS -->

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/css/login_css/supersized.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/css/login_css/login.css">
<link href="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
    <script src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/js/login_js/html5.js"></script>
    <![endif]-->
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/js/login_js/jquery.form.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/js/login_js/login.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/js/login_js/tooltips.js"></script>

</head>

<body>

<div class="page-container">
	<div class="main_box">
		<div class="login_box">
			<div class="login_logo">
			<img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/login_logo.png" >
                <!--<p>后台登录</p>-->
			</div>
		
			<div class="login_form">
				<form action="index.php?c=user&a=do_login" id="login_form" method="post">
					<div class="form-group">
						<label for="username" class="t">用户名：</label>
						<input id="username" value="" name="username" type="text" class="form-control x319 in"
						autocomplete="off">
					</div>
					<div class="form-group">
						<label for="password" class="t">密　码：</label>
						<input id="password" value="" name="password" type="password" 
						class="password form-control x319 in">
					</div>
					<div class="form-group">
						<label for="j_captcha" class="t">验证码：</label>
						 <input id="j_captcha" name="verify" type="text" class="form-control x164 in"/>
                        <a href="#"><img src="/lib/code.php" onclick="javascript:this.src='/lib/code.php?tm='+Math.random();" />
                        </a>
                    </div>
					<div class="form-group">
						<label class="t"></label>
						<label for="j_remember" class="m">
						<input id="j_remember" name="rem" type="checkbox" value="1">&nbsp;记住登陆账号!</label>
					</div>
					<div class="form-group space">
						<label class="t"></label>　　　
						<button type="button"  id="submit_btn" 
						class="btn btn-primary btn-lg">&nbsp;登&nbsp;录&nbsp </button>
						<input type="reset" value="&nbsp;重&nbsp;置&nbsp;" class="btn btn-default btn-lg">
					</div>
				</form>
			</div>
		</div>
		<div class="bottom">Copyright &copy; 2014 - 2015 <a href="#">系统登陆</a></div>
	</div>
</div>

<!-- Javascript -->

<script src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/js/login_js/supersized.3.2.7.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/js/login_js/supersized-init.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/js/login_js/scripts.js"></script>
<div style="text-align:center;">
</div>
</body>
</html><?php }} ?>
