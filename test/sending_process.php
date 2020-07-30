<?php 

session_start();
require_once('connection.php');
if(isset($_SESSION['username']) && isset($_GET['user'])){
    if(isset($_POST['text'])){
        if($_POST['text'] !=''){


    $sender_name = $_SESSION['username'];
    $reciever_name = $_GET['user'];
    $message = $_POST['text'];
    $date= date("Y-m-d h:m:s"); 

    $query = "INSERT INTO messages (sender_name,reciever_name,message_text,date_time) VALUES ('{$sender_name}', '{$reciever_name}','{$message}','{$date}')";
    
    $r = mysqli_query($con, $query);

    if($r){

        ?>

        <div class="grey-message">
            <a href="#">Me</a>
            <p><?php echo $message;?> </p>
        </div>

        <?php

    }else{
        echo $query;
    }


    }else{
        echo 'problem with text';
    }
}else{

    echo 'please select a user to send a message';
}
}
?>