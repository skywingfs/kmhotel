<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/7/14
 * Time: 18:28
 */


session_start();
require 'ValidateCode.class.php';  //先把类包含进来，实际路径根据实际情况进行修改。
$vcode = new ValidateCode();      //实例化一个对象
$vcode->entry();