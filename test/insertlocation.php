<?php
    $hostname = "localhost";
    $username = "root";
    $password = "123456";
    $database = "matcha";

    try{
        $conn = new PDO("mysql:host=$hostname;dbname=$database",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if(isset($_POST["submit"]) )
        {

           
            $query = "INSERT INTO locations (address) VALUES (:address)";
            $statement = $conn->prepare($query);
            $statement->execute(
                array(
                    'address' => $_POST["address"]
                    
                )
                );
                $count = $statement->rowCount();
                if($count > 0)
                {
                    echo 'insert success';
                }
                else
                {
                    echo "Data Insert Failed";

                }
            }
        }
    catch(PDOException $error)
    {
        echo $error->getMessage();
    }
?>