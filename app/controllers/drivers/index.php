<?php

use repository\DriverRepository;

require base_path('Interfaces/IDriverRepository.php');
require base_path('repository/DriverRepository.php');

$constants = require base_path('config.php');

$driverrepository = new DriverRepository();
$drivers = $driverrepository->getAll();

view("drivers/index.view.php", [
    'heading' => 'Drivers at your service',
    'drivers' => $drivers
]);