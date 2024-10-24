<?php


require base_path('Core/Database.php');
$config = require base_path('config.php');
$db = new Database($config['database']);

//dd($_SERVER);

if($_SERVER['REQUEST_METHOD']==='GET'){
    $url = basename($_SERVER['REQUEST_URI']);

    $parts = parse_url($url);
    parse_str($parts['query'], $query);
    $id = $query['id'];

    $query = "UPDATE cars SET driver_assigned=null WHERE id = :id";
    $params = array('id'=>$id );
    $db->querywithparams($query, $params);


    header('location: /assignments');
    exit();
}

