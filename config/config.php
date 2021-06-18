<?php
    session_start();
    $servidor = "mysql:dbname=tweets;host=localhost";
    $user= "root";
    $pass = "";

    try {
        $conn = new PDO($servidor, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    } catch (PDOException $ex) {
        echo "ERROR EN LA CONEXION: ".$ex->getMessage();
    }



?>