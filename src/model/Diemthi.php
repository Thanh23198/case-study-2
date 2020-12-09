<?php


namespace App\model;


class Diemthi
{
protected $diemthiID;
protected $sinhvienID;
protected $diemtoan;
protected $diemvan;
protected $diemanh;

public function __construct($sinhvienID,$diemtoan,$diemvan,$diemanh)
{
    $this->sinhvienID=$sinhvienID;
    $this->diemtoan=$diemtoan;
    $this->diemvan=$diemvan;
    $this->diemanh=$diemanh;
}

    /**
     * @return mixed
     */
    public function getDiemthiID()
    {
        return $this->diemthiID;
    }

    /**
     * @param mixed $diemthiID
     */
    public function setDiemthiID($diemthiID): void
    {
        $this->diemthiID = $diemthiID;
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
    public function getDiemtoan()
    {
        return $this->diemtoan;
    }

    /**
     * @param mixed $diemtoan
     */
    public function setDiemtoan($diemtoan): void
    {
        $this->diemtoan = $diemtoan;
    }

    /**
     * @return mixed
     */
    public function getDiemvan()
    {
        return $this->diemvan;
    }

    /**
     * @param mixed $diemvan
     */
    public function setDiemvan($diemvan): void
    {
        $this->diemvan = $diemvan;
    }

    /**
     * @return mixed
     */
    public function getDiemanh()
    {
        return $this->diemanh;
    }

    /**
     * @param mixed $diemanh
     */
    public function setDiemanh($diemanh): void
    {
        $this->diemanh = $diemanh;
    }


}