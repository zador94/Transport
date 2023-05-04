<?php

class Bus implements IVehicle
{
    public function __construct(protected string $model, protected float $maxSpeed, protected int $quantityWheels, private int $numberOfSeets)
    {

    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getMaxSpeed(): float
    {
        return $this->maxSpeed;
    }

    public function getQuantityWheels(): int
    {
        return $this->quantityWheels;
    }
    public function getNumberOfSeets(): int
    {
        return $this->numberOfSeets;
    }

}