<?php


namespace App\model;
use PDO;

class DBConnection
{
protected $dsn;
protected $username;
protected $password;

public function __construct()
{
    $this->dsn='mysql:host=localhost;dbname=casestudy';
    $this->username='root';
    $this->password='FT+Xe"pjZfR5dq:B';
}

public function connect(){
    try{
        return new PDO($this->dsn,$this->username,$this->password);
    }
    catch (\PDOException $e){
        echo $e->getMessage();
        exit();
    }
}
}