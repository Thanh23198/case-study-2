<?php


namespace App\controller;
use App\model\Diemthi;
use App\model\DiemthiModel;
use App\model\Lophoc;


class DiemthiController
{
    protected $diemthicontroller;
    public function __construct()
    {
        $this->diemthicontroller=new DiemthiModel();
    }
    public function show(){
        $diemthis=$this->diemthicontroller->getAll();
        include_once "src/view/list.php";
    }

    public function editScore()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){

            include_once "src/view/scoreedit.php";
        }
        else {
            $id = $_REQUEST['id'];
            $diemtoan = $_REQUEST['diemtoan'];
            $diemvan = $_REQUEST['diemvan'];
            $diemanh = $_REQUEST['diemanh'];
            $this->diemthicontroller->editScore($id, $diemtoan, $diemvan, $diemanh);
            header("Location: index.php?page=scorelist");
        }
    }
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once "src/view/add.php";
        } else {
            $diemtoan = $_REQUEST['diemtoan'];
            $diemvan = $_REQUEST['diemvan'];
            $diemanh=$_REQUEST['diemanh'];
            $diemthi = new Diemthi($diemtoan,$diemvan,$diemanh) ;
            $this->diemthicontroller->adddiemthi($diemthi);
            header('location:index.php');
        }
    }
}