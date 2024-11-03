<?php

namespace Interfaces;

use entities\Car;

interface ICarRepository
{
    public function getAll();
    public function find($id);
    public function create(Car $car);
    public function update(Car $car);
    public function delete(Car $car);
    public function findByDriverId($id);
    public function updateDriverAssigned($carid, $driverId);

    public function getAllWithDrivers();

    public function findWithDriver($id);
}