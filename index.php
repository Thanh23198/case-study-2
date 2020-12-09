<?php
require_once __DIR__ . "/vendor/autoload.php";
$Sinhviencontroller = new \App\controller\SinhvienController();
$page = (isset($_REQUEST['page']))?$_REQUEST['page']:NULL;
switch ($page){
    default:
        $Sinhviencontroller->show();
}

