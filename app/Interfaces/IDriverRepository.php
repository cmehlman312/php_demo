<?php

namespace Interfaces;

use entities\Driver;
interface IDriverRepository
{
    public function getAll();
    public function getById(int $id);
    public function create(Driver $driver);
    public function update(Driver $driver);
    public function delete(int $id);
    public function findByDriveManual($drivemanual);

}