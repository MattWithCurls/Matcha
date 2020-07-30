 <?php
    session_start();
    require_once('config/connection.php');
    if(isset($_POST['send'])){
        // print_r($_REQUEST);
        // exit;
        $sender_name = $_SESSION['username'];
        $reciever_name = $_POST['user_name'];
        $message = $_POST['message'];
        $date= date("Y-m-d h:m:s"); 

    //     $q = 'INSERT INTO `messages` (`id`, `sender_name`,`reciever_name`,`message_text`,`date_time`) VALUES ("","'.$sender_name.'", "'.$reciever_name.'","'.$message.'","'.$date.'")';
    //     $r = mysqli_query($con, $q);
    //     if($r){
           
    //         echo "message sent";
    //     }else{
    //         echo $q;
    //         // print_r($con);
    //     }
    // }
    $query = "INSERT INTO messages (sender_name,reciever_name,message_text,date_time) VALUES ('{$sender_name}', '{$reciever_name}','{$message}','{$date}')";
    
    $r = mysqli_query($con, $query);
    if($r){
         echo "message sent";
        // header ("location:chat.php?user=".$reciever_name);
    } else {
        echo $query;
    }
}
?> 

<div id="new-message">
            <p classs="m-header">new message</p>
            <p class="m-body">
                <form align="center" method="POST">
                    <input type="text" list="user" onkeyup="check_in_db()" class="message-input" placeholder="user_name" name="user_name" id="user_name"/>
                    
                    <datalist id="user"></datalist>
                    
                    </br></br>
                    <textarea class="message-input" name="message" placeholder="write message"></textarea></br></br>
                    <input type="submit" value="send" id="send" name="send"/>
                    <button onclick="document.getElementById('new-message').style.display='none'">Cancel</button>
                </form>
            </p>
            <p class="m-footer">click to send</p>
        </div>

<script src="js/jquery-1.10.2.min.js"></script> 

<script>

document.getElementById("send").disabled = true;

function check_in_db()
{
    var user_name = document.getElementById("user_name").value;

    $.post("check_in_db.php",
    {

        user:user_name

    },
    function(data,status){
        //alert(data);
        if(data == '<option value="no user">'){

           document.getElementById("send").disabled = true;

        }else{
            document.getElementById("send").disabled = false;
        }
    }
    );
}
</script>
