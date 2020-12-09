<?php


namespace App\controller;

use App\model\Sinhvien;
use App\model\SinhvienModel;
use App\model\Diemthi;
use App\model\DiemthiModel;
use App\model\Lophoc;
use App\model\LophocModel;


class LophocController
{
    protected $lophoccontroller;
    public function __construct()
    {
        $this->lophoccontroller=new LophocModel();
    }
    public function show(){
        $lophocs=$this->lophoccontroller->getAll();
        include_once "src/view/list.php";
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once "src/view/add.php";
        } else {
            $tenlop = $_REQUEST['tenlop'];
            $chunhiem = $_REQUEST['chunhiem'];
            $lophoc = new Lophoc($tenlop,$chunhiem) ;
            $this->lophoccontroller->addlophoc($lophoc);
            header('location:index.php');
        }
    }
}