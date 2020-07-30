<?php

 include_once 'config/database.php';
session_start();
$_SESSION['username'];

$data = $_POST;

if(empty($data[user_name]) || empty($data[password])){
    $_SESSION['messages'][] = 'Connection Failed: ' . $e->getMessage();
    header('Location: index.php');
}
// $password = hash(SHA512,$data[password]);

$username = $data[user_name];
$password = $data[password];

$db->query('USE `matcha`;');
$password = hash(SHA512,$data[password]);
$statement = $db->prepare('SELECT * FROM users WHERE user_name = :user_name');
$statement->execute([':user_name' => $username]);
$result = $statement->fetchAll(PDO::FETCH_ASSOC);

if (empty($result)){
    $_SESSION['messages'][] = 'Incorrect username or password';
    header('Location: login.php');
}

$user = array_shift($result);

if(0 === (int) $user[status]){
    echo "you should confirm your registration first <br/>";
    die('<a href = "login.php"> Go to</a> my account.');
}

if($user[user_name] === $username && $user[password] === $password) {
    echo 'You have successfully logged in!' . "<br/>";
    echo '<a href="./dashboard.php">Go to</a> my account.';
    $_SESSION[user_name] = $user[user_name];
    $_SESSION[username] = $username;

}else{
    $_SESSION['messages'][] = 'Incorrect username or password';
    header('Location: login.php');
}
