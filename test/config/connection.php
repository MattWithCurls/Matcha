<?php
    //$con = mysqli_connect("localhost", "root", "123456", "matcha");

    
        //  $dbhost = 'localhost';
        //  $dbuser = 'root';
        //  $dbpass = '123456';
        //  $dbname = "matcha";
        //  $con = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
        //  if(! $con ){
        //     die('Could not connect: ' . mysqli_error());
        //  }
        //  echo 'Connected successfully';
        //  mysqli_close($con);
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '123456';
        $dbname = "matcha";
        $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        
        if (!$con) {
            die('Could not connect: ' . mysqli_error());
        } 
    

?> 