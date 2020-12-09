<?php


namespace App\model;


class DiemthiModel
{
protected $database1;
public function __construct()
{
    $db1=new DBConnection();
    $this->database1=$db1->connect();
}
    public function getAll1(){
        $sql1='SELECT * FROM diemthi INNNER JOIN sinhvien ON diemthi.sinhvienID=sinhvien.sinhvienID LIMIT 15';
        $stmt1=$this->database1->query($sql1);
        return $stmt1->fetchAll();
    }
    public function editScore($scoreid, $diemtoan, $diemvan, $diemanh)
    {
        $sql = "UPDATE diemthi SET diemtoan=:diemtoan, diemvan=:diemvan, diemanh=:diemanh WHERE diemthiID=:diemthiID";
        $stmt2 = $this->database1->prepare($sql);
        $stmt2->bindParam(":diemtoan", $diemtoan);
        $stmt2->bindParam(":diemvan", $diemvan);
        $stmt2->bindParam(":diemanh", $diemanh);
        $stmt2->bindParam(":diemthiID", $scoreid);
        $stmt2->execute();
    }
    public function findDiemthiById($diemthiID){
        $sql1='SELECT * FROM  WHERE diemthiID=:diemthiID';
        $stmt1=$this->database1->prepare($sql1);
        $stmt1->bindParam(":diemthiID",$diemthiID);
        $stmt1->execute();
        return $stmt1->fetchAll();

    }
}