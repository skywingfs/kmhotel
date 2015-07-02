<?php

class UserModel extends CommonModel
{
    /**
     * 注册
     */
    function do_reg($arr)
    {
        //$token = md5($name.$password.time().rand(0,9999999999999));
        $this->insert("user", $arr);

    }

    /**
     * 登录
     */
    function do_login($post)
    {
        $username = trim($post["username"]);
        $password = md5(trim($post["password"]));
        $user = $this->one("select * from users where `username`='$username' and `password` = '$password'");

        //用户账号密码正确，注册session
        if ($user) {
            //如果勾选了记住密码
            if(isset($post["rem"])){
                setcookie("token",$user["token"],time()+60*60*24*7);
            }else{
                setcookie("token",$user["token"]);
            }
            return true;
        }else{
            return false;
        }
    }
}
