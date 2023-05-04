<?php

trait VehicleData
{

    public function getMark() : string
    {
     return $this->markAutomobile;
    }

    public function getYear() : int
    {
        return $this->year;
    }
}