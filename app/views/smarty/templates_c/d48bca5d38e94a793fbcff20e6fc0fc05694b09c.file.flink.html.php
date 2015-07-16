<?php /* Smarty version Smarty-3.1.20, created on 2015-07-15 16:34:42
         compiled from "C:\wamp\www\kmhotel\app\views\admin\flink.html" */ ?>
<?php /*%%SmartyHeaderCode:1478955a66f82a1b2b7-22231770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd48bca5d38e94a793fbcff20e6fc0fc05694b09c' => 
    array (
      0 => 'C:\\wamp\\www\\kmhotel\\app\\views\\admin\\flink.html',
      1 => 1435810494,
      2 => 'file',
    ),
    'fffb6e872d82df4ac1a873d27e1e296f24f38676' => 
    array (
      0 => 'C:\\wamp\\www\\kmhotel\\app\\views\\admin\\index.html',
      1 => 1436965498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1478955a66f82a1b2b7-22231770',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'assets' => 0,
    'server_info' => 0,
    'user_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_55a66f82bfd5e7_63611384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a66f82bfd5e7_63611384')) {function content_55a66f82bfd5e7_63611384($_smarty_tpl) {?><!DOCTYPE html>
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
            <li><a href=""><i class="fa fa-trash-o"></i> &nbsp;&nbsp;清除缓存</a></li>

        </ul>

        <ul class="nav navbar-nav navbar-right navbar-user">
            <li>
            <a href="index.php" target="_blank"><i class="fa fa-forward"></i>&nbsp;&nbsp;查看前台</a>
            </li>
            <li class="dropdown user-dropdown" style="margin-right: 40px;">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp;&nbsp;尊敬的
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
                <li class="active"><i class="fa fa-dashboard"></i>&nbsp;&nbsp;&nbsp;友情链接管理
                </li>
            </ol>
            <h1>友情链接管理
<hr/>
            </h1>
            
        </div>
    </div>

    
<div>
    <button type="button" class="btn btn-info btn-md add" data-toggle="modal" data-target="#myModal">新增</button>
    <button type="button" class="btn btn-success btn-md sort">排序</button>
    <button type="button" class="btn btn-danger btn-md del_all" data-toggle="modal" data-target="#delAllModal">删除</button>
</div>
<hr/>

<div>
    <form action="" method="post" class="form-horizontal" id="mainform">
        <table class="table table-bordered table-striped with-check">
            <thead>
            <tr>
                <th><input type="checkbox" id="checkAll"  value="0"/>全选</th>
                <th>名称</th>
                <th>网址</th>
                <th>排序</th>
                <th><i class="fa fa-wrench"></i></th>
            </tr>
            </thead>
            <tbody>
            <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
            <tr>
                <td><input type="checkbox" name="items[]" value="<?php echo $_smarty_tpl->tpl_vars['link']->value['id'];?>
" id="mybox"/></td>
                <td class='linkName'><?php echo $_smarty_tpl->tpl_vars['link']->value['linkName'];?>
</td>
                <td class="linkAddr"><a class='url' href="http://<?php echo $_smarty_tpl->tpl_vars['link']->value['linkAddr'];?>
"
                                        target="_blank"><?php echo $_smarty_tpl->tpl_vars['link']->value['linkAddr'];?>
</a></td>
                <td class="paixu">
                    <input type="text" class="input-mini right" value="<?php echo $_smarty_tpl->tpl_vars['link']->value['orderId'];?>
" maxlength="2"
                           name="order[]"/>
                </td>
                <td>
                    <a class="edit" href="#myModal" data-toggle="modal"
                       data-id="<?php echo $_smarty_tpl->tpl_vars['link']->value['id'];?>
"><i
                            class="fa fa-edit"></i></a>
                    <a class="del" href="javascript:void 0;" data-toggle="modal" data-target="#delModal"
                        data-id2="<?php echo $_smarty_tpl->tpl_vars['link']->value['id'];?>
"><i
                            class="fa fa-times"></i></a>
                </td>
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['link']->value['id'];?>
" class="id" name="id[]"/>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </form>
</div>

<!-- 模态框（Modal）新增和编辑的共用模态框 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" action="" method="post" class="form_add">
                <div class="modal-header">
                    <button type="button" class="close"
                            data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        新增一个友情链接
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="linkName">名称</label>
                        <input type="text" class="form-control" id="linkName" name="linkName"
                               placeholder="请输入名称">
                    </div>
                    <div class="form-group">
                        <label for="linkAddr">请输入网址</label>
                        <input type="text" class="form-control" id="linkAddr" name="linkAddr"
                               placeholder="请输入网址">
                    </div>
                    <input type="hidden" value="" name="id" class="m_id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default"
                            data-dismiss="modal">关闭
                    </button>
                    <button type="submit" class="btn btn-primary add_link">
                        提交
                    </button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->

    </div>
    <!-- /.modal -->
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
                    删除一个友情链接
                </h4>
            </div>
            <form action="" method="post" class="form2">
            <div class="modal-body">
                你确定删除 <span id="linkName2"></span>吗？
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
                    删除友情链接
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
                $(':checkbox').prop("checked", this.checked );
            });
            $(".sort").click(function(){
                $("#mainform").attr("action", "index.php?c=admin&a=sort").submit();
            });
            $(".del").click(function(){
                $(".form2").attr("action", "index.php?c=admin&a=del_one");
                var id = $(this).attr("data-id2");
                var linkName=$(this).parents("tr").children(".linkName").text();
                $("#linkName2").text(linkName);
                $(".m_id2").val(id);
            });
            //进入模态框前判断是否选中
            $(".del_all").click(function(){
                if(!($("input[type='checkbox']").is(':checked'))){
                    alert("您并没有选中任何一条友情链接！");
                    return false;
                }
            });
            //模态框提交
            $(".del-links").click(function(){
               $("#mainform").attr("action", "index.php?c=admin&a=del_all").submit();
            });
            $(".add").click(function () {
                $(".form_add").attr("action", "index.php?c=admin&a=add_link");
                $("#myModalLabel").text("增加一个友情链接");
            });
            $(".edit").click(function () {
                $(".form_add").attr("action", "index.php?c=admin&a=edit_link");
                var id = $(this).attr("data-id");
                var linkName = $(this).parents("tr").children(".linkName").text();
                var linkAddr = $(this).parents("tr").children(".linkAddr").text();
                $("#linkName").val(linkName);
                $("#linkAddr").val(linkAddr);
                $(".m_id").val(id);
                $("#myModalLabel").text("编辑友情链接");
            });
        });
    </script>



    


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
