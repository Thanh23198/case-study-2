<?php


namespace App\controller;
use App\model\Sinhvien;
use App\model\SinhvienModel;

class SinhvienController
{
protected $Sinhviencontroller;
public function __construct()
{
    $this->Sinhviencontroller=new SinhvienModel();
}
public function show(){
    $sinhviens=$this->Sinhviencontroller->getAll();
    include_once "src/view/list.php";
}

}