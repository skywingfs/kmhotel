<?php

class AdminModel extends CommonModel
{
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
}
