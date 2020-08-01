<?php

    $hostname = "localhost";
    $username = "root";
    $password = "123456";

    try {
        $conn = new PDO("mysql:host=$hostname;dbname=matcha", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Database connected successfully";
    } catch(PDOException $e) {
        echo "Database connection failed: " . $e->getMessage();
    }

?>