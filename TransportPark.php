<?php

class TransportPark
{

    public function __construct(private array $listVehicle)
    {
    }

    public function getListVehicle(): array
    {
        return $this->listVehicle;
    }

    public function addVehicle(IVehicle $vehicle): void
    {
        $this->listVehicle[] = $vehicle;
    }

    public function removeVehicle(string $vehicle): void
    {
        foreach ($this->listVehicle as $key => $value) {
            if ($value->getModel() == $vehicle) {
                unset($this->listVehicle[$key]);
            }
        }
    }
}