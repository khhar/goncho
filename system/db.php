<?php
class System_db {
    private $con;
    private $q;
    function __construct(){
        $this->con = new Mysqli('localhost','root','','kino');
        if($this->con->connect_errno){
            echo $con->connect_error;
            exit;
        }
    }
    public function select($sell) {
        $this->q = $this->con->query($sell);
        return $this;
    }
    public function first(){
        if(!$this->q){
            return [];
        }
        return $this->q->fetch_assoc();
    }
    public function all() {
        if(!$this->q){
            return [];
        }
        $data=[];
        while($r=$this->q->fetch_assoc()){
            $data[]=$r;
        }
        return $data;
    }
    public function insert($table,$insert) {
            $files = [];
            $values = [];
            foreach($insert as $k=>$v){
                $files[] = $k;
                $values[] = $v;
            }
            $fl = implode(',', $files);
            $vl = implode("','", $values);
            $this->con->query("insert into $table ($fl) values ('$vl')");
    }
    public function update($table, $update, $where, $type=true) {
            $files = [];
            $a = [];
            foreach($update as $k=>$v){
                if($type){
                    $files[] = $k.'='."'".$v."'";
                }
                else {
                    $files[] = $k.'='.$v;
                }
            }
            foreach($where as $k=>$v){
            $fl = implode(',', $files);
                $a[] = $k.'='."'".$v."'";	
            }
            $b = implode(' and ', $a);
            //var_dump("update $table set $fl where $b");die;
            $this->con->query("update $table set $fl where $b");
    }
}