<?php

use Core\Database;
use entities\Car;
use \repository\CarRepository;

const BASE_PATH = __DIR__.'/../';
require BASE_PATH . 'Core/Database.php';
require BASE_PATH . 'Core/Validator.php';
require BASE_PATH . 'Core/functions.php';

require BASE_PATH  . 'Interfaces/ICarRepository.php';
require BASE_PATH . 'repository/CarRepository.php';
require BASE_PATH  . 'entities/Car.php';



$config = require BASE_PATH . 'config.php';
$db = new Database($config['database']);

 $queryDriver = "CREATE TABLE IF NOT EXISTS `drivers` (
           `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
           `name` varchar(255) NOT NULL,
           `experience` int(11) NOT NULL,
           `drivemanual` tinyint(1) NOT NULL,
           UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

 $db->query($queryDriver);

$queryCar = "CREATE TABLE IF NOT EXISTS `cars` (
                        `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
                        `make` varchar(255) NOT NULL,
                        `model` varchar(255) NOT NULL,
                        `year` year(4) NOT NULL,
                        `color` varchar(255) NOT NULL,
                        `transmission` varchar(255) NOT NULL,
                        `driver_assigned` bigint(20) unsigned DEFAULT NULL,
                        UNIQUE KEY `id` (`id`),
                        KEY `driver_assigned` (`driver_assigned`),
                        CONSTRAINT `cars_drives_fk` FOREIGN KEY (`driver_assigned`) REFERENCES `drivers` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";


$db->query($queryCar);

echo 'Created tables. You are ready to use the app.  Happy assigning to me!!!';


$data = json_decode('[{"make":"Pontiac","model":"Gemini","year":1987,"color":"Fuscia","transmission":"Automatic"},
{"make":"Pontiac","model":"Firefly","year":1986,"color":"Pink","transmission":"Manual"},
{"make":"Volkswagen","model":"GTI","year":2009,"color":"Violet","transmission":"Manual"},
{"make":"Cadillac","model":"DTS","year":2008,"color":"Indigo","transmission":"Automatic"},
{"make":"Acura","model":"NSX","year":1996,"color":"Aquamarine","transmission":"Manual"},
{"make":"Scion","model":"xD","year":2008,"color":"Violet","transmission":"Automatic"},
{"make":"Isuzu","model":"Stylus","year":1993,"color":"Maroon","transmission":"Automatic"},
{"make":"Subaru","model":"Leone","year":1989,"color":"Mauv","transmission":"Manual"},
{"make":"Lexus","model":"LX","year":1996,"color":"Mauv","transmission":"Manual"},
{"make":"Mitsubishi","model":"GTO","year":1997,"color":"Purple","transmission":"Automatic"},
{"make":"Ford","model":"Econoline E250","year":1995,"color":"Khaki","transmission":"Manual"},
{"make":"Volvo","model":"S80","year":2002,"color":"Yellow","transmission":"Manual"},
{"make":"GMC","model":"Sierra 2500","year":2003,"color":"Turquoise","transmission":"Manual"},
{"make":"Dodge","model":"Ram Van B350","year":1993,"color":"Turquoise","transmission":"Manual"},
{"make":"Pontiac","model":"Sunfire","year":2002,"color":"Green","transmission":"Automatic"},
{"make":"Mercury","model":"Grand Marquis","year":1984,"color":"Red","transmission":"Automatic"},
{"make":"Acura","model":"MDX","year":2005,"color":"Orange","transmission":"Automatic"},
{"make":"Mitsubishi","model":"3000GT","year":1997,"color":"Yellow","transmission":"Automatic"},
{"make":"Toyota","model":"Previa","year":1995,"color":"Puce","transmission":"Automatic"},
{"make":"GMC","model":"Savana 1500","year":2003,"color":"Crimson","transmission":"Automatic"},
{"make":"Ford","model":"Windstar","year":1997,"color":"Aquamarine","transmission":"Manual"},
{"make":"Dodge","model":"Caravan","year":2006,"color":"Puce","transmission":"Automatic"},
{"make":"Mercedes-Benz","model":"G-Class","year":2004,"color":"Maroon","transmission":"Automatic"},
{"make":"Pontiac","model":"Sunbird","year":1987,"color":"Orange","transmission":"Manual"},
{"make":"GMC","model":"Sierra 3500","year":2007,"color":"Crimson","transmission":"Automatic"},
{"make":"MINI","model":"Clubman","year":2011,"color":"Goldenrod","transmission":"Automatic"},
{"make":"Lotus","model":"Elise","year":2006,"color":"Goldenrod","transmission":"Automatic"},
{"make":"Mazda","model":"Miata MX-5","year":2012,"color":"Yellow","transmission":"Automatic"},
{"make":"Audi","model":"A4","year":2001,"color":"Crimson","transmission":"Automatic"},
{"make":"Lexus","model":"LS","year":2004,"color":"Violet","transmission":"Manual"},
{"make":"Land Rover","model":"Freelander","year":2001,"color":"Yellow","transmission":"Manual"},
{"make":"Chrysler","model":"PT Cruiser","year":2008,"color":"Khaki","transmission":"Manual"},
{"make":"Nissan","model":"Quest","year":2006,"color":"Turquoise","transmission":"Manual"},
{"make":"Chevrolet","model":"Colorado","year":2005,"color":"Purple","transmission":"Manual"},
{"make":"Subaru","model":"Impreza","year":2009,"color":"Pink","transmission":"Manual"},
{"make":"Ford","model":"Expedition","year":2004,"color":"Maroon","transmission":"Manual"},
{"make":"Bentley","model":"Azure","year":2006,"color":"Teal","transmission":"Manual"},
{"make":"Ford","model":"Escape","year":2011,"color":"Goldenrod","transmission":"Automatic"},
{"make":"GMC","model":"2500","year":1999,"color":"Blue","transmission":"Manual"},
{"make":"Pontiac","model":"Parisienne","year":1985,"color":"Khaki","transmission":"Automatic"},
{"make":"Scion","model":"xD","year":2010,"color":"Red","transmission":"Manual"},
{"make":"Pontiac","model":"Firebird","year":1998,"color":"Turquoise","transmission":"Automatic"},
{"make":"Ford","model":"E-Series","year":1986,"color":"Yellow","transmission":"Manual"},
{"make":"Morgan","model":"Aero 8","year":2008,"color":"Goldenrod","transmission":"Automatic"},
{"make":"Mitsubishi","model":"Starion","year":1989,"color":"Aquamarine","transmission":"Automatic"},
{"make":"Mitsubishi","model":"Pajero","year":2006,"color":"Purple","transmission":"Manual"},
{"make":"Hyundai","model":"Tucson","year":2008,"color":"Mauv","transmission":"Automatic"},
{"make":"BMW","model":"M3","year":2003,"color":"Mauv","transmission":"Automatic"},
{"make":"Daihatsu","model":"Rocky","year":1992,"color":"Khaki","transmission":"Automatic"},
{"make":"Mazda","model":"B-Series","year":1996,"color":"Turquoise","transmission":"Manual"}]');


//foreach ($data as $row) {
////    dd($row);
//    $car = new Car($row);
//    dd($car);
//    $carrepository = new CarRepository();
//    $carrepository->create($car);
//}