<?php /* Smarty version Smarty-3.1.20, created on 2015-07-16 08:53:09
         compiled from "C:\wamp\www\kmhotel\app\views\article\add.html" */ ?>
<?php /*%%SmartyHeaderCode:3238155a50577263956-09481536%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd32d3b81368e962703e69a7989f99ebf5e1ced24' => 
    array (
      0 => 'C:\\wamp\\www\\kmhotel\\app\\views\\article\\add.html',
      1 => 1437029585,
      2 => 'file',
    ),
    '2cbf8f222784318e8e08975c7402ce5736810559' => 
    array (
      0 => 'C:\\wamp\\www\\kmhotel\\app\\views\\article\\index.html',
      1 => 1436975892,
      2 => 'file',
    ),
    'fffb6e872d82df4ac1a873d27e1e296f24f38676' => 
    array (
      0 => 'C:\\wamp\\www\\kmhotel\\app\\views\\admin\\index.html',
      1 => 1437028316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3238155a50577263956-09481536',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_55a505775029b5_35654597',
  'variables' => 
  array (
    'assets' => 0,
    'user' => 0,
    'server_info' => 0,
    'user_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a505775029b5_35654597')) {function content_55a505775029b5_35654597($_smarty_tpl) {?><!DOCTYPE html>
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
<link rel="stylesheet" href="vendor/colorpicker/css/colorpicker.css">
<link rel="stylesheet" href="vendor/datepicker/datepicker.css">
        <style>
        .form-group{
            margin-top: 30px;
        }
        </style>
<script type="text/javascript" src="vendor/select2/select2.full.min.js"></script>
<script type="text/javascript" src="vendor/colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="vendor/datepicker/bootstrap-datepicker.js"></script>
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
                <li class="active"><i class="fa fa-dashboard"></i>&nbsp;&nbsp;&nbsp;添加文章
                </li>
            </ol>
            <h1>添加文章
<hr/>
            </h1>
            
        </div>
    </div>

    

<div class="panel panel-info">
    <div class="panel-heading"><span class="glyphicon glyphicon-file" aria-hidden="true"> 添加文章</span></div>

    <div class="panel-body">
        <form class="form-horizontal" role="form" action="index.php?c=article&a=do_add" method="post" enctype="multipart/form-data">
            <div class="row">
            <div class="form-group">
                <label class="control-label col-md-2" style="text-align: center">所属栏目</label>
                <div class="col-md-10">
                    <select class="js-example-basic-single" style="width:60%" name="cateId">
                        <option value="0">顶级栏目</option>
                        <?php  $_smarty_tpl->tpl_vars['cate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cate']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cate']->key => $_smarty_tpl->tpl_vars['cate']->value) {
$_smarty_tpl->tpl_vars['cate']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['cate']->value['id'];?>
"
                        <?php if ($_smarty_tpl->tpl_vars['id']->value==$_smarty_tpl->tpl_vars['cate']->value['id']) {?>
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
                <label for="title" class="col-md-2" style="text-align: center">标题</label>
                <div class="col-md-10">
                <input type="text" class="form-control" id="title"
                       placeholder="文章标题" name="title" style="width:40%">
                </div>
            </div>

            <div class="form-group" style="">
                <label class="col-md-2" style="text-align: center">标题颜色</label>

                <div class="controls col-md-10" >
                    <div data-color-format="hex" data-color="#000000" class="input-append color colorpicker">
                        <input type="text" value="#000000" class="span6" name="title_color">
	        <span class="add-on">
	            <i style="background-color: rgb(0, 0, 0);"></i>
	        </span>
                    </div>
                </div>
            </div>

            <div class="form-group" style="">
                <label class="col-md-2" style="text-align: center">发布日期</label>

                <div class="controls  col-md-10">
                    <input type="text" data-date-format="yyyy-mm-dd" value="<?php echo date('Y-m-d',time());?>
" name="time"
                           class="datepicker span6">
                </div>
            </div>

            <div class="form-group" style="">
                <label for="desc" class="col-md-2" style="text-align: center">描述</label>
                <div class="controls  col-md-10">
                <input type="text" class="form-control" id="desc" name="desc"
                       placeholder="文章描述" style="width: 50%;">
                </div>
            </div>

            <div class="form-group" style="">
                <label for="summary" class="col-md-2" style="text-align: center">摘要</label>
                <div class="controls  col-md-10">
                <textarea name="summary"  id="summary" placeholder="文章摘要" style="width: 50%;height:100px">
                </textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label" style="text-align: center">缩略图</label>
                <div class="controls  col-md-10">
                <input type="text"  id="thumb1" class="form-control" style="width:40%;" name="pic_path" value="">
                    <button class="btn btn-success" type="button" id="ckfinder-modal-1"
                            onclick="BrowseServer('thumb1','img_show1');">上传</button>
                    <button class="btn btn-danger thumb_del1" type="button">删除</button>
                    <img src="" id="img_show1" width="90px" height="90px" class="img_s p4"/>
                </div>

            </div>

            <div class="form-group add">
                <label class="col-md-2 control-label" style="text-align: center">新增附件</label>
                <div class="controls  col-md-10">
                <button class="btn btn-warning add_file" type="button">增加</button>
                    </div>
            </div>
            <div class="form-group file">
                <label class="col-md-2 control-label" style="text-align: center">附件(1)</label>
                <div  class="controls  col-md-10">
                <input type="text" class="" style="width:30%;" id="file1" name="attach_path[]">
                <button class="btn btn-success" type="button" onclick="BrowseServerFile('file1')" id="">上传</button>
                <button class="btn btn-danger file_del1" type="button">删除</button>
                </div>
            </div>
            <div class="editor">
                <textarea name="content" class=""></textarea>
            </div>
                <br/>
            <div class="col-md-4 col-md-offset-5">
                <button class="btn btn-success" type="submit">提交</button>
                <button class="btn btn-danger" type="submit">返回</button>
            </div>
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

    function BrowseServer(thumb1,img_show1) {
        var finder = new CKFinder();

        //当选中图片时执行的函数
        finder.selectActionFunction = function(fileUrl){
            $("#"+thumb1).val(fileUrl);
            $("#"+img_show1).attr("src",""+fileUrl+"");
        }
        finder.popup();//调用窗口

    }
    function BrowseServerFile(file1) {
        var finder = new CKFinder();
        finder.selectActionFunction = function(fileUrl){

            $("#"+file1).val(fileUrl);
        } //当选中图片时执行的函数
        finder.popup();//调用窗口
    }

    $(function () {
        $(".js-example-basic-single").select2();
        $(".colorpicker").colorpicker();
        $(".datepicker").datepicker();

        $(".add_file").click(function(){
            var i=$('.file').size();
            var n = i+1;
            var html = '<div class="form-group file">'+
                    '<label class="control-label col-md-2" style="text-align: center">附件('+n+'):</label>'+
                    '<div class="controls col-md-10">'+
                    '<input type="text" id="file'+n+'" class="span5" name="attach_path[]" style="width:30%;"/>&nbsp;'+
                    "<input type='button'  value='上 传' onclick=BrowseServer('file"+n+"') class='btn btn-success' />&nbsp;"+
                    '<input type="button"  value="删 除" class="file_del btn btn-danger" />&nbsp;'+
                    '</div>'+
                    '</div>';

            if(n < 6) {
                $(".file:last").after(html);
            } else {
                alert("您最多只能添加5个附件！");
                return false;
            }
            $(this).blur();  //失去焦点
            return false;   //不跳转
        });

        //删除缩微图附件
        $(".thumb_del1").click(function(){
            $("#thumb1").val('');
            $("#img_show1").attr("src",'');
        });

        $(document).on("click",".file_del",function(){
            $(this).parent().parent().remove();
        });

        $(".file_del1").click(function(){
            $("#file1").val('');
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
