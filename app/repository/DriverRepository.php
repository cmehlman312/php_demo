<?php

namespace repository;

use entities\Driver;
use Interfaces\IDriverRepository;
use Core\Database;

require_once base_path('Core/Database.php');

class DriverRepository implements IDriverRepository
{
    private Database $db;

    function __construct(){
        $config = require base_path('config.php');
        $db = new Database($config['database']);
        $this->db = $db;
    }

    public function getAll(): array
    {
        $drivers = $this->db->query("SELECT * FROM drivers ORDER BY name")->fetchAll();
        if($drivers){
            return $drivers;
        } else {
            return [];
        }

    }

    public function getById(int $id)
    {
        $driver = $this->db->query("SELECT * FROM drivers WHERE id = $id")->fetch();
        if($driver){
            return $driver;
        } else {
            return [];
        }
    }

    public function create(Driver $driver): bool|\PDOStatement|null
    {
        $driver = $this->db->query("INSERT INTO drivers (name, yearsdriving, drivemanual) VALUES ('{$driver->getName()}','{$driver->getYearsdriving()}','{$driver->getYearsdriving()}'})");
        if($driver->rowCount() > 0){
            return $driver;
        } else {
            return null;
        }
    }

    public function update(Driver $driver): bool|\PDOStatement|null
    {
        $driver = $this->db->query("UPDATE drivers SET name = '{$driver->getName()}', yearsdriving = '{$driver->getYearsdriving()}', drivemanual = '{$driver->getYearsdriving()}' WHERE id = {$driver->getId()}");
        if($driver->rowCount() > 0){
            return $driver;
        } else {
            return null;
        }
    }

    public function delete(int $id): bool|\PDOStatement
    {
        return $this->db->query("DELETE FROM drivers WHERE id = $id");
    }

    public function findByDriveManual($drivemanual): array
    {
        $drivers = $this->db->query("SELECT * FROM drivers WHERE drivemanual = $drivemanual")->fetchAll();
        if($drivers){
            return $drivers;
        } else {
            return [];
        }
    }
}