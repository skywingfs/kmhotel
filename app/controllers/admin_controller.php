<?php
/**
 * 用户管理控制器
 */
class AdminController extends CommonController {
  function index(){
    // dump($_SESSION);
      $this->assign('server_info', $this->show_info());
      $user_info=$this->model->user_info();
      $this->assign('user_info',$user_info);
      $this->display();

  }

    private  function show_info()
    {
        $total_space = round((@disk_total_space(".") / (1024 * 1024)));
        $free_space = round((@disk_free_space(".") / (1024 * 1024)));
        $already_used = round($total_space-$free_space);
        $already_used_percent = round(($total_space-$free_space)/$total_space*100);

        $server_info = array(
            'os' => PHP_OS,
            'server_software' => $_SERVER["SERVER_SOFTWARE"],
            'php' => php_sapi_name(),
            'mysqli' => mysqli_get_server_info($this->model->getDb()),
            'canon_version' => 1.0 . "&nbsp;&nbsp;&nbsp; [<a href='http://phpgoto.com' target='_blank'>访问官网</a>]",
            'upload' => ini_get('upload_max_filesize'),
            //'执行时间限制' => ini_get('max_execution_time') . "秒",
            'total_space'=> $total_space,
            'free_space' => $free_space,
            'already_used' =>$already_used,
            'already_used_percent' => $already_used_percent,
        );
        //dump($server_info);
        return $server_info;
    }

    function flink(){
        $links=$this->model->all_links();
        $this->assign("links",$links);
        $this->display();
    }

    function add_link(){
        if ($_POST) {
            $arr = $_POST;
            //dump($arr);
            $this->model->insert_links($arr);
            $this->jump("index.php?c=admin&a=flink");
        }
    }

    function edit_link(){
        $arr = $_POST;
        $id=$arr['id'];
        if ($_POST) {
            $this->model->update_flink($arr,$id);
            $this->jump("index.php?c=admin&a=flink", "");
        }
    }

    function del_all(){
        if($_POST){
            $items=$_POST["items"];
            $this->model->del_all($items);
            $this->jump("index.php?c=admin&a=flink", "");
        }
    }

    function del_one(){
    $id=$_POST['id'];
        $this->model->del_one($id);
        $this->jump("index.php?c=admin&a=flink", "");
    }


    function sort(){
        if($_POST){
            $this->model->sort($_POST);
            $this->jump("index.php?c=admin&a=flink");
        }
    }

    function changePwd(){
//        dump($_SESSION);exit;
        $user=$_SESSION['user'];
        $this->assign('user',$user);
        $this->display();
    }

    function do_change(){
        $arr=$_POST;
//        dump($arr);exit;
        $username=$arr['username'];
        $old_password=$arr['old_password'];
        if($arr['new_password1']!=$arr['new_password2']){
            $this->jump("index.php?c=admin&a=changePwd","您输入的密码不一致！");
        }
        $password=$this->model->one_user($username);
        //echo $password;exit;
        if($password!=md5($old_password)){
            $this->jump("index.php?c=admin&a=changePwd","原始密码错误，无法修改");
            return;
        }
        $arr['password']=md5($arr['new_password1']);
        unset($arr['new_password2']);
        unset($arr['new_password1']);
        unset($arr['old_password']);
       // dump($arr);exit;
        $this->model->update_pwd($arr,$_SESSION['user']['id']);
        $this->clearSession();
        $this->jump("index.php?c=user&a=login","您的密码已经修改成功");


    }


    function  site_info(){
        $site_info=$this->model->user_info();
        $this->assign('site_info',$site_info);
        $this->display();
    }

    function edit_site(){
        $arr=$_POST;
        //dump($arr);exit;
        $this->model->do_edit_site($arr);
        $this->jump("index.php?c=admin&a=site_info","");
    }


    function clear(){

    $this->display();
    }

    function do_clear()
    {
        $directory=SITE_PATH."/app/views/smarty/templates_c";
//        echo $directory;
        $this->delDir($directory);
            $this->jump("index.php?c=admin&a=clear", "缓存清理成功");

    }

    function delDir($directory) {
        //判断目录是否存在，如果不存在rmdir()函数会出错
        if(file_exists($directory)) {
            //打开目录返回目录资源，并判断是否成功
            if($dir_handle=@opendir($directory)) {
                //遍历目录，读出目录中的文件或文件夹
                while($filename=readdir($dir_handle)) {
                    //一定要排除两个特殊的目录
                    if($filename!="." && $filename!="..") {
                        //将目录下的文件和当前目录相连
                        $subFile=$directory."/".$filename;
                        //如果是目录条件则成立
                        if(is_dir($subFile)) {
                            //递归调用自己删除子目录
                            delDir($subFile);
                        }
                        //如果是文件条件则成立
                        if(is_file($subFile)){
                            //直接删除这个文件
                            unlink($subFile);
                        }
                    }
                }

                //关闭目录资源
                closedir($dir_handle);

                //删除空目录
                rmdir($directory);
            }
        }
    }


}
