<?php

    $host = "localhost";
    $userName = "root";
    $password = "admin";
    $dbName = "ejercicioPHP";
    
    // Create database connection
    $conn = new mysqli($host, $userName, $password, $dbName);

    // Check connection
    if ($conn->connect_error) {
        die("Conexion fallida: " . $conn->connect_error);
    }
   
?>