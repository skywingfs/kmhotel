<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/7/2
 * Time: 0:56
 */

require('column_model.php');
class ArticleModel extends CommonModel
{
    function all_contents($limit,$page_size)
    {
        $contents = $this->all("select * from articles order by id asc limit $limit,$page_size");

        foreach ($contents as $k => $content) {
            $cate = $this->one("select * from cate where id='$content[cateId]'");
            $contents["$k"]["cateName"] = $cate["cateName"];
        }
        return $contents;
    }

    function count_art(){
        $count=$this->count("articles");;
        return $count;
    }

    function all_cates(){
        $cates = $this->all("select * from cate order by pid asc,orderId asc,id asc");
        $col=new columnModel();
        $cates = $col->get_array($cates);
        return $cates;
    }

    function insert_art($arr){
        $this->insert("articles",$arr);
    }


    function one_art($id){
        $article=$this->one("select * from articles where id='$id'");
        $cate=$this->one("select * from cate where id='$article[cateId]'");
        $cateName=$cate["cateName"];
        $article["cateName"]=$cateName;
        return $article;

    }

    function update_art($arr,$id){
        $this->update("articles",$arr,"id=$id");
    }

    function del_one($id){
        $this->delete("articles","id=$id");

    }

    function del_all($items){
        foreach($items as $v){
            $this->delete("articles","id='$v'");
        }
    }


    function showCate($cateId,$limit,$page_size){
        echo $cateId;
        $contents=$this->all("select * from articles where cateId='$cateId'  order by id asc limit $limit,$page_size");

        foreach ($contents as $k => $content) {
            $cate = $this->one("select * from cate where id='$content[cateId]'");
            $contents["$k"]["cateName"] = $cate["cateName"];
        }
        return $contents;
    }
}