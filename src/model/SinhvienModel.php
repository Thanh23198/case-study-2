<?php


namespace App\model;


class SinhvienModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnection();
        $this->database = $db->connect();
    }

    public function getAll()
    {
        $sql = 'SELECT * FROM sinhvien LEFT JOIN diemthi ON sinhvien.sinhvienID=diemthi.sinhvienID LEFT JOIN lophoc ON sinhvien.lopID=lophoc.lopID';
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function findSinhvienById($sinhvienID)
    {
        $sql = 'SELECT * FROM sinhvien WHERE sinhvienID=:sinhvienID';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":sinhvienID", $sinhvienID);
        $stmt->execute();
        return $stmt->fetchAll();

    }
    public function getListClass()
    {
        $sql = "SELECT * FROM lophoc";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function addlophoc($lophoc)
    {
        $sql = 'INSERT INTO lophoc VALUES (tenlop,chunhiem) VALUES (:tenlop,:chunhiem)';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":name", $lophoc->getTenlop());
        $stmt->bindParam(":age", $lophoc->getChunhiem());
        $stmt->execute();
        return $stmt->fetchAll();
    }

//    public function getListClass()
//    {
//        $sql = "SELECT * FROM lophoc";
//        $stmt = $this->database->query($sql);
//        return $stmt->fetchAll();
//    }

    public function addsinhvien($sinhvien)
    {
        $sql = 'INSERT INTO sinhvien(masinhvien,name,phone,address,lopID) 
                      VALUES (:masinhvien,:name,:phone,:address,:lopID)';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":masinhvien", $sinhvien->getMasinhvien());
        $stmt->bindParam(":name", $sinhvien->getName());
        $stmt->bindParam(":phone", $sinhvien->getPhone());
        $stmt->bindParam(":address", $sinhvien->getAddress());
        $stmt->bindParam(":lopID", $sinhvien->getClass());
        $stmt->execute();

        $lastInsertid = $this->database->lastInsertId(); //Trả về ID của giá trị hàng hoặc chuỗi được chèn cuối cùng

        $sqlAddScore = "INSERT INTO diemthi (sinhvienID, diemtoan, diemvan, diemanh) 
                                    VALUES (:sinhvienID, :diemtoan, :diemvan, :diemanh)";

        $stmt2 = $this->database->prepare($sqlAddScore);
        $stmt2->bindValue(":sinhvienID", $lastInsertid);
        $stmt2->bindValue(":diemtoan", NULL, \PDO::PARAM_NULL);
        $stmt2->bindValue(":diemvan", NULL, \PDO::PARAM_NULL);
        $stmt2->bindValue(":diemanh", NULL, \PDO::PARAM_NULL);
        $stmt2->execute();
    }

    public function adddiemthi($diemthi)
    {
        $sql = 'INSERT INTO diemthi (diemtoan,diemvan,diemanh) VALUES (:diemtoan,:diemvan,:diemanh)';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":diemtoan", $diemthi->getDiemtoan());
        $stmt->bindParam(":diemvan", $diemthi->getDiemvan());
        $stmt->bindParam("diemanh", $diemthi->getDiemanh());
        $stmt->execute();
        return $stmt->fetchAll();

    }

    public function delete($diemthiID, $sinhvienid)
    {
        $sql = 'DELETE FROM diemthi WHERE diemthiID=:diemthiID';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":diemthiID", $diemthiID);
        $stmt->execute();


        $sql2 = 'DELETE FROM sinhvien WHERE sinhvienID=:sinhvienID';
        $stmt2 = $this->database->prepare($sql2);
        $stmt2->bindParam(":sinhvienID", $sinhvienid);
        $stmt2->execute();

    }

}

