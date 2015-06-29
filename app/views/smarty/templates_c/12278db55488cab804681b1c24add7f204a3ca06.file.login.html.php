<?php /* Smarty version Smarty-3.1.20, created on 2015-06-28 07:21:56
         compiled from "C:\wamp\www\myframe\app\views\user\login.html" */ ?>
<?php /*%%SmartyHeaderCode:5899558f8474eac7c8-70062520%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12278db55488cab804681b1c24add7f204a3ca06' => 
    array (
      0 => 'C:\\wamp\\www\\myframe\\app\\views\\user\\login.html',
      1 => 1435295822,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5899558f8474eac7c8-70062520',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'assets' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_558f8474eef5d8_93657216',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558f8474eef5d8_93657216')) {function content_558f8474eef5d8_93657216($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/bootstrap/css/bootstrap.min.css">

  </head>
  <body>
    <div class="container">
      <h1>用户登录</h1>

      <div class="alert alert-danger error" role="alert" style="display:none"></div>

      <form class="form-horizontal reg_form" action="index.php?c=user&a=do_login" method="post">
        <div class="form-group">
          <label for="inputName" class="col-sm-2 control-label">用户名</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputName" placeholder="请填写用户名" name="name">
          </div>
        </div>
        <div class="form-group">
          <label for="password1" class="col-sm-2 control-label">密码</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="password1" placeholder="请填写密码" name="password">
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
              <label>
                <input type="checkbox" name="rem" value="1"> 记住我
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">登录</button>
          </div>
        </div>
      </form>

      <a href="index.php?c=user&a=reg">还没有有账户，直接注册</a>
    </div>
    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
    <script>
      $(function(){

      })
    </script>
  </body>
</html>
<?php }} ?>
