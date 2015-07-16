<?php
/**
 * 用户管理控制器
 */

class UserController extends CommonController {
  /**
   * 显示注册页面
   */
  function reg()
  {

    $this->display();
  }

  /**
   * 执行注册操作
   */
  function do_reg()
  {
    if($_POST) {
        $arr=$_POST;
        $arr["username"]=trim($arr["username"]);
        $arr["password"]=md5(trim($arr["password"]));
        $token=md5($arr["username"].time().rand(0,99999999).$arr["password"]);
        $arr["token"]=$token;
        //dump($arr);
       // exit;
      $this->model->do_reg($arr);
      $this->jump("index.php?c=user&a=login","");
    }
  }


  /**
   * 显示登录页面
   */
  function login()
  {

    $this->display();
  }

  /**ValidateCode
   * 执行登录操作
   */
  function do_login()
  {
    if($_POST){
      if($this->model->do_login($_POST)) {
        $this->jump( "index.php?c=admin","登录成功，正在为您跳转至后台");
      } else {
        $this->jump("index.php?c=user&a=login","账号密码错误，请重新登录!");
      }
    }
  }

  /**
   * 安全退出
   */
  function logout()
  {
    $this->clearSession();
    $this->jump( "index.php?c=user&a=login","您已经安全退出");
  }
}
