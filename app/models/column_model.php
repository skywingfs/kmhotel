<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/7/9
 * Time: 19:44
 */
class ColumnModel extends CommonModel
{

    private $child_cate=array();
    function all_cates()
    {
        $cates = $this->all("select * from cate order by pid asc,orderId asc,id asc");
        //  dump($cates);exit;
        $cates = $this->get_array($cates);
        return $cates;
        //  dump($cates);
    }

    //foreach循环多维数组
    function get_son($pid)
    {
        $cates = $this->all("select * from cate where pid=$pid");

        foreach ($cates as &$cate) {
            $cate['child'] = $this->all("select * from cate where pid='$cate[id]'");

            foreach ($cate['child'] as &$val) {
                $val['childson'] = $this->all("select * from cate where pid='$val[id]'");

                foreach ($val['childson'] as &$value) {
                    $value['childsonson'] = $this->all("select * from cate where pid='$value[id]'");
                }
            }
        }
        //dump($cates);exit;
        return $cates;
    }


    /**
     * 递归循环获得多维数组
     * @access public
     * @param Array $data //数据库里获取的结果集
     * @param Int $pid
     * @param Int $count //第几级分类
     * @return Array $treeList
     * */
    function get_array($cates, $pid = 0, $count = 1)
    {
        static $treeList = array();
        foreach ($cates as $k => $value) {
            if ($value['pid'] == $pid) {
                $value['count'] = $count;
                $treeList[] = $value;
                unset($cates[$k]);
                $this->get_array($cates, $value['id'], $count + 1);
            }
        }
//        dump($treeList);exit;
        return $treeList;
    }

    function del($id){
     $this->db->query("delete from cate where id = '$id'");
      $child = $this->all("select * from cate where pid='$id'");
        if($child) {
            foreach($child as $v) {
                $this->del($v["id"]);
            }
        }
    }

    function  check_del($id){
        $this->child_cate[] = $id;//自身ID加入数组
        $this->child_cate($id);//子孙栏目ID
        foreach($this->child_cate as $child) {
            $count=$this->count("articles", "where cateId='$child'");
            if($count>0) {
                return false;
            }
        }
        return true;
    }

    function child_cate($id){
        $child = $this->all("select id from cate where pid='$id'");
        if($child) {
            foreach($child as $v) {
                $this->child_cate[] = $v["id"];
                $this->child_cate($v["id"]);
            }
        }
    }
}