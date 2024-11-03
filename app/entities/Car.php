<?php

namespace entities;

class Car
{

    private ?int $id = null;

    private ?string $make = null;

    private ?string $model = null;

    private ?int $year = null;

    private ?string $transmission = null;

    private ?string $color = null;

    private ?int $driver_assigned = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getMake(): ?string
    {
        return $this->make;
    }

    public function setMake(string $make): static
    {
        $this->make = $make;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): static
    {
        $this->model = $model;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(int $year): static
    {
        $this->year = $year;

        return $this;
    }

    public function getTransmission(): ?string
    {
        return $this->transmission;
    }

    public function setTransmission(string $transmission): static
    {
        $this->transmission = $transmission;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): static
    {
        $this->color = $color;

        return $this;
    }
    public function getDriverAssigned(): ?int
    {
        return $this->driver_assigned;
    }

    public function setDriverAssigned(int $driver_assigned): static
    {
        $this->driver_assigned = $driver_assigned;

        return $this;
    }
}