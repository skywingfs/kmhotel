<?php /* Smarty version Smarty-3.1.18, created on 2015-07-21 17:15:28
         compiled from "C:\wamp\www\kmhotel\app\views\index\message.html" */ ?>
<?php /*%%SmartyHeaderCode:534255adf35451de80-82081769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c93266952ec9e6c44c2efc76ca1779672a327e1e' => 
    array (
      0 => 'C:\\wamp\\www\\kmhotel\\app\\views\\index\\message.html',
      1 => 1437403641,
      2 => 'file',
    ),
    '73a492c0d934e0624578afafe82a0111afe35e75' => 
    array (
      0 => 'C:\\wamp\\www\\kmhotel\\app\\views\\index\\front.html',
      1 => 1437467891,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '534255adf35451de80-82081769',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55adf3546cd1f7_44780985',
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
<?php if ($_valid && !is_callable('content_55adf3546cd1f7_44780985')) {function content_55adf3546cd1f7_44780985($_smarty_tpl) {?><!doctype html>
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
     <div class="main ny_about"> 
        <div class="title"> <span>您的位置：首页 >> 在线留言</span>
            <h3>在线留言
</h3></div>
        
    <div class="ny_msg">
    <div class="cont">
        <p class="bridge"><a href="messageck.asp.htm">查看留言</a> | <a href="message.asp.htm">填写留言</a></p>
        <p class="welcome"><img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/welcome.png" tppabs="http://www.whtyxjdyp.com/Include/images/welcome.png" width="600" height="35" /></p>
        <form name=myform id=myform action="http://www.whtyxjdyp.com/message.asp" method=post onSubmit="return checkform();" target="_top">
            <ul class="msg_form">
                <li>
                    <input maxlength=50 size=40 name=Title  value="留言主题(Theme)" id="m1" onBlur="changeBegin('m1','留言主题(Theme)');" onFocus="changeEnd('m1','留言主题(Theme)');"  >
                </li>
                <li>
                    <input maxlength=50 size=40 name=Phone value="电话(Tel)" id="m2" onFocus="changeEnd('m2','电话(Tel)');"  onblur="this.value=this.value.replace(/\D/g,''); changeBegin('m2','电话(Tel)');"
                           onkeydown="this.value=this.value.replace(/\D/g,'');checknumbers('m2');"
                           onkeyup="this.value=this.value.replace(/\D/g,'');checknumbers('m2');"
                            >
                </li>
                <li>
                    <input maxlength=50 size=40 name=OwnerName value="姓名(Name)" id="m3" onBlur="changeBegin('m3','姓名(Name)');" onFocus="changeEnd('m3','姓名(Name)');" >
                </li>
                <li>
                    <input maxlength=50 size=40 name=Email value="邮箱(E-mail)" id="m4" onBlur="changeBegin('m4','邮箱(E-mail)');" onFocus="changeEnd('m4','邮箱(E-mail)');" >
                </li>
                <li>
                    <textarea name=Content id=Content rows=5 cols=40  onFocus="if(this.innerHTML=='请输入提交内容'){this.innerHTML=''}" onBlur="if(this.innerHTML==''){this.innerHTML='请输入提交内容'}">请输入提交内容</textarea>
                </li>
                <li class="butbox">
                    <input name="Ver" id="Ver" type=hidden  value="cn">
                    <input name=IP id="IP" type=hidden  value="122.228.229.217">
                    <input name="IsChecked" id="IsChecked" type=hidden  value="False">
                    <input name="acction" id="acction" type=hidden  value="add" >
                    <input name=sub type=submit id="sub" style="width:89px;height:28px; margin-left:0px; background: url(<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/ny_msg1.gif)"  value="">
                    &nbsp;
                    <input name=res type=reset id="res" style="width:89px;height:28px;  background: url(<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/ny_msg2.gif)" value="">
                </li>
            </ul>
        </form>
    </div>
</div>
</div>
<script language="javascript">
    function changeBegin(id,cont){
        var str_text = document.getElementById(id);
        if (str_text.value==""){
            str_text.value=cont
        }
    }
    function changeEnd(id,cont){
        var str_text = document.getElementById(id);
        if (str_text.value==cont){
            str_text.value=""
        }
    }

    function checkform(){
        if(document.myform.Title.value=="留言主题(Theme)"){
            alert('请输入您的留言主题!');
            document.myform.Title.focus();
            return false;
        }
        if(document.myform.OwnerName.value=="姓名(Name)"){
            alert('请输入您的姓名!');
            document.myform.OwnerName.focus();
            return false;
        }
        if (document.myform.Phone.value=="电话(Tel)"){
            alert('请输入联系电话!');
            document.myform.Phone.focus();
            return false;
        }
        if (document.myform.Email.value=="邮箱(E-mail)"){
            alert('请输入您的电子邮件!');
            document.myform.Email.focus();
            return false;
        }
        if(!isEmail(document.myform.Email.value)){
            alert('请输入正确的邮件格式');
            document.myform.Email.focus();
            return false;
        }
        if (document.myform.Content.value=="请输入提交内容"){
            alert('请输入留言内容!');
            document.myform.Content.focus();
            return false;
        }
        return true;
    }

    var maxnum=11;
    function checknumbers(name){
        if(document.getElementById(name).value.length>maxnum){
            document.getElementById(name).value=document.getElementById(name).value.substr(0,maxnum);
            return false;
        }
    }


    function checkform1(String)
    {
        if(!isEmail(String))
        {
            window.alert('请输入正确的邮件格式！');
            String.focus();
            return false;
        }
        return true;
    }

    function isEmail(Email)
    {
        var regInvalid=/(@.*@)|(\.\.)|(@\.)|(\.@)|(^\.)/;
        var regValid=/^.+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,3}|[0-9]{1,3})(\]?)$/;
        return (!regInvalid.test(Email)&&regValid.test(Email));
    }
</script>


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
