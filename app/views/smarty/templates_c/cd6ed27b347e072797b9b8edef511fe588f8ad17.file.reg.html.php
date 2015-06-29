<?php /* Smarty version Smarty-3.1.20, created on 2015-06-28 07:29:57
         compiled from "C:\wamp\www\myframe\app\views\user\reg.html" */ ?>
<?php /*%%SmartyHeaderCode:2181558f846d407da3-64065708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd6ed27b347e072797b9b8edef511fe588f8ad17' => 
    array (
      0 => 'C:\\wamp\\www\\myframe\\app\\views\\user\\reg.html',
      1 => 1435469389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2181558f846d407da3-64065708',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_558f846d43c240_81760371',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558f846d43c240_81760371')) {function content_558f846d43c240_81760371($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">

  </head>
  <body>
    <div class="container">
      <h1 align="center">用户注册</h1>

      <div class="alert alert-danger error" role="alert" style="display:none"></div>
<div class="row">
      <form class="form-horizontal reg_form col-sm-6 col-sm-offset-3" action="index.php?c=user&a=do_reg" method="post">
        <div class="form-group">
          <label for="inputName" class="col-sm-2 control-label">用户名</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputName" placeholder="请填写用户名" name="username">
          </div>
        </div>
        <div class="form-group">
          <label for="password1" class="col-sm-2 control-label">密码</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="password1" placeholder="请填写密码" name="password">
          </div>
        </div>
        <div class="form-group make_sure_password">
          <label for="password2" class="col-sm-2 control-label">确认密码</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="password2" placeholder="请填写密码">
          </div>
        </div>
        <!-- <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
              <label>
                <input type="checkbox"> Remember me
              </label>
            </div>
          </div>
        </div> -->
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default reg">注册</button>
          </div>
        </div>
      </form>
</div>
        <div class="row"><a href="index.php?c=user&a=login">已有账户，直接登录</a></div>

    </div>
    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
    <script>
      $(function(){
        $(".reg").click(function(){
          var password1 = $("#password1").val();
          var password2 = $("#password2").val();

          if(password1 != password2) {
            $(".error").html("密码不一致，请重新填写！").fadeIn(600);
            $("#password2").focus();
            $(".make_sure_password").addClass("has-error");
            return false;
          }
        })
      })
    </script>
  </body>
</html>
<?php }} ?>
