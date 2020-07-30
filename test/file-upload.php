<?php 

$hostname = "localhost";
$username = "root";
$password = "123456";
$database = "matcha";

try{
    $con = new PDO("mysql:host=$hostname;dbname=$database",$username,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_POST['submit'])) 

{ 

$folder ="uploads/"; 

$profilepic = $_FILES['profilepic']['name']; 

$path = $folder . $profilepic; 

$target_file=$folder.basename($_FILES["profilepic"]["name"]);


$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);


$allowed=array('jpeg','png' ,'jpg'); $filename=$_FILES['profilepic']['name']; 

$ext=pathinfo($filename, PATHINFO_EXTENSION); if(!in_array($ext,$allowed) ) 

{ 

 echo "Sorry, only JPG, JPEG, PNG & GIF  files are allowed.";

}

else{ 

move_uploaded_file( $_FILES['profilepic'] ['tmp_name'], $path); 

$sth=$con->prepare("insert into userdetails(profilepic)values(:profilepic) "); 

$sth->bindParam(':profile',$profilepic); 

$sth->execute(); 

} 
} 
}
catch(PDOException $error){
    echo $error->getMessage();
}

?>