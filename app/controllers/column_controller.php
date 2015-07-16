<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/7/9
 * Time: 19:42
 */

class ColumnController extends CommonController{

function index(){
   // $cates=$this->model->get_son(0);
    $cates=$this->model->all_cates();

    $this->assign("cates",$cates);
    //dump($cates);exit;
    $this->display();
}


function del_column(){
    $id=$_GET['id'];
    if($this->model->check_del($id)){
    $this->model->del($id);
        $this->jump("index.php?c=column","");
    }else{
      $this->jump("index.php?c=column","该分类或子孙分类下有文章，无法删除！！");
    }

}

    function add(){
        $cates=$this->model->all_cates();
        $id=$_GET['id'];
        $this->assign("cates",$cates);
        $this->assign("id",$id);

        $this->display();
    }

    function do_add(){
        if($_POST){
        $arr=$_POST;
           $this->model->add_column($arr);
            $this->jump("index.php?c=column","");
        }
    }

    function sort(){
//        dump($_POST);exit;
        if($_POST){
            $this->model->sort($_POST);
            $this->jump("index.php?c=column");
        }
    }

    function edit(){
        $id=$_GET['id'];
        $cate1= $this->model->one_cate($id);
        $cates=$this->model->all_cates();
        $this->assign('cate1',$cate1);
        $this->assign('cates',$cates);
        $this->display();
    }


    function do_edit(){
        $arr=$_POST;
        $id=$_GET['id'];
        $this->model->update_column($arr,$id);
        $this->jump("index.php?c=column","");
    }
}