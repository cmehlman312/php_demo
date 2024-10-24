<?php

use Core\Validator;

require base_path('Core/Database.php');
require base_path('Core/Validator.php');

$config = require base_path('config.php');
$db = new Database($config['database']);

if($_SERVER['REQUEST_METHOD']==='GET'){

    $url = basename($_SERVER['REQUEST_URI']);

    $parts = parse_url($url);
    parse_str($parts['query'], $query);
    $id = $query['id'];

    $query = "SELECT * FROM drivers WHERE id = :id";
    $params = array('id' => $id);
    $driver = $db->querywithparams($query, $params)->fetch();

    view("drivers/edit.view.php", [
        'heading' => 'Edit Driver',
        'errors' => [],
        'driver' => $driver,
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

        $query = "UPDATE drivers SET name=:name, experience=:experience, drivemanual=:drivemanual WHERE id = :id";
        $params = array('name'=> $cleanName, 'experience'=>$cleanExperience, 'drivemanual'=>$cleanDriveManual, 'id'=>$_POST['id'] );
        $db->querywithparams($query, $params);

        header('location: /drivers');
        die();
    }
}


