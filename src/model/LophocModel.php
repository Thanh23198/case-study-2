<?php


namespace App\model;


class LophocModel
{
    protected $database2;
    public function __construct()
    {
        $db2=new DBConnection();
        $this->database2=$db2->connect();
    }

    public function getAll2(){
        $sql2='SELECT * FROM lophoc INNER JOIN sinhvien ON lophoc.lopID=sinhvien.lopID LIMIT 15';
        $stmt2=$this->database2->query($sql2);
        return $stmt2->fetchAll();
    }

    public function findLophocById($lopID){
        $sql2='SELECT * FROM lophoc WHERE lopID=:lopID';
        $stmt2=$this->database2->prepare($sql2);
        $stmt2->bindParam(":lopID",$lopID);
        $stmt2->execute();
        return $stmt2->fetchAll();

    }
}