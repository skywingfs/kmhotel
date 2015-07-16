<?php

class AdminModel extends CommonModel
{

    function user_info(){
        $user_info=$this->one("select * from site_info");
        return $user_info;
    }

    function all_links()
    {
        $links = $this->all("select * from flink order by orderId");
        return $links;
    }

    function insert_links($arr)
    {
        $links = $this->insert("flink", $arr);
    }


    function update_flink($arr, $id)
    {
        $this->update("flink", $arr, "id='$id'");
    }

    function sort($post)
    {
       // dump($post);
        $id = $post["id"];
        $order = $post["order"];
        foreach ($id as $k => $v) {
            $orderId=$order["$k"];
            $this->db->query("update flink set `orderId`='$orderId' where id='$v'");
        }
//            $this->update("flink",);
    }

    function del_one($id){
        $this->delete("flink","id=$id");
    }

    function del_all($items){
        foreach($items as $v){
        $this->delete("flink","id='$v'");
        }
    }

  function do_edit_site($arr){
        $this->update("site_info",$arr);
  }


    function one_user($username){
        $password=$this->one("select password from users where `username`='$username'");

        return $password['password'];
    }


    function update_pwd($arr,$id){
        $this->update("users",$arr,"id=$id");

    }
}
