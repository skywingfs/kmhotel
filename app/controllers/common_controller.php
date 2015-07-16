<?php
// smarty 配置
require(VENDOR_PATH . '/smarty/Smarty.class.php');

class CommonController extends Smarty
{
    //当前方法对应的模板
    var $template;
    var $action;
    var $controller;
    protected $model;

    function __construct()
    {
        global $a, $c;
        $this->action = $a;
        $this->controller = $c;
        //$c="user";

        //smarty配置
        parent::__construct();
        //模板的路径
        $this->setTemplateDir(APP_PATH . '/views/' . $c);

        //编译模板位置
        $this->setCompileDir(APP_PATH . '/views/smarty/templates_c/');

        //配置文件路径
        $this->setConfigDir(APP_PATH . '/views/smarty/configs/');

        //缓存路径
        $this->setCacheDir(APP_PATH . '/views/smarty/cache/');

        $this->left_delimiter = "{{";
        $this->right_delimiter = "}}";

        //index.html
        $this->template = $a . ".html";
//        $this->assign("assets", APP_PATH."/assets");
          $this->assign("assets", "app/assets");
        //检查登录
        $this->check_login();
        $this->model = D();
    }

    // $s->display();
    /***
     * 重载smarty的display方法
     * @param null $template
     * @param null $cache_id
     * @param null $compile_id
     * @param null $parent
     */
    public function display($template = null, $cache_id = null, $compile_id = null, $parent = null)
    {
        $template = $template == "" ? $this->template : $template;
        parent::display($template, $cache_id = null, $compile_id = null, $parent = null);
    }


    /***
     * 清除session方法
     */
    function clearSession()
    {
        $_SESSION = array();
        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), "", time() - 3600, "/");
        }
        setcookie("token", "", time()-1);
    }

    //成功信息
    function jump($url, $info="") {
        if($info == "") {
            echo "<script>location.href='".$url."'</script>";
        } else {
            echo "<script>alert('".$info."');location.href='".$url."'</script>";
        }
    }


    /**
     * 判断是否登录
     */
    function check_login(){
        if(isset($_SESSION["user"])){
            $this->assign("user",$_SESSION["user"]);
            return;
        }
        if ($this->controller == "user" and in_array("$this->action", C("allow"))) {   //in_array判断是否在数组中
            return;
        }
        elseif($this->controller=="index"){
            return;
        }

        if (!isset($_COOKIE["token"])) {
            $this->jump("index.php?c=user&a=login", "您还没有登录");
            exit;
        }

        //检测数据库是否有这个token
        $token = $_COOKIE["token"];
       // echo $token;exit;
        $User = M();
        $user = $User->one("select * from users where `token` = '$token'");
        //如果用户信息不存在
        if (!$user) {
            $this->jump("index.php?c=user&a=login", "不要非法登录");
        }

        $_SESSION["user"] = $user;
        $this->assign("user", $user);
    }






}
