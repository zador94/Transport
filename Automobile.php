<?php

class Automobile implements IVehicle
{
    public function __construct(protected string $model, protected float $maxSpeed, protected int $quantityWheels, private string $markAutomobile, private int $year)
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

    use VehicleData;
}