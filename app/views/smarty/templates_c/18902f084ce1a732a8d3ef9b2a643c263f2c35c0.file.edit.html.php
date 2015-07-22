<?php /* Smarty version Smarty-3.1.18, created on 2015-07-21 10:18:09
         compiled from "C:\wamp\www\kmhotel\app\views\column\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:1248555adfe8a748a25-78189766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18902f084ce1a732a8d3ef9b2a643c263f2c35c0' => 
    array (
      0 => 'C:\\wamp\\www\\kmhotel\\app\\views\\column\\edit.html',
      1 => 1437466685,
      2 => 'file',
    ),
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
  'nocache_hash' => '1248555adfe8a748a25-78189766',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55adfe8a994761_90934540',
  'variables' => 
  array (
    'assets' => 0,
    'user' => 0,
    'server_info' => 0,
    'user_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55adfe8a994761_90934540')) {function content_55adfe8a994761_90934540($_smarty_tpl) {?><!DOCTYPE html>
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
    
<link rel="stylesheet" href="vendor/select2/select2.min.css">
<style>
    .form-group {
        margin-top: 30px;
    }
</style>
<script type="text/javascript" src="vendor/select2/select2.full.min.js"></script>
<script type="text/javascript" src="vendor/ckfinder/ckfinder.js"></script>
<script type="text/javascript" src="vendor/ckeditor/ckeditor.js"></script>

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
                <li class="active"><i class="fa fa-dashboard"></i>&nbsp;&nbsp;&nbsp;编辑栏目
                </li>
            </ol>
            <h1>编辑栏目
<hr/>
            </h1>
            
        </div>
    </div>

    

<div class="panel panel-default">
    <div class="panel-heading">
        <span class="fa fa-align-justify fa-2x" aria-hidden="true" style="float: left;margin-top: 5px"> </span>
        <ul id="myTab" class="nav nav-tabs">
            <li class="active"><a href="#home" data-toggle="tab" style="padding: 0;margin-left: 10px">
                <h4>编辑栏目</h4></a>
            </li>

            <li class="">
                <a href="#ios" data-toggle="tab" style="padding: 0;margin-left: 10px">
                    <h4>栏目内容</h4></a>
            </li>
        </ul>
    </div>

    <div class="panel-body">
        <form class="form-horizontal" role="form" action="index.php?c=column&a=do_edit&id=<?php echo $_smarty_tpl->tpl_vars['cate1']->value['id'];?>
" method="post">
            <div class="row">

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade in active" id="home">
                        <div class="form-group">
                            <label class="control-label col-md-2" style="text-align: center">父栏目</label>
                            <div class="col-md-10">
                                <select class="js-example-basic-single" style="width:60%" name="pid">
                                   <option value="0">顶级栏目</option>
                                    <?php  $_smarty_tpl->tpl_vars['cate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cate']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cate']->key => $_smarty_tpl->tpl_vars['cate']->value) {
$_smarty_tpl->tpl_vars['cate']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['cate']->value['id'];?>
"
                                            <?php if ($_smarty_tpl->tpl_vars['cate1']->value['pid']==$_smarty_tpl->tpl_vars['cate']->value['id']) {?>
                                    selected='selected';
                                    <?php }?>
                                            >
                                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<$_smarty_tpl->tpl_vars['cate']->value['count']) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<$_smarty_tpl->tpl_vars['cate']->value['count']; $_smarty_tpl->tpl_vars['i']->value++) {
?>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <?php }} ?>
                                        <?php echo $_smarty_tpl->tpl_vars['cate']->value['cateName'];?>

                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group" style="">
                            <label for="title" class="col-md-2" style="text-align: center">名称</label>

                            <div class="col-md-10">
                                <input type="text" class="form-control" id="title"
                                       placeholder="栏目名称" name="cateName" style="width:40%" value="<?php echo $_smarty_tpl->tpl_vars['cate1']->value['cateName'];?>
">
                            </div>
                        </div>

                        <div class="form-group" style="">
                            <label for="pinyin" class="col-md-2" style="text-align: center">拼音</label>

                            <div class="col-md-10">
                                <input  disabled type="text" class="form-control" id="pinyin"
                                       placeholder="栏目拼音" name="pinyin" style="width:40%" value="<?php echo $_smarty_tpl->tpl_vars['cate1']->value['pinyin'];?>
">
                            </div>
                        </div>

                        <div class="form-group" style="">
                            <label for="type" class="col-md-2" style="text-align: center">类型</label>


                            <div class="col-md-10" id="type">
                                <input type="radio" name="type"  id="" value="0"
                                       <?php if ($_smarty_tpl->tpl_vars['cate1']->value['type']==0) {?>
                                checked="checked"
                                <?php }?>
                                      />封面
                                <br/>
                                <input type="radio" name="type" value="1"
                                <?php if ($_smarty_tpl->tpl_vars['cate1']->value['type']==1) {?>
                                checked="checked"
                                <?php }?>
                                        />列表
                                <br/>
                                <input type="radio" name="type" value="2"
                                <?php if ($_smarty_tpl->tpl_vars['cate1']->value['type']==2) {?>
                                checked="checked"
                                <?php }?>
                                        />URL跳转
                            </div>
                        </div>



                        <div class="form-group" style="">
                            <label for="address" class="col-md-2" style="text-align: center">URL跳转地址</label>

                            <div class="col-md-10">
                                <input type="text" class="form-control" id="address" value="<?php echo $_smarty_tpl->tpl_vars['cate1']->value['address'];?>
"
                                       placeholder="如果选择了URL跳转，请填写地址" name="address" style="width:40%">
                            </div>
                        </div>

                        <div class="form-group" style="">
                            <label for="" class="col-md-2" style="text-align: center">是否显示</label>

                            <div class="col-md-10">
                                <input type="radio" name="is_show"   value="1"
                                <?php if ($_smarty_tpl->tpl_vars['cate1']->value['is_show']==1) {?>
                                checked="checked"
                                <?php }?>
                                        />是
                                <br/>
                                <input type="radio" name="is_show" value="0"
                                <?php if ($_smarty_tpl->tpl_vars['cate1']->value['is_show']==0) {?>
                                checked="checked"
                                <?php }?>
                                        />否
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="ios">
                        <div class="editor">
                            <textarea name="content" class=""><?php echo $_smarty_tpl->tpl_vars['cate1']->value['content'];?>
</textarea>
                        </div>
                        <br/>
                        <br/>
                    </div>
                </div>


            </div>
            <div class="col-md-4 col-md-offset-5">
                <button class="btn btn-success" type="submit">修改</button>
                <button class="btn btn-danger">返回</button>
            </div>
        </form>

    </div>
</div>


<script>
    CKEDITOR.replace('content',
            {
                filebrowserBrowseUrl: '/vendor/ckfinder/ckfinder.html',
                filebrowserImageBrowseUrl: '/vendor/ckfinder/ckfinder.html?type=Images',
                filebrowserFlashBrowseUrl: '/vendor/ckfinder/ckfinder.html?type=Flash',
                filebrowserUploadUrl: '/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                filebrowserImageUploadUrl: '/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                filebrowserFlashUploadUrl: '/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
            });

    $(function () {
        $(".js-example-basic-single").select2();
//        $('#myTab li:eq(1) a').tab('show');
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
