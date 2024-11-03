<?php

namespace repository;

use entities\Car;
use Interfaces\ICarRepository;
use Core\Database;

require_once base_path('Core/Database.php');

class CarRepository implements ICarRepository
{
    private Database $db;

    function __construct(){
        $config = require base_path('config.php');
        $db = new Database($config['database']);
        $this->db = $db;
    }

    public function getAll()
    {
        $cars = $this->db->query("SELECT * FROM cars")->fetchAll();
        if(!$cars){
            return [];
        }
        else{
            return $cars;
        }

    }

    public function find($id)
    {
        $car = $this->db->query("SELECT * FROM cars WHERE id = $id")->fetch();
        if(!$car){
            return null;
        } else {
            return $car;
        }
    }

    public function create(Car $car)
    {
        $query = "INSERT INTO cars(make, model, year, color, transmission) VALUES(:cleanMake,:cleanModel,:cleanYear,:cleanColor,:cleanTransmission)";
        $params = array(
            "cleanMake" => $car->getMake(),
            "cleanModel" => $car->getModel(),
            "cleanYear" => $car->getYear(),
            "cleanColor" => $car->getColor(),
            "cleanTransmission" => $car->getTransmission()
        );
        $car = $this->db->querywithparams($query, $params)->fetch();
        if(!$car){
            return false;
        } else {
            return $car;
        }


    }

    public function update(Car $car)
    {
        $query = "UPDATE cars SET make=:make, model=:model, year=:year, color=:color, transmission = :transmission WHERE id = :id";
        $params = array('make'=> $car->getMake(),
            'model'=>$car->getModel(),
            'year'=>$car->getYear(),
            'color'=>$car->getColor(),
            'transmission'=>$car->getTransmission(),
            'id'=>$car->getId());
        $car = $this->db->querywithparams($query, $params);
        if(!$car){
            return false;
        } else {
            return $car;
        }
    }

    public function delete($id): void
    {
        $this->db->querywithparams('DELETE FROM cars WHERE id = $id');
    }

    public function findByDriverId($id)
    {
        // TODO: Implement findByDriverId() method.
        $cars = $this->db->query("SELECT * FROM cars WHERE driver_assigned = $id")->fetchAll();
        if(!$cars){
            return null;
        } else {
            return $cars;
        }
    }

    public function updateDriverAssigned($carid, $driverid): bool|\PDOStatement
    {
        // TODO: Implement updateAssignedDriver() method.
        $query = "UPDATE cars SET driver_assigned = :driver_assigned WHERE id = :id";
        $params = array('driver_assigned'=> $driverid, 'id'=> $carid);
        $car = $this->db->querywithparams($query, $params);
        if(!$car){
            return false;
        } else {
            return $car;
        }
    }

    public function getAllWithDrivers()
    {
        $cars = $this->db->query("SELECT C.*, D.name as 'driver' FROM cars C LEFT JOIN drivers D ON C.driver_assigned = D.id")->fetchAll();
        if(!$cars){
            return [];
        } else {
            return $cars;
        }
    }
    
    public function findWithDriver($id)
    {
        // TODO: Implement findWithDriver() method.
        $cars = $this->db->query("SELECT C.*, D.name as 'driver' FROM cars C LEFT JOIN drivers D ON C.driver_assigned = D.id WHERE id = $id")->fetch();
        if(!$cars){
            return null;
        } else {
            return $cars;
        }
    }
}