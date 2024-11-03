<?php

namespace entities;

class Driver
{
    private ?int $id = null;

    private ?string $name = null;

    private ?int $yearsdriving = null;

    private ?bool $drivemanual = null;


    public function __construct()
    {
        $this->carid = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getYearsdriving(): ?int
    {
        return $this->yearsdriving;
    }

    public function setYearsdriving(int $yearsdriving): static
    {
        $this->yearsdriving = $yearsdriving;

        return $this;
    }

    public function getDrivemanual(): ?bool
    {
        return $this->drivemanual;
    }

    public function setDrivemanual(bool $drivemanual): static
    {
        $this->drivemanual = $drivemanual;

        return $this;
    }
}