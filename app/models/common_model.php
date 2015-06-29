<?php
class CommonModel
{
    protected $db;

    function __construct(){

        //模型常用方法, 数据库的操作
        $this->db = new mysqli(C("db_host"), C("db_username"), C("db_password"), C("db_name"));
        //检查连接错误
        if (mysqli_connect_errno()) {
            exit("连接失败: %s<br>". mysqli_connect_error());
        }
        $this->db->query("set names utf8");

        //指定表

    }

    /***
     * 查询所有数据
     * @param $sql
     * @return array
     */
    function all($sql){
        $result = $this->db->query($sql);
        $array = array();
        while($row = $result->fetch_array()){
            $array[] = $row;
        }
        return $array;
    }

    /***
     * 查询单条数据
     * @param $sql
     * @return mixed
     */
    function one($sql){
        $result = $this->db->query($sql);
        $row = $result->fetch_assoc();
        return $row;
    }

    /***
     * 查询符合条件的记录数
     * @param $sql
     * @return int
     */
    function count($table){
        $result = $this->one("select count(*) as count from $table");
        return $result["count"];
    }

    function insert($table, $array)
    {
        $keys = "`" . join("`,`", array_keys($array)) . "`";
        $vals = "'" . join("','", array_values($array)) . "'";
        $sql = "insert  {$table}({$keys})values({$vals})";
        //echo $sql;
        // mysql_query($sql);
        $this->db->query($sql);
        // echo  mysqli_insert_id($this->db);
        return  mysqli_insert_id($this->db);
    }

    function delete($table, $where = null)
    {
        $where = ($where == null ? null : " where " . $where);
        $sql = "delete from {$table} {$where}";
        $this->db->query($sql);
        return mysqli_affected_rows($this->db);
    }


    function update($table, $array, $where = null)
    {
        $sets="";
        foreach ($array as $key => $val) {
            $sets .= $key . "='" . $val . "',";
        }
        $sets=rtrim($sets,','); //去掉SQL里的最后一个逗号
        //echo $sets;
        $sql = "update {$table} set {$sets} " . ($where == null ? null : " where " . $where);
       // echo $sql;
        $result=$this->db->query($sql);
        if ($result) {
            return mysqli_affected_rows($this->db);
        }else{
            return false;
        }
    }





}