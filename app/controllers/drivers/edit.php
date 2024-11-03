<?php



use Core\Validator;
use entities\Driver;
use repository\DriverRepository;

require base_path('Core/Validator.php');
require base_path('Interfaces/IDriverRepository.php');
require base_path('repository/DriverRepository.php');

$constants = require base_path('config.php');

if($_SERVER['REQUEST_METHOD']==='GET'){

    $url = basename($_SERVER['REQUEST_URI']);

    $parts = parse_url($url);
    parse_str($parts['query'], $query);
    $id = $query['id'];

    $driverrepository = new DriverRepository();
    $driver = $driverrepository->getById($id);

    view("drivers/edit.view.php", [
        'heading' => 'Edit Driver',
        'errors' => [],
        'driver' => $driver,
        'constants' => $constants,
    ]);

}

if ($_SERVER['REQUEST_METHOD']==='POST') {

    $errors = [];

    $name = $_POST['name'];
    if (Validator::string($name, 1, 50)) {
        $errors['name'] = 'A drivers name is required';
    }

    $experience = $_POST['experience'];
    if (Validator::string($experience, 1, 3)) {
        $errors['experience'] = 'A drivers experience is required';
    }

    $drivemanual = $_POST['drivemanual'];

    if (!empty($errors)) {

        $cleanName = htmlspecialchars($name);
        $cleanExperience = htmlspecialchars($experience);
        $cleanDriveManual = htmlspecialchars($drivemanual);

        $newDriver = new Driver();
        $newDriver->setName($cleanName);
        $newDriver->setYearsdriving($cleanExperience);
        $newDriver->setDrivemanual($cleanDriveManual);

        $driverrepository = new DriverRepository();
        $driver = $driverrepository->update($newDriver);

        header('location: /drivers');
        die();
    }
}


