<?php


namespace App\model;


class SinhvienModel
{
protected $database;
public function __construct()
{
    $db=new DBConnection();
    $this->database=$db->connect();
}

public function getAll(){
    $sql='SELECT * FROM sinhvien LIMIT 15';
    $stmt=$this->database->query($sql);
    return $stmt->fetchAll();
}

public function findSinhvienById($sinhvienID){
    $sql='SELECT * FROM sinhvien WHERE sinhvienID=:sinhvienID';
    $stmt=$this->database->prepare($sql);
    $stmt->bindParam(":sinhvienID",$sinhvienID);
    $stmt->execute();
    return $stmt->fetchAll();

}
}