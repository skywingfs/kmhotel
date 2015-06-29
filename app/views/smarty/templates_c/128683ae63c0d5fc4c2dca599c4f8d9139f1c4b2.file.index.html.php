<?php /* Smarty version Smarty-3.1.20, created on 2015-06-28 07:21:14
         compiled from "C:\wamp\www\myframe\app\views\index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:7284558f844a1326c4-12750840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '128683ae63c0d5fc4c2dca599c4f8d9139f1c4b2' => 
    array (
      0 => 'C:\\wamp\\www\\myframe\\app\\views\\index\\index.html',
      1 => 1435418319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7284558f844a1326c4-12750840',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'assets' => 0,
    'contents' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_558f844a1f0100_44296853',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558f844a1f0100_44296853')) {function content_558f844a1f0100_44296853($_smarty_tpl) {?><!DOCTYPE html static "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>武汉长乐教育PHP课程-博客系统开发</title>
    <link href="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
    <div id="innerHeader">
        <div id="blogLogo"></div>
        <div class="blog-header">
            <div class="blog-title"><IMG SRC="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/logo.png"  style="border:1px solid gray" BORDER="0" ALT="" align="absmiddle"> <a href="http://www.whphp.com">WHPHP</a></div>
            <div class="blog-desc">武汉长乐教育PHP课程-博客系统开发</div>
        </div>
        <div id="menu">
            <ul>
                <li><a href="index.php">日志首页</a></li>
                <li><a href="index.php?a=add">撰写日志</a></li>
                <li><a href="">官方网站</a></li>
                <li><a href="index.php?c=user&a=login">登录</a></li>
                <li><a href="index.php?c=user&a=reg">注册</a></li>
            </ul>
        </div>
    </div>
</div>
<!--中间部分-->
<div id="mainWrapper">
    <div id="content" class="content">
        <div id="innerContent">
            <div class="announce text" style="border:1px solid silver;padding:5px;font-size:14px;">
                <h4 style="color:#FF3300"><img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/wav.gif" width="18" height="18" border="0" alt="" align="absmiddle"> 简单的BLOG示例</h4>
                本示例Blog包括日志的新增、修改、列表、统计、评论和删除等功能,可以作为入门PHP的绝佳示例。<P>请按照下面步骤操作，增加分类、添加日志、增加评论。
            </div>
            <!--
            <div class="article-top">
                <div class="view-mode">浏览模式: <a href="?mode=normal">普通</a> | <a href="?mode=list">列表</a></div><div class="pages">{$page}</div>
            </div>
            -->

            <div>


                <?php  $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content']->key => $_smarty_tpl->tpl_vars['content']->value) {
$_smarty_tpl->tpl_vars['content']->_loop = true;
?>
                <div class="textbox-title">
                    <h4>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/icon_point2.gif" width="13" height="13" border="0" alt="" align="absmiddle">
                        <a href="index.php?a=show&id=<?php echo $_smarty_tpl->tpl_vars['content']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['content']->value['title'];?>
</a>
                    </h4>
                    <div class="textbox-label">
                        [ <?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['content']->value['time']);?>
  |
                            <?php echo $_smarty_tpl->tpl_vars['content']->value['category'];?>

                        ]
                    </div>
                </div>
                <div class="textbox-content">
                    <?php echo $_smarty_tpl->tpl_vars['content']->value['content'];?>

                </div>
                <div class="textbox-bottom">
					[ 管理：<a href="index.php?a=edit&id=<?php echo $_smarty_tpl->tpl_vars['content']->value['id'];?>

					">|编辑</a> <a  href="index.php?a=del&id=<?php echo $_smarty_tpl->tpl_vars['content']->value['id'];?>
">删除</a> ]
					| <a href="#">评论: 15</a> | 浏览: 20
				</div>

                <?php } ?>

            </div>
            <!--
            <div class="article-bottom">
                <div class="pages">{$page}
                </div>
            </div>
            -->
        </div>
    </div>

    <div id="sidebar" class="sidebar">
        <div id="innerSidebar">
            <div id="panelSearch" class="panel">
                <div id="panelStats" class="panel">
                    <h5>统计数据</h5>
                    <div class="panel-content">
                        日志总数：<span style="color:#CC9933">12</span><br />
                        阅读总数：<span style="color:#6699FF">30</span><br />
                        评论总数：<span style="color:#FF9900">50</span><br />
                    </div>
                </div>
                <h5 >日志分类 </h5>
                <div class="panel-content">
                    <ul id="category">
                        <li>
                            <div class="fLeft" >
                                <input TYPE="text" id="categoryName" class="text" NAME="name">
                            </div>
                            <input TYPE="button" value="增 加" class="submit hMargin small">
                            <br style="clear:both;float:auto"/>
                        </li>
                        <volist name="category" id="vo">
                            <li>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/folder.gif" width="18" height="18" border="0" alt="" align="absmiddle">
                                <a href="#">新闻</a>
                                <span>(33)</span>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/del.gif" style="cursor:pointer" width="20" height="20" border="0" alt="" >
                            </li>
                            <li>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/folder.gif" width="18" height="18" border="0" alt="" align="absmiddle">
                                <a href="#">娱乐</a>
                                <span>(33)</span>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/del.gif" style="cursor:pointer" width="20" height="20" border="0" alt="" >
                            </li>
                        </volist>
                    </ul>
                </div>
            </div>
            <div id="panelSearch" class="panel">
                <h5 >最新日志</h5>
                <div class="panel-content">
                    <ul>
						<li>
							<img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/icon_ctb.gif" width="11" height="11" border="0" alt="" align="absmiddle"/>
							<a href="#" title="学PHP真有趣">学PHP真有趣</a>
							<sup style="color:silver;font-size:12px">
								[<span style="color:#3366CC">20<!-- 阅读数 --></span> |<span style="color:#FF6600"> 15<!-- 评论数 --></span>]
							</sup>
						</li>
                    </ul>
                </div>
            </div>
            <div id="panelSearch" class="panel">
                <h5 >最新评论</h5>
                <div class="panel-content">
                    <ul>
                        <volist id="vo" name="lastComments">
                            <li>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/Comment.gif" width="9" height="9" border="0" alt="" align="absmiddle">
                                <a href="#"> <span style="color:#3366CC">Aaron</span></a>：
								<a href="#" title="">您的博文写得好好呢！</a>
                        </volist>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 版权信息区域 -->
<div id="footer" class="footer" >
    <div id="innerFooter">Powered by 武汉长乐教育 |  <a target="_blank" href="http://www.whphp.com">whphp</a></div>
</div>
</body>
</html><?php }} ?>
