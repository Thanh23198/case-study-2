<?php


namespace App\controller;

use App\model\Sinhvien;
use App\model\SinhvienModel;
use App\model\Diemthi;
use App\model\DiemthiModel;
use App\model\Lophoc;
use App\model\LophocModel;

class SinhvienController
{
    protected $Sinhviencontroller;

    public function __construct()
    {
        $this->Sinhviencontroller = new SinhvienModel();
    }

    public function show()
    {
        $sinhviens = $this->Sinhviencontroller->getAll();
        include_once "src/view/list.php";
    }

    public function showScore()
    {
        $sinhviens = $this->Sinhviencontroller->getAll();
        include_once "src/view/scorelist.php";
    }

    public function getListClass()
    {
        return $this->Sinhviencontroller->getListClass();
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $ListClass = new \App\controller\SinhvienController();
            $data = $ListClass->getListClass();


            include_once "src/view/add.php";
        } else {
            $masinhvien = $_REQUEST['masinhvien'];
            $name = $_REQUEST['name'];
            $phone = $_REQUEST['phone'];
            $address=$_REQUEST['address'];
            $class=$_REQUEST['class'];
            $sinhvien = new Sinhvien($masinhvien,$name,$phone,$address,$class) ;
            $this->Sinhviencontroller->addsinhvien($sinhvien);
            header('location:index.php');
        }
    }

    public function delete(){
        $diemthiID = $_REQUEST['diemthiid'];
        $sinhvienid = $_REQUEST['sinhvienid'];
        $this->Sinhviencontroller->delete($diemthiID, $sinhvienid);
        header('location:index.php');
    }

}