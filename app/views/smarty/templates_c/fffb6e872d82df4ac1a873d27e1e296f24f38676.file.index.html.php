<?php /* Smarty version Smarty-3.1.18, created on 2015-07-16 10:48:31
         compiled from "C:\wamp\www\kmhotel\app\views\admin\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1357055a76fdfcf2010-31112473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fffb6e872d82df4ac1a873d27e1e296f24f38676' => 
    array (
      0 => 'C:\\wamp\\www\\kmhotel\\app\\views\\admin\\index.html',
      1 => 1437028316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1357055a76fdfcf2010-31112473',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'assets' => 0,
    'user' => 0,
    'server_info' => 0,
    'user_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55a76fdfe05fe0_39090684',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a76fdfe05fe0_39090684')) {function content_55a76fdfe05fe0_39090684($_smarty_tpl) {?><!DOCTYPE html>
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
                    <li><a href="index.php?c=column">栏目管理</a></li>
                </ul>
            </li>
            <li><a href="index.php?c=file"><i class="fa fa-desktop"></i> &nbsp;&nbsp;文件管理</a></li>
            <li><a href=""><i class="fa fa-bar-chart-o"></i> &nbsp;&nbsp;报表管理</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i>
                    &nbsp;&nbsp;系统设置 <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="index.php?c=admin&a=site_info">站点信息</a></li>
                    <li><a href="index.php?c=admin&a=changePwd">密码修改</a></li>
                </ul>
            </li>
            <li><a href="index.php?c=admin&a=clear"><i class="fa fa-trash-o"></i> &nbsp;&nbsp;清除缓存</a></li>

        </ul>

        <ul class="nav navbar-nav navbar-right navbar-user">
            <li>
            <a href="index.php" target="_blank"><i class="fa fa-forward"></i>&nbsp;&nbsp;查看前台</a>
            </li>
            <li class="dropdown user-dropdown" style="margin-right: 40px;">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp;&nbsp;尊敬的<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>

                   <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="index.php?c=user&a=logout"><i class="fa fa-power-off"></i>&nbsp;&nbsp;安全登出</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

<div id="page-wrapper">
    <!--系统提示栏-->
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="active"><i class="fa fa-dashboard"></i>&nbsp;&nbsp;&nbsp;系统主页
                </li>
            </ol>
            <h1>系统主页
            </h1>
            
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                欢迎来到卓越后台管理系统~~本系统由<a class="alert-link" href="http://phpgoto.com" target="_blank">phpgoto博主</a> skywing
                制作。
            </div>
            
        </div>
    </div>

    
    <!--功能展示框-->
    <div class="row" id="content">
        <div class="col-lg-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-edit fa-5x"></i>
                        </div>
                        <div class="col-xs-8">
                            <p class="h1">内容管理</p>
                            <!--<p class="announcement-text">New Mentions!</p>-->
                        </div>
                    </div>
                </div>
                <a href="index.php?c=article">
                    <div class="panel-footer announcement-bottom">
                        <div class="row">
                            <div class="col-xs-6">
                               GO
                            </div>
                            <div class="col-xs-6 text-right">
                                <i class="fa fa-arrow-circle-right"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6">
                            <i class="fa fa-desktop fa-5x"></i>
                        </div>
                        <div class="col-xs-6 text-right">
                            <p class="h4">文件管理</p>
                        </div>
                    </div>
                </div>
                <a href="index.php?c=file">
                    <div class="panel-footer announcement-bottom">
                        <div class="row">
                            <div class="col-xs-6">
                                GO
                            </div>
                            <div class="col-xs-6 text-right">
                                <i class="fa fa-arrow-circle-right"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6">
                            <i class="fa fa-twitter-square fa-5x"></i>
                        </div>
                        <div class="col-xs-6 text-right">
                            <p class="h4">友链管理</p>
                        </div>
                    </div>
                </div>
                <a href="index.php?c=admin&a=flink">
                    <div class="panel-footer announcement-bottom">
                        <div class="row">
                            <div class="col-xs-6">
                                GO
                            </div>
                            <div class="col-xs-6 text-right">
                                <i class="fa fa-arrow-circle-right"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6">
                            <i class="fa fa-github-square fa-5x"></i>
                        </div>
                        <div class="col-xs-6 text-right">
                            <p class="h4">用户管理</p>
                        </div>
                    </div>
                </div>
                <a href="index.php?c=admin&a=changePwd">
                    <div class="panel-footer announcement-bottom">
                        <div class="row">
                            <div class="col-xs-6">
                                GO
                            </div>
                            <div class="col-xs-6 text-right">
                                <i class="fa fa-arrow-circle-right"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6">
                            <i class="fa fa-trash-o fa-5x"></i>
                        </div>
                        <div class="col-xs-6 text-right">
                            <p class="h4">清除缓存</p>
                        </div>
                    </div>
                </div>
                <a href="index.php?c=admin&a=clear">
                    <div class="panel-footer announcement-bottom">
                        <div class="row">
                            <div class="col-xs-6">
                                GO
                            </div>
                            <div class="col-xs-6 text-right">
                                <i class="fa fa-arrow-circle-right"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="panel panel-success">
        <div class="panel-heading"><i class="fa fa-info-circle"></i>
            <span class="h5">&nbsp;&nbsp;我的信息</span>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-striped">
                        <thead>
                        <span style="text-align: center;"> <h3 class="h3"  style="margin-top: 10px;">系统信息</h3></span>
                        </thead>
                        <tr>
                            <td>卓越CMS版本</td>
                            <td>1.0</td>
                        </tr>

                        <tbody>
                        <tr>
                            <td>操作系统</td>
                            <td>Windows8</td>
                        </tr>
                        <tr>
                            <td>运行环境</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['server_info']->value['server_software'];?>
</td>
                        </tr>
                        <tr>
                            <td>PHP运行方式</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['server_info']->value['php'];?>
</td>
                        </tr>
                        <tr>
                            <td>mysql版本</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['server_info']->value['mysqli'];?>
</td>
                        </tr>
                        <tr>
                            <td>已用空间</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['server_info']->value['already_used'];?>
</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-md-6">
                    <table class="table table-bordered">
                        <thead>

                        <tr>
                            <th colspan="2" ><h3 class="h3" style="margin-top: 0">用户信息</h3></th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td class="col-md-3">姓名</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['user_info']->value['lastName'];?>
<?php echo $_smarty_tpl->tpl_vars['user_info']->value['firstName'];?>
</td>
                        </tr>
                        <tr>
                            <td>网站名称</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['user_info']->value['siteName'];?>
</td>
                        </tr>
                        <tr>
                            <td>ICP备案号</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['user_info']->value['icp'];?>
</td>
                        </tr>
                        <tr>
                            <td>QQ</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['user_info']->value['qq'];?>
</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['user_info']->value['email'];?>
</td>
                        </tr>
                        <tr>
                            <td>介绍信息</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['user_info']->value['copyright'];?>
</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    


</div>

</div>
<div class="row-fluid footer">
    <div class="span12"><font style="color: #318c14">2015 &copy; PHPGOTO. </font>><a href="http://www.phpgoto.com"
                                                                                     target="_blank"><i
            class="fa fa-arrow-circle-right"></i> PHPGOTO.COM</a>
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
