<?php
require_once __DIR__ . "/vendor/autoload.php";
$Sinhviencontroller = new \App\controller\SinhvienController();
$DiemthiController = new \App\controller\DiemthiController();
$page = (isset($_REQUEST['page']))?$_REQUEST['page']:NULL;
switch ($page){
    case 'add':
        $Sinhviencontroller->add();
        break;
    case 'scorelist':
        $Sinhviencontroller->showScore();
        break;
    case 'editscore':
        $DiemthiController->editScore();
        break;
    case 'delete':
        $Sinhviencontroller->delete();
    default:
        $Sinhviencontroller->show();
}

