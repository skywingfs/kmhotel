<?php /* Smarty version Smarty-3.1.18, created on 2015-07-21 09:44:49
         compiled from "C:\wamp\www\kmhotel\app\views\file\index.html" */ ?>
<?php /*%%SmartyHeaderCode:976455adf8710513a7-13827700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a247977c7d2159de99bfa8818bb23ece28e2f279' => 
    array (
      0 => 'C:\\wamp\\www\\kmhotel\\app\\views\\file\\index.html',
      1 => 1436166344,
      2 => 'file',
    ),
    'fffb6e872d82df4ac1a873d27e1e296f24f38676' => 
    array (
      0 => 'C:\\wamp\\www\\kmhotel\\app\\views\\admin\\index.html',
      1 => 1437028316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '976455adf8710513a7-13827700',
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
  'unifunc' => 'content_55adf87126d684_25919302',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55adf87126d684_25919302')) {function content_55adf87126d684_25919302($_smarty_tpl) {?><!DOCTYPE html>
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
    
<script type="text/javascript" src="/vendor/ckfinder/ckfinder.js"></script>
        
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
                <li class="active"><i class="fa fa-dashboard"></i>&nbsp;&nbsp;&nbsp;文件管理
                </li>
            </ol>
            <h1>

            </h1>
            
        </div>
    </div>

    
<div id="ckfinder" style="margin-top:-38px;"></div>
<script type="text/javascript">
    //<![CDATA[
    (function()
    {
        var config = {};
        var get = CKFinder.tools.getUrlParam;
        var getBool = function( v )
        {
            var t = get( v );

            if ( t === null )
                return null;

            return t == '0' ? false : true;
        };

        var tmp;
        if ( tmp = get( 'configId' ) )
        {
            var win = window.opener || window;
            try
            {
                while ( ( !win.CKFinder || !win.CKFinder._.instanceConfig[ tmp ] ) && win != window.top )
                    win = win.parent;

                if ( win.CKFinder._.instanceConfig[ tmp ] )
                    config = CKFINDER.tools.extend( {}, win.CKFinder._.instanceConfig[ tmp ] );
            }
            catch(e) {}
        }

        if ( tmp = get( 'basePath' ) )
            CKFINDER.basePath = tmp;

        if ( tmp = get( 'startupPath' ) || get( 'start' ) )
            config.startupPath = decodeURIComponent( tmp );

        config.id = get( 'id' ) || '';

        if ( ( tmp = getBool( 'rlf' ) ) !== null )
            config.rememberLastFolder = tmp;

        if ( ( tmp = getBool( 'dts' ) ) !== null )
            config.disableThumbnailSelection = tmp;

        if ( tmp = get( 'data' ) )
            config.selectActionData = tmp;

        if ( tmp = get( 'tdata' ) )
            config.selectThumbnailActionData = tmp;

        if ( tmp = get( 'type' ) )
            config.resourceType = tmp;

        if ( tmp = get( 'skin' ) )
            config.skin = tmp;

        if ( tmp = get( 'langCode' ) )
            config.language = tmp;

        if ( typeof( config.selectActionFunction ) == 'undefined' )
        {
            // Try to get desired "File Select" action from the URL.
            var action;
            if ( tmp = get( 'CKEditor' ) )
            {
                if ( tmp.length )
                    action = 'ckeditor';
            }
            if ( !action )
                action = get( 'action' );

            var parentWindow = ( window.parent == window ) ? window.opener : window.parent;
            switch ( action )
            {
                case 'js':
                    var actionFunction = get( 'func' );
                    if ( actionFunction && actionFunction.length > 0 )
                        config.selectActionFunction = parentWindow[ actionFunction ];

                    actionFunction = get( 'thumbFunc' );
                    if ( actionFunction && actionFunction.length > 0 )
                        config.selectThumbnailActionFunction = parentWindow[ actionFunction ];
                    break ;

                case 'ckeditor':
                    var funcNum = get( 'CKEditorFuncNum' );
                    if ( parentWindow['CKEDITOR'] )
                    {
                        config.selectActionFunction = function( fileUrl, data )
                        {
                            parentWindow['CKEDITOR'].tools.callFunction( funcNum, fileUrl, data );
                        };

                        config.selectThumbnailActionFunction = config.selectActionFunction;
                    }
                    break;

                default:
                    if ( parentWindow && parentWindow['FCK'] && parentWindow['SetUrl'] )
                    {
                        action = 'fckeditor' ;
                        config.selectActionFunction = parentWindow['SetUrl'];

                        if ( !config.disableThumbnailSelection )
                            config.selectThumbnailActionFunction = parentWindow['SetUrl'];
                    }
                    else
                        action = null ;
            }
            config.action = action;
        }

        // Always use 100% width and height when nested using this middle page.
        config.width =  '100%';
        config.height =500;
        var ckfinder = new CKFinder( config );
        ckfinder.replace( 'ckfinder', config );
    })();
    //]]>
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
