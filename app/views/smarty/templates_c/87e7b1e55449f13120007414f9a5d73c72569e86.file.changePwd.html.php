<?php /* Smarty version Smarty-3.1.20, created on 2015-07-06 05:20:18
         compiled from "C:\wamp\www\kmhotel\app\views\admin\changePwd.html" */ ?>
<?php /*%%SmartyHeaderCode:266705599f3f21b4ce3-89644116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87e7b1e55449f13120007414f9a5d73c72569e86' => 
    array (
      0 => 'C:\\wamp\\www\\kmhotel\\app\\views\\admin\\changePwd.html',
      1 => 1436152509,
      2 => 'file',
    ),
    'fffb6e872d82df4ac1a873d27e1e296f24f38676' => 
    array (
      0 => 'C:\\wamp\\www\\kmhotel\\app\\views\\admin\\index.html',
      1 => 1436152679,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '266705599f3f21b4ce3-89644116',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'assets' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5599f3f22d1561_77759833',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5599f3f22d1561_77759833')) {function content_5599f3f22d1561_77759833($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>后台管理主界面</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/css/admin_css/admin.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/css/admin_css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <!--<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/css/admin_css/morris-0.4.3.min.css">-->
    <!-- JavaScript -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/js/jquery-1.11.3.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/bootstrap/js/bootstrap.min.js"></script>
    
</head>
<body>

<div id="wrapper">

<!-- Sidebar -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">卓越后台管理</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="index.php?c=admin"><i class="fa fa-dashboard"></i> &nbsp;&nbsp;主页</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-edit"></i>
                    &nbsp;&nbsp;内容管理 <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="index.php?c=article">文章列表</a></li>
                    <li><a href="#">栏目管理</a></li>
                </ul>
            </li>
            <li><a href="index.php?c=file"><i class="fa fa-desktop"></i> &nbsp;&nbsp;文件管理</a></li>
            <li><a href=""><i class="fa fa-bar-chart-o"></i> &nbsp;&nbsp;报表管理</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i>
                    &nbsp;&nbsp;系统设置 <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">站点信息</a></li>
                    <li><a href="index.php?c=admin&a=changePwd">密码修改</a></li>
                </ul>
            </li>
            <li><a href=""><i class="fa fa-trash-o"></i> &nbsp;&nbsp;清除缓存</a></li>
            <!--<li class="dropdown">-->
                <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i>-->
                    <!--&nbsp;&nbsp;Dropdown <b class="caret"></b></a>-->
                <!--<ul class="dropdown-menu">-->
                    <!--<li><a href="#">Dropdown Item</a></li>-->
                    <!--<li><a href="#">Another Item</a></li>-->
                    <!--<li><a href="#">Third Item</a></li>-->
                    <!--<li><a href="#">Last Item</a></li>-->
                <!--</ul>-->
            <!--</li>-->
        </ul>

        <ul class="nav navbar-nav navbar-right navbar-user">
            <!--<li class="dropdown messages-dropdown">-->
                <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span-->
                        <!--class="badge">6</span> <b class="caret"></b></a>-->
                <!--<ul class="dropdown-menu">-->
                    <!--<li class="dropdown-header">6 New Messages</li>-->
                    <!--<li class="message-preview">-->
                        <!--<a href="#">-->
                            <!--<span class="avatar"><img src="http://placehold.it/50x50"></span>-->
                            <!--<span class="name">John Smith:</span>-->
                            <!--<span class="message">Hey there, I wanted to ask you something...</span>-->
                            <!--<span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>-->
                        <!--</a>-->
                    <!--</li>-->

                    <!--<li class="divider"></li>-->
                    <!--<li class="message-preview">-->
                        <!--<a href="#">-->
                            <!--<span class="avatar"><img src="http://placehold.it/50x50"></span>-->
                            <!--<span class="name">John Smith:</span>-->
                            <!--<span class="message">Hey there, I wanted to ask you something...</span>-->
                            <!--<span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>-->
                        <!--</a>-->
                    <!--</li>-->
                    <!--<li class="divider"></li>-->
                    <!--<li><a href="#">View Inbox <span class="badge">7</span></a></li>-->
                <!--</ul>-->
            <!--</li>-->
            <!--<li class="dropdown alerts-dropdown">-->
                <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> Alerts <span-->
                        <!--class="badge">3</span> <b class="caret"></b></a>-->
                <!--<ul class="dropdown-menu">-->
                    <!--<li><a href="#">Default <span class="label label-default">Default</span></a></li>-->
                    <!--<li><a href="#">Primary <span class="label label-primary">Primary</span></a></li>-->
                    <!--<li><a href="#">Success <span class="label label-success">Success</span></a></li>-->
                    <!--<li><a href="#">Info <span class="label label-info">Info</span></a></li>-->
                    <!--<li><a href="#">Warning <span class="label label-warning">Warning</span></a></li>-->
                    <!--<li><a href="#">Danger <span class="label label-danger">Danger</span></a></li>-->
                    <!--<li class="divider"></li>-->
                    <!--<li><a href="#">View All</a></li>-->
                <!--</ul>-->
            <!--</li>-->
            <li>
                <a href="index.php" target="_blank"><i class="fa fa-forward"></i>&nbsp;&nbsp;查看前台</a>
            </li>
            <li class="dropdown user-dropdown" style="margin-right: 40px;">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp;&nbsp;尊敬的 Admin <b
                        class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-power-off"></i>&nbsp;&nbsp;安全登出</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>

<div id="page-wrapper">
    <!--系统提示栏-->
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="active"><i class="fa fa-dashboard"></i>&nbsp;&nbsp;&nbsp;修改密码</li>
            </ol>
            <h1>修改密码
<hr/>
            </h1>
            
        </div>
    </div>

    

111

</div>


</div>


<div class="row-fluid footer">
    <div  class="span12"> <font style="color: #318c14">2015 &copy; PHPGOTO. </font>><a href="http://www.phpgoto.com" target="_blank"><i class="fa fa-arrow-circle-right"></i> PHPGOTO.COM</a>
    </div>
</div>





<!-- Page Specific Plugins -->
<!--<script src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/js/admin_js/raphael-min.js"></script>-->
<!--<script src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/js/admin_js/morris-0.4.3.min.js"></script>-->
<!--<script src="/morris/chart-data-morris.js"></script>-->
<!--<script src="/js/tablesorter/jquery.tablesorter.js"></script>-->
<!--<script src="/js/tablesorter/tables.js"></script>-->

</body>
</html>
<?php }} ?>
