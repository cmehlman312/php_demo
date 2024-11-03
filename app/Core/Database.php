<?php

namespace Core;

use PDO;

class Database{

    public PDO $connection;

    public function __construct($config){

        $dsn = 'mysql:'. http_build_query($config,'',';');

        $this->connection = new PDO($dsn, 'root', 'secrets!!', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);

    }

    // query usage examples
    // Multiple rows returned
    //      example call  $post = $db->query("select * from posts)->fetchAll();
    // Single roq returned
    //      example call  $post = $db->query("select * from posts where id = 1)->fetch();
    public function query($query){
        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement;
    }

    public function querywithparams($query,$params){
        $statement = $this->connection->prepare($query);
        $statement->execute($params);
        return $statement;
    }

}