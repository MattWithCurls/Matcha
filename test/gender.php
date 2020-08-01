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

           
            $query = "INSERT INTO userdetails (gender,preferences,age,bio,interests,country) VALUES (:gender,:preferences,:age,:bio,:interests,:country)";
            $statement = $conn->prepare($query);
            $statement->execute(
                array(
                    'gender' => $_POST["gender"],
                    'country' => $_POST["country"],
                    'preferences' => $_POST["preferences"],
                    'age' => $_POST["age"],
                    'bio' => $_POST["bio"],
                    'interests' => $_POST["interests"]
                )
                );
                $count = $statement->rowCount();
                if($count > 0)
                {
                    header('createprofile1.php');
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