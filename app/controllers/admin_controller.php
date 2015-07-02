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


    function flink(){
        $links=$this->model->all_links();
        $this->assign("links",$links);
        $this->display();
    }

    function add_link(){
        if ($_POST) {
            $arr = $_POST;
            dump($arr);
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
          //  $this->jump("index.php?c=admin&a=flink");
        }
    }


  function test(){
    echo 123123;
  }



}
