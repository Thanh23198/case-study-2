<?php


namespace App\model;


class Sinhvien
{
protected $sinhvienID;
protected $masinhvien;
protected $name;
protected $phone;
protected $address;

public function __construct($masinhvien,$name,$phone,$address)
{
    $this->masinhvien=$masinhvien;
    $this->name=$name;
    $this->phone=$phone;
    $this->address=$address;
}

    /**
     * @return mixed
     */
    public function getSinhvienID()
    {
        return $this->sinhvienID;
    }

    /**
     * @param mixed $sinhvienID
     */
    public function setSinhvienID($sinhvienID): void
    {
        $this->sinhvienID = $sinhvienID;
    }

    /**
     * @return mixed
     */
    public function getMasinhvien()
    {
        return $this->masinhvien;
    }

    /**
     * @param mixed $masinhvien
     */
    public function setMasinhvien($masinhvien): void
    {
        $this->masinhvien = $masinhvien;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }



}