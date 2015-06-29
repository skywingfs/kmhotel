<?php

class IndexController extends CommonController
{

    function index()
    {       //方法，实例方法
        //$contents = $this->model->all_contents();
        //$this->assign("contents", $contents);
        $this->display();
    }

    function show()
    {
        $id = $_GET['id'];
        $content = $this->model->one_content($id);
        $this->assign("content", $content);
        $this->display();
    }


    function del()
    {
        $id = $_GET['id'];
        $this->model->del_content($id);
        $this->jump("index.php");
    }


    function edit()
    {
        $id = $_GET['id'];
        $content = $this->model->one_content($id);
        $cates = $this->model->all_cates();
        $this->assign("content", $content);
        $this->assign("cates", $cates);
        $this->display();
    }

    function do_edit()
    {
        $id = $_GET['id'];
        $arr = $_POST;
        if ($_POST) {
            $this->model->update_contents($arr, $id);
            $this->jump("index.php", "更新成功，即将跳转到首页~~");
        }
    }

    function add()
    {
        $cates = $this->model->all_cates();
        $this->assign("cates", $cates);
        $this->display();
    }

    function do_add(){
        if ($_POST) {
            $arr = $_POST;
            $arr['time']=time();
            //dump($arr);
          // exit;
            $this->model->insert_contents($arr);
            $this->jump("index.php");
        }
    }




}