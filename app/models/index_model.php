<?php
class IndexModel extends CommonModel
{
    function all_contents(){
        $contents = $this->all("select * from contents");
        foreach ($contents as $k => $content) {
            $cate = $this->one("select * from category where id='$content[cateid]'");
            //dump($cate);
            $contents["$k"]["category"] = $cate["category"];
        }
        return $contents;
    }

    function del_content($id){
        $this->delete("contents","id='$id'");
    }

    function  one_content($id){
        $content= $this->one("select * from contents where id='$id'");
        $cate=$this->one("select * from category where id='$content[cateid]'");
        $content["category"]=$cate["category"];
        return $content;
    }


    function  all_cates(){
        $cates=$this->all("select * from category where pid=0");

        return $cates;
    }

    function update_contents($arr,$id){
        $this->update("contents",$arr,"id='$id'");
    }

    function insert_contents($arr){
        $this->insert("contents",$arr);
    }

//    function add($post){
//        $title = $post["title"];
//        $content = $post["content"];
//        $time = time();
//        $this->db->query("insert into comm (`title`, `content`, `time`) values ('$title', '$content', '$time')" );
//    }


    function about(){
        $about=$this->one("select content from cate where cateName='公司简介'");
//        dump($about);exit;
            return $about;
    }


    function site_info(){
        $site_info=$this->one("select * from site_info where id='1'");
        //dump($site_info);exit;
        return $site_info;
    }


    function count_art(){
        $count=$this->count("articles");;
        return $count;
    }

    function count_pro_art(){
        $count=$this->count("articles");;
        return $count;
    }

    function all_news($limit, $page_size){
        $news=$this->all("select * from articles  order by id asc limit $limit,$page_size");
        return $news;
    }


    function show($id){
        $art=$this->one("select * from articles where id=$id");
        return $art;
    }

    function update_hits($id){
        $this->db->query("update articles set `hits`=hits+1 where `id`=$id");
    }

    function front($id){
        $front=$this->one("select * from articles where id<{$id} order by id desc limit 1");
        return $front;
    }

    function next($id){
        $next=$this->one("select * from articles where id>{$id} order by id  limit 1");
        return $next;
    }

    function cates($id){
        $arts=$this->all("select * from cate where pid=$id");
        return $arts;
    }

    function pro_cate(){
      $pro_cate=  $this->all("select * from cate where pid=(select id from cate where cateName='产品中心')");
       //dump($pro_cate);exit;
        return $pro_cate;
    }

    function arts($child){
        $child_id = array();
        foreach($child as $p) {
            $child_id[] = $p["id"];
        }
        $pid1="(".join(",", $child_id).")";
        //dump($pid1);
        $arts=$this->all("select * from articles where cateId in $pid1");
       // echo "select * from articles where cateId in $pid1";exit;
        return $arts;
    }

    function arts1($child,$limit, $page_size){
        $child_id = array();
        foreach($child as $p) {
            $child_id[] = $p["id"];
        }
        $pid1="(".join(",", $child_id).")";
        //dump($pid1);
        $arts=$this->all("select * from articles where cateId in $pid1 limit $limit,$page_size");
        // echo "select * from articles where cateId in $pid1";exit;
        return $arts;
    }

    function cate_id($id){
        return $this->all("select id from cate where pid=$id");
    }

    //一级分类
    function top_cates(){
        return $this->all("select * from cate where pid=0 order by orderId");
    }


}