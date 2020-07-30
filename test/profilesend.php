<?php

 include_once 'config/database.php';

session_start();

$data = $_POST;

if (empty($data[gender]) ||
    empty($data[preferences]) ||
    empty($data[bio]) ||
    empty($data[age]) || 
    empty($data[interests])) {

                
               
    }
        $db->query('USE `matcha`;');
        $statement = $db->prepare('INSERT INTO userdetails (gender,preferences,age,bio,interests) VALUES (:gender,:preferences,:age,:bio,:interests)');
        if ($statement) {
            $result = $statement->execute([
                ':gender' => $data[gender],
                ':age' => $data[age],
                ':preferences' => $data[preferences],
                ':bio' => $data[bio],
                ':interests' => $data[interests],
            ]);
        }

        
        