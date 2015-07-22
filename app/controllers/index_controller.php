<?php

class IndexController extends CommonController
{

    function __construct(){
        parent::__construct();
        $this->front();
    }


    function index()
    {
        $this->display();
    }

    private function front()
    {
        //查询产品分类
        $procate=$this->model->pro_cate();
        $top_cates=$this->model->top_cates();
        $this->assign('procate',$procate);
        $this->assign('top_cates',$top_cates);
        //$this->display();
    }

    //公司简介
    function about(){
        $about=$this->model->about();
        $this->assign('about',$about);
        $this->display();
    }

    //联系我们
    function contact(){
        $site_info=$this->model->site_info();
        $this->assign('site_info',$site_info);
        $this->display();
    }

    //人才招聘
    function jobs(){
        $this->display();
    }

    //新闻资讯
    function news(){
        $p= isset($_GET["p"]) ? $_GET["p"] : "1";       //当前是第几页
        $page_size = 6;                   //每页多少条数据
        $count = $this->model->count_art();         //总共多少条数据
        $page_count = ceil($count/$page_size);         //页面总数

        require(LIB_PATH."/page.php");

        $page = new Page($p, $page_size, $page_count, "index.php?c=index&a=news");
        $this->assign("page_show", $page->page_show());
        $limit = ($p-1)*$page_size;                   //limit起始数字
        $news=$this->model->all_news($limit, $page_size);
        $this->assign('news',$news);
        $this->display();
    }

    //查看新闻资讯，根据ID查询文章
    function show_art(){
        $id=$_GET['id'];
        $art=$this->model->show($id);
        $this->model->update_hits($id);
        $front=$this->model->front($id);
        $next=$this->model->next($id);
        $this->assign('art',$art);
        $this->assign('front',$front);
        $this->assign('next',$next);
        $this->display();
    }

    //在线留言
    function message(){

        $this->display();
    }

    //产品中心
    function product(){
        $id=$_GET['id'];
        $child=$this->model->cate_id($id);
        $arts=$this->model->arts($child);
        //dump($arts);exit;
        $count1=count($arts);
       // echo $count;exit;
        foreach($arts as $k=>&$art){
            $art['pic_path']=substr($art['pic_path'],14);
            $art['pic_path']= '/upload/_thumbs/Images/'.$art['pic_path'];
        }

        //dump($arts);exit;
        $p= isset($_GET["p"]) ? $_GET["p"] : "1";       //当前是第几页
        $page_size = 8;                   //每页多少条数据
        $count = $count1;         //总共多少条数据
        $page_count = ceil($count/$page_size);         //页面总数

        require(LIB_PATH."/page.php");

        $page = new Page($p, $page_size, $page_count, "index.php?c=index&a=product&id=18");
        $this->assign("page_show", $page->page_show());
        $limit = ($p-1)*$page_size;                   //limit起始数字
        $arts=$this->model->arts1($child,$limit, $page_size);

        $this->assign('arts',$arts);
        $this->display();
    }

      //产品中心产品详情
    function show_img(){
        $id=$_GET['id'];
        $cate_id=$this->model->one_cate_id($id);

        $this->display();
    }

}