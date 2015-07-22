<?php /* Smarty version Smarty-3.1.18, created on 2015-07-21 08:03:35
         compiled from "C:\wamp\www\kmhotel\app\views\article\index.html" */ ?>
<?php /*%%SmartyHeaderCode:928755ade0b780e2f1-91814873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cbf8f222784318e8e08975c7402ce5736810559' => 
    array (
      0 => 'C:\\wamp\\www\\kmhotel\\app\\views\\article\\index.html',
      1 => 1437457249,
      2 => 'file',
    ),
    'fffb6e872d82df4ac1a873d27e1e296f24f38676' => 
    array (
      0 => 'C:\\wamp\\www\\kmhotel\\app\\views\\admin\\index.html',
      1 => 1437028316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '928755ade0b780e2f1-91814873',
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
  'unifunc' => 'content_55ade0b79d3269_36974296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ade0b79d3269_36974296')) {function content_55ade0b79d3269_36974296($_smarty_tpl) {?><!DOCTYPE html>
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
                <li class="active"><i class="fa fa-dashboard"></i>&nbsp;&nbsp;&nbsp;文章列表
                </li>
            </ol>
            <h1>文章列表
<hr/>
            </h1>
            
        </div>
    </div>

    

<div class="botton_art b1">
    <a href="index.php?c=article&a=add&id=0">
        <button class="btn btn-info" type="submit">添加文章</button>
    </a>
    <button class="btn btn-danger del_all"  data-toggle="modal" data-target="#delAllModal">删除</button>
</div>
        <br/>
<div class="bs-example" data-example-id="bordered-table">
    <form class="mainform" action="" method="post" style="min-height:500px;">

        <table class="table table-bordered">
            <thead>
            <tr>
                <th colspan="5">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id="checkAll">全选
                        </label>
                    </div>
                </th>
            </tr>
            </thead>
            <?php  $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content']->key => $_smarty_tpl->tpl_vars['content']->value) {
$_smarty_tpl->tpl_vars['content']->_loop = true;
?>
            <tbody>
            <tr>
                <th scope="row" style="width:1%;">
                    <span class="glyphicon glyphicon-resize-vertical"
                           aria-hidden="true"></span></th>
                <td>标题</td>
                <td>所属栏目</td>
                <td>发布日期</td>
                <th style="width:1%;">
                    <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></th>
            </tr>
            <tr class="">
                <th scope="row">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" class="ok2" name="items[]" value="<?php echo $_smarty_tpl->tpl_vars['content']->value['id'];?>
" >
                        </label>
                    </div>
                </th>
                <td class="title"><?php echo $_smarty_tpl->tpl_vars['content']->value['title'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['content']->value['cateName'];?>
</td>
                <td><?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['content']->value['time']);?>
</td>
                <th>
                    <p class="p1">
                        <a href="index.php?c=article&a=edit_art&id=<?php echo $_smarty_tpl->tpl_vars['content']->value['id'];?>
">
                            <span class="glyphicon glyphicon-pencil p1" aria-hidden="true"></span>
                        </a>

                        <a href="#delModal" data-toggle="modal"
                           data-id2="<?php echo $_smarty_tpl->tpl_vars['content']->value['id'];?>
" class="del_one">
                            <span class="glyphicon glyphicon-remove p1" aria-hidden="true"></span>
                        </a>
                    </p>
                </th>
            </tr>
            </tbody>
            <?php } ?>
        </table>
        <?php echo $_smarty_tpl->tpl_vars['page_show']->value;?>

    </form>
</div>

<!--模态框  单条删除-->
<div class="modal fade bs-example-modal-sm" id="delModal" tabindex="-1" role="dialog" aria-labelledby="delModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"
                        data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="delModalLabel">
                    删除一篇文章
                </h4>
            </div>
            <form action="" method="post" class="form2">
                <div class="modal-body">
                    你确定删除“ <span id="title"></span>”吗？
                    <input type="hidden" value="" name="id" class="m_id2">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default"
                            data-dismiss="modal">取消
                    </button>
                    <button type="submit" class="btn btn-primary">
                        确定删除
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


<!--模态框  批量删除-->
<div class="modal fade bs-example-modal-sm" id="delAllModal" tabindex="-1" role="dialog" aria-labelledby="delModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"
                        data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="delAllModalLabel">
                    删除文章
                </h4>
            </div>
            <div class="modal-body">
                你确定删除吗？
                <input type="hidden" value="" name="id" class="m_id2">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">取消
                </button>
                <button type="submit" class="btn btn-primary del-links">
                    确定删除
                </button>
            </div>
        </div>
    </div>
</div>




<script type="">
    $(function () {
        $("#checkAll").click(function () {
            $(':checkbox').prop("checked", this.checked);
        });

        $(".del_one").click(function(){
            $(".form2").attr("action", "index.php?c=article&a=del_one");
            var id = $(this).attr("data-id2");
            var title=$(this).parents("tr").children(".title").text();

            $("#title").text(title);
            $(".m_id2").val(id);
        });

        $(".del_all").click(function(){
            if(!($("input[type='checkbox']").is(':checked'))){
                alert("您并没有选中任何一篇文章！");
                return false;
            }
        });

        //模态框提交
        $(".del-links").click(function(){
            $(".mainform").attr("action", "index.php?c=article&a=del_all").submit();
        })
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
