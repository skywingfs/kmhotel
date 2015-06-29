<?php
/**
 * 用户管理控制器
 */
class AdminController extends CommonController {
  function index(){
    // dump($_SESSION);
    $this->display();

    // echo "尊敬的".$_SESSION["user"]["name"]."欢迎使用wycms!";

  }

  function test(){
    echo 123123;
  }



}
