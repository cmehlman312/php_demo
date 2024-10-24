<?php

const BASE_PATH = __DIR__.'/../';
require BASE_PATH . 'Core/Database.php';
require BASE_PATH . 'Core/Validator.php';
require BASE_PATH . 'Core/functions.php';

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


echo 'Created tables. You are ready to use the app.  Happy assigning!!!';

