<?php /* Smarty version Smarty-3.1.18, created on 2015-07-21 08:04:16
         compiled from "C:\wamp\www\kmhotel\app\views\column\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1178855ade0e028d5d5-79779141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e76fd7998506532313575d39e293d5dc0e317b4b' => 
    array (
      0 => 'C:\\wamp\\www\\kmhotel\\app\\views\\column\\index.html',
      1 => 1436979009,
      2 => 'file',
    ),
    'fffb6e872d82df4ac1a873d27e1e296f24f38676' => 
    array (
      0 => 'C:\\wamp\\www\\kmhotel\\app\\views\\admin\\index.html',
      1 => 1437028316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1178855ade0e028d5d5-79779141',
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
  'unifunc' => 'content_55ade0e048d645_46836323',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ade0e048d645_46836323')) {function content_55ade0e048d645_46836323($_smarty_tpl) {?><!DOCTYPE html>
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
                <li class="active"><i class="fa fa-dashboard"></i>&nbsp;&nbsp;&nbsp;栏目管理
                </li>
            </ol>
            <h1>栏目管理
<hr/>
            </h1>
            
        </div>
    </div>

    

<div class="botton_art b1">
    <a href="index.php?c=column&a=add&id=0">
        <button class="btn btn-info" type="submit">新增顶级栏目</button>
    </a>
    <button class="btn btn-success sort">排序</button>
</div>
<hr/>


<div class="panel panel-info">
    <div class="panel-heading"><i class="fa fa-align-justify"></i><span> 栏目管理</span></div>

    <div class="panel-body">
        <form action="" method="post" class="form-horizontal" id="mainform">
            <table class="table table-bordered table-striped with-check">
                <thead>
                <tr>
                    <th class="col-md-1">排序</th>
                    <th class="col-md-6">名称</th>
                    <th class="col-md-3">栏目文章</th>
                    <th class="col-md-2"><i class="fa fa-cog"></i></th>
                </tr>
                </thead>

                <tbody>
                <?php  $_smarty_tpl->tpl_vars['cate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cate']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cate']->key => $_smarty_tpl->tpl_vars['cate']->value) {
$_smarty_tpl->tpl_vars['cate']->_loop = true;
?>
                <tr>
                    <td>
                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['cate']->value['orderId'];?>
" size="1"
                               name="order[]"/>
                    </td>
                    <td class='name' style="text-align: left;">
                        <a href=""
                           target="_blank" title=""
                           class="tip-top">
                            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 1;
  if ($_smarty_tpl->tpl_vars['i']->value<$_smarty_tpl->tpl_vars['cate']->value['count']) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<$_smarty_tpl->tpl_vars['cate']->value['count']; $_smarty_tpl->tpl_vars['i']->value++) {
?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php }} ?>
                            <?php echo $_smarty_tpl->tpl_vars['cate']->value['cateName'];?>


                            <span style="color:#a7cb52;">[<?php if ($_smarty_tpl->tpl_vars['cate']->value['type']==0) {?>封面
                                <?php } elseif ($_smarty_tpl->tpl_vars['cate']->value['type']==1) {?>列表
                                  <?php } else { ?>URL跳转
                                <?php }?>]
                                <?php if ($_smarty_tpl->tpl_vars['cate']->value['is_show']==0) {?>
                                [隐藏]
                                <?php }?>
                                </span> </a>
                    </td>
                    <td style="width:80px;text-align: center;">
                        <?php if ($_smarty_tpl->tpl_vars['cate']->value['type']==1) {?><a href="index.php?c=article&a=show_cate&cateId=<?php echo $_smarty_tpl->tpl_vars['cate']->value['id'];?>
">查看栏目文章</a>
                        <?php }?>
                    </td>
                    <td class="">
                        <a href="index.php?c=column&a=add&id=<?php echo $_smarty_tpl->tpl_vars['cate']->value['id'];?>
"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
                        <a href="index.php?c=column&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['cate']->value['id'];?>
"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                        <a href="index.php?c=column&a=del_column&id=<?php echo $_smarty_tpl->tpl_vars['cate']->value['id'];?>
"><span class="glyphicon glyphicon-remove del" aria-hidden="true"></span></a>
                    </td>
                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['cate']->value['id'];?>
" class="id" name="id[]"/>
                </tr>
                <?php } ?>
                </tbody>

            </table>
        </form>
    </div>
</div>


<script type="">
    $(function () {
        $(".sort").click(function(){
            $("#mainform").attr("action", "index.php?c=column&a=sort").submit();
        });

    });


</script>




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
