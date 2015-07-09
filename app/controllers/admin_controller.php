<?php
/**
 * 用户管理控制器
 */
class AdminController extends CommonController {
  function index(){
    // dump($_SESSION);
      //$this->assign('server_info', $this->main());
      $this->display();

  }

    private  function main()
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
            'canon_version' => 1.0 . "&nbsp;&nbsp;&nbsp; [<a href='http://www.canon4ever.com' target='_blank'>访问官网</a>]",
            'upload' => ini_get('upload_max_filesize'),
            //'执行时间限制' => ini_get('max_execution_time') . "秒",
            'total_space'=> $total_space,
            'free_space' => $free_space,
            'already_used' =>$already_used,
            'already_used_percent' => $already_used_percent,
        );
        dump($server_info);
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
        $this->display();
    }






  function test(){
    echo 123123;
  }



}
