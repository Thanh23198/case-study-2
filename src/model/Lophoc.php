<?php


namespace App\model;


class Lophoc
{
protected $lopID;
protected $tenlop;
protected $chunhiem;

public function __construct($tenlop,$chunhiem)
{
    $this->tenlop=$tenlop;
    $this->chunhiem=$chunhiem;
}

    /**
     * @return mixed
     */
    public function getLopID()
    {
        return $this->lopID;
    }

    /**
     * @param mixed $lopID
     */
    public function setLopID($lopID): void
    {
        $this->lopID = $lopID;
    }

    /**
     * @return mixed
     */
    public function getTenlop()
    {
        return $this->tenlop;
    }

    /**
     * @param mixed $tenlop
     */
    public function setTenlop($tenlop): void
    {
        $this->tenlop = $tenlop;
    }

    /**
     * @return mixed
     */
    public function getChunhiem()
    {
        return $this->chunhiem;
    }

    /**
     * @param mixed $chunhiem
     */
    public function setChunhiem($chunhiem): void
    {
        $this->chunhiem = $chunhiem;
    }
}