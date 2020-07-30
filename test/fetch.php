<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=matcha", "root", "123456");

$output = '';

$query = '';

if(isset($_POST["query"]))
{
 $search = str_replace(",", "|", $_POST["query"]);
 $query = "
 SELECT * FROM users INNER JOIN userdetails ON users.user_id = userdetails.user_det_id '".$search."' 
";
}
else
{
 $query = "
 SELECT * FROM users INNER JOIN userdetails ON users.user_id = userdetails.user_det_id ORDER BY user_id
 ";
}

$statement = $connect->prepare($query);
$statement->execute();

while($row = $statement->fetch(PDO::FETCH_ASSOC))
{
 $data[] = $row;
}

echo json_encode($data);

?>