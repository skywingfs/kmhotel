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
        $cates=$this->all("select * from category");
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
}