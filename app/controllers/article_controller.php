<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/7/2
 * Time: 0:53
 */
class ArticleController extends CommonController
{
    function index()
    {
        $p= isset($_GET["p"]) ? $_GET["p"] : "1";       //当前是第几页
        $page_size = C("page_size");                   //每页多少条数据
        $count = $this->model->count_art();         //总共多少条数据
        $page_count = round($count/$page_size);         //页面总数

        require(LIB_PATH."/page.php");

        $page = new Page($p, $page_size, $page_count, "index.php?c=article");
        $this->assign("page_show", $page->page_show());
        $limit = ($p-1)*$page_size;                   //limit起始数字
        $contents=$this->model->all_contents($limit, $page_size);
        $this->assign("contents",$contents);
        $this->display();
    }

    function add(){
        $cates=$this->model->all_cates();
        $this->assign("cates",$cates);
        $this->display();
    }

    function do_add(){
        $arr=$_POST;
        $time=$arr['time'];
        $year=((int)substr($time,0,4));//取得年份
        $month=((int)substr($time,5,2));//取得月份
        $day=((int)substr($time,8,2));//取得几号
        $time= mktime(0,0,0,$month,$day,$year);
        $arr['time']=$time;
       // dump($arr);

        $files=$arr['attach_path'];
        $sum="";
        foreach($files as $k=>$v ){
        $sum.=$v.",";
        }
       // echo $sum;
        $sum=substr($sum,0,-1);
        $arr['attach_path']=$sum;

       // dump($arr);
        $this->model->insert_art($arr);
        $this->jump("index.php?c=article","");
    }

    function edit_art(){
        $id=$_GET['id'];
        $article=$this->model->one_art($id);
        $cates=$this->model->all_cates();
        $attach=$article['attach_path'];
        $fujian=explode(',',$attach);
//        dump($fujian);
//        exit;
        //$size=count($fujian);
        $this->assign("article",$article);
        $this->assign("cates",$cates);
        $this->assign("fujian",$fujian);
        $this->display();
    }


    function do_edit(){
        $id=$_GET['id'];
        $arr=$_POST;
        $time=$arr['time'];
        $year=((int)substr($time,0,4));//取得年份
        $month=((int)substr($time,5,2));//取得月份
        $day=((int)substr($time,8,2));//取得几号
        $time= mktime(0,0,0,$month,$day,$year);
        $arr['time']=$time;
        // dump($arr);
        $files=$arr['attach_path'];
        $sum="";
        foreach($files as $k=>$v ){
            $sum.=$v.",";
        }
        // echo $sum;
        $sum=substr($sum,0,-1);
        $arr['attach_path']=$sum;

        //dump($arr);exit;
        $this->model->update_art($arr,$id);
        $this->jump("index.php?c=article","");
    }

    function del_one(){
        $id=$_POST['id'];
        $article=$this->model->one_art($id);
        //要去除upload前的/
        // $thumb="upload/images/95369214jw1dokmkuv7x5j.jpg";
        $thumb=substr($article['pic_path'],1);
     //   echo $thumb;
        $attach=$article['attach_path'];
        //删除缩微图
        if(file_exists($thumb)){
            if(unlink($thumb)) {
                echo "文件删除成功！";
            }else{
                echo "文件删除失败！";
            }
        }else{
            echo "不存在此缩微图";
        }

        //删除多个附件
        $attach=explode(",",$attach);
        foreach($attach as $k=>$v) {
            $v=substr($v,1);
            if (file_exists($v)) {
                if (unlink($v)) {
                    echo "文件删除成功！";
                } else {
                    echo "文件删除失败！";
                }
            } else {
                echo "目标文件不存在";
            }
        }
        $this->model->del_one($id);
        $this->jump("index.php?c=article","");
    }

    function del_all(){
        if($_POST){
            $items=$_POST["items"];
            $this->model->del_all($items);
            $this->jump("index.php?c=article", "");
        }
    }

}