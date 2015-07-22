<?php /* Smarty version Smarty-3.1.18, created on 2015-07-21 16:32:27
         compiled from "C:\wamp\www\kmhotel\app\views\index\news.html" */ ?>
<?php /*%%SmartyHeaderCode:3071255adeb3b986a89-80247297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f54adec29f6775b60480a1263b21bbe79741336b' => 
    array (
      0 => 'C:\\wamp\\www\\kmhotel\\app\\views\\index\\news.html',
      1 => 1437484937,
      2 => 'file',
    ),
    '73a492c0d934e0624578afafe82a0111afe35e75' => 
    array (
      0 => 'C:\\wamp\\www\\kmhotel\\app\\views\\index\\front.html',
      1 => 1437467891,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3071255adeb3b986a89-80247297',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55adeb3bb347c4_34815039',
  'variables' => 
  array (
    'assets' => 0,
    'top_cates' => 0,
    'v' => 0,
    'procate' => 0,
    'pro' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55adeb3bb347c4_34815039')) {function content_55adeb3bb347c4_34815039($_smarty_tpl) {?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name=keywords content="昆明卓越一次性用品有限公司">
    <meta name=description content="昆明卓越一次性用品有限公司">
    <link href="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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

<div id="content">
    <div class="side">
        <div class="sidelist">
            <div class="title"><a href="index.php?c=index&a=products"><img
                    src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/p1.gif" /></a>

                <h3 style="align-content: center;line-height: inherit">产品分类 <span> Product</span></h3></div>
            <ul>
                <?php  $_smarty_tpl->tpl_vars['pro'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pro']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['procate']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pro']->key => $_smarty_tpl->tpl_vars['pro']->value) {
$_smarty_tpl->tpl_vars['pro']->_loop = true;
?>
                <li><a title='<?php echo $_smarty_tpl->tpl_vars['pro']->value['cateName'];?>
' href="index.php?c=index&a=product&cateId=<?php echo $_smarty_tpl->tpl_vars['pro']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['pro']->value['cateName'];?>
</a></li>
          <?php } ?>
            </ul>
        </div>
        <div class="nycontact">
            <a href="message.php"><img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/p3.jpg"></a>
            <a href="jobs.php"><img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/p4.jpg"></a>
        </div>
    </div>
     <div class="main ny_news"> 
        <div class="title"> <span>您的位置：首页 >> 新闻资讯</span>
            <h3>新闻资讯
</h3></div>
        
<div class="cont">
    <ul>
        <?php  $_smarty_tpl->tpl_vars['new'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['new']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['new']->key => $_smarty_tpl->tpl_vars['new']->value) {
$_smarty_tpl->tpl_vars['new']->_loop = true;
?>
        <li>
            <a href="index.php?c=index&a=show_art&id=<?php echo $_smarty_tpl->tpl_vars['new']->value['id'];?>
" title='<?php echo $_smarty_tpl->tpl_vars['new']->value['title'];?>
' target='_blank' style=""><?php echo $_smarty_tpl->tpl_vars['new']->value['title'];?>
</a>
            <span class="date">[<?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['new']->value['time']);?>
]</span>
        </li>
        <?php } ?>
    </ul>
</div>
</div>
<div style="margin-left: 500px;"><?php echo $_smarty_tpl->tpl_vars['page_show']->value;?>
</div>


    </div>
    

    <div class="clear"></div>
</div>
<div id="footer">
    <p>手机：15812115575 电话/传真：0871-64565565 电子邮箱：1147920576@qq.com 详细地址：昆明市前兴路邦盛新时代酒店用品市场3栋6号<br/>
        Copyright 2015 by 昆明卓越一次性用品有限公司 [ <a
                href="javascript:if(confirm('http://www.miibeian.gov.cn/  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个域或路径外部被设置为它的启始地址的地址。  \n\n你想在服务器上打开它?'))window.location='http://www.miibeian.gov.cn/'"
                target="_blank">备案号:</a>] 【<a
                href="javascript:if(confirm('http://kmhotel.com/index.php?c=admin  \n\n该文件无法用 Teleport Ultra 下载, 因为 它是一个已经被站点漫游器排除规则参数排除的路径地址。(该系统的 Teleport Ultra 守则是可选的; 参见项目属性, 网络礼仪。)  \n\n你想在服务器上打开它?'))window.location='http://kmhotel.com/index.php?c=admin'"
               target="_blank">网站后台管理</a>】</p>
</div>


<script type="text/javascript">
    $(window).load(function () {
        $('#slider').nivoSlider();
    });
</script>

</body>
</html><?php }} ?>
