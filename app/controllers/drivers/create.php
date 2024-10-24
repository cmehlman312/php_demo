<?php

use Core\Validator;

require base_path('Core/Database.php');
require base_path('Core/Validator.php');

$config = require base_path('config.php');
$db = new Database($config['database']);


if ($_SERVER['REQUEST_METHOD']==='POST'){

    $errors=[];

    $name = $_POST['name'];
    if(Validator::string($name,1,50)){
        $errors['make']='A drivers name is required';
    }

    $experience = $_POST['experience'];
    if(Validator::string($experience,1,5)){
        $errors['model']='Experience is required';
    }

//    $drivemanual =filter_var($_POST['drivemanual'], FILTER_VALIDATE_BOOLEAN);
    $drivemanual =$_POST['drivemanual'];
//    dd($drivemanual);


    if(!empty($errors)){

        $cleanName= htmlspecialchars($name);
        $cleanExperience= htmlspecialchars($experience);
//        $cleanDriveManual= htmlspecialchars($drivemanual);

        $query = "INSERT INTO drivers(name, experience, drivemanual) VALUES(:name,:experience,:drivemanual)";
        $params = array('name'=>$cleanName, 'experience'=>$cleanExperience, 'drivemanual'=>$drivemanual);

//        dd($params);

        $db->querywithparams($query, $params);

        header('location: /drivers');
        die();
    }

}

view("drivers/create.view.php", [
    'heading' => 'Create Driver',
    'errors' => []
]);