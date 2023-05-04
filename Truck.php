<?php

class Truck implements IVehicle
{
    public function __construct(protected string $model, protected float $maxSpeed, protected int $quantityWheels, private int $carrying, private float $bodyVolume)
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

    public function getCarrying(): int
    {
        return $this->carrying;
    }

    public function getBodyVolume(): float
    {
        return $this->bodyVolume;
    }
}