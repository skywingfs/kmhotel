<?php /* Smarty version Smarty-3.1.18, created on 2015-07-21 12:40:16
         compiled from "C:\wamp\www\kmhotel\app\views\index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:886155ade503c57014-56446771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1ded2a1f44e94c01a65d38ac38beaae5d011350' => 
    array (
      0 => 'C:\\wamp\\www\\kmhotel\\app\\views\\index\\index.html',
      1 => 1437467191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '886155ade503c57014-56446771',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55ade503d12b45_85255195',
  'variables' => 
  array (
    'assets' => 0,
    'top_cates' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ade503d12b45_85255195')) {function content_55ade503d12b45_85255195($_smarty_tpl) {?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name=keywords content="昆明卓越一次性用品有限公司">
    <meta name=description content="昆明卓越一次性用品有限公司">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/nivo-slider/style.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/nivo-slider/themes/default/default.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/nivo-slider/nivo-slider.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/css/reset.css"/>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/css/main.css"/>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/js/Common.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/nivo-slider/jquery.nivo.slider.pack.js"></script>
    <title>昆明卓越一次性用品有限公司</title>
    <title>主页</title>
</head>
<body>
<div id="header">
    <div class="top">
        <div class="topnav">
            <a onClick="AddFavorite('http://www.phpgoto.com','昆明卓越一次性用品有限公司')" href="javascript:void(0)" title="加入收藏">
                &nbsp;加入收藏</a>
            <a href="index.php?c=index&a=contact">&nbsp;联系我们</a>
            <a href="index.php?c=user&a=login">&nbsp;后台登录</a>
        </div>
        <div class="logo">
            <a href="index.php">
                <img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/logo.png"/>
            </a>
        </div>
        <div class="rexian">
            <img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/rexian.png"/>
        </div>
    </div>
    <div class="nav">
        <ul>
            <li><a href="index.php">首页</a></li>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['top_cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
            <li><a href="index.php?c=index&a=<?php echo $_smarty_tpl->tpl_vars['v']->value['pinyin'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['cateName'];?>
</a></li>
            <?php } ?>
        </ul>
    </div>
</div>

<div id="wrapper">
    <div class="slider-wrapper theme-default">
        <div id="slider" class="nivoSlider">
            <img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/20141105162502.jpg" data-thumb="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/20141105162502.jpg" alt=""/>
            <img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/20141107152351.jpg" data-thumb="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/20141107152351.jpg" alt=""/>
            <!--title="This is an example of a caption"-->
            <img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/20141105162516.jpg" data-thumb="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/20141105162516.jpg" alt=""
                 data-transition="slideInLeft"/>
            <img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/20141117184131.jpg" data-thumb="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/20141117184131.jpg" alt=""
                 title="#htmlcaption"/>
        </div>
        <!--<div id="htmlcaption" class="nivo-html-caption">-->
        <!--<strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.-->
        <!--</div>-->
    </div>
    <!--<div class="footer-banner" style="width:728px; margin:0 auto"></div>-->
</div>








<script type="text/javascript">
    $(window).load(function () {
        $('#slider').nivoSlider();
    });
</script>


</body>
</html><?php }} ?>
