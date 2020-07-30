
<div id="right-col-container">
    <div id="messages-container">

    <?php 

        $no_messsage = false;
        if(isset($_GET['user'])){
            $_GET['user'] = $_GET['user'];
        }else{
        
            $query = "SELECT * FROM messages WHERE sender_name = '".$_SESSION['username']."' 
            OR reciever_name = '".$_SESSION['username']."' ORDER BY date_time DESC LIMIT 1";

            $r = mysqli_query($con,$q);
            if ($r){
                if (mysqli_num_rows($r)>0){
                    while($row=mysqli_fetch_assoc($r)){
                        $sender_name = $row['sender_name'];
                        $reciever_name = $row['reciever_name'];

                        if($_SESSION['username'] == $sender_name){
                            $_GET['user'] = $reciever_name;
                        }else{
                            $_GET['user'] = $sender_name;
                    }
                }

                }else{
                    echo 'no message from you';
                    $no_messsage = true;

                }
            }else{
                echo $query;

            }
        }
            
$name = $_SESSION['username'];

if($no_messsage == false){

$query= "SELECT * FROM messages WHERE sender_name = '".$name."'
 OR
 reciever_name = '".$name."'";



                    $r = mysqli_query($con, $query);
                        if($r){
                                while($row = mysqli_fetch_assoc($r)){
                                    $sender_name = $row['sender_name'];
                                    $reciever_name = $row['reciever_name'];
                                    $message = $row['message_text'];

                                    if($sender_name == $_SESSION['username']){
                                ?>

                                <div class="grey-message">
                                    <a href="#">Me</a>
                                    <p><?php echo $message;?> </p>
                                </div>

                                <?php
                        }else{

                            ?>
                                <div class="white-message">
                                    <a href="#"><?php echo $sender_name;?></a>
                                    <p><?php echo $message;?></p>
                                </div>
                            
                            <?php 
                        }
                        }
                    }else{
                        
                        echo 'not selected';
                    }
                }
    ?>
        <!-- <div class="grey-message">
            <a href="#">Me</a>
            <p>this is grey back maessage</p>
        </div> -->

        <!-- <div class="white-message">
            <a href="#">You</a>
            <p>message show white for back</p>
        </div> -->
    </div>
    <form method="post" id="message-form">
        <textarea class="textarea" id="message_text" placeholder="write message"></textarea>
    </form>
</div>

<script src="js/jquery-1.10.2.min.js"></script>
<script>
    $("document").ready(function(event){

        $('#right-col-container').on('submit','#message-form',function(){
            var message_text = $("#message_text").val();
            $.post("sending_process.php=<?php echo $_GET['user'];?>",
            {
                    text:message_text,
            },
            function(data,status){
                alert(data); 
                $("#message_text").val("");

                document.getElementById("messages-container").innerHTML += data;

             }
            );
        });

        $('#right-col-container').keypress(function(e){
            if(e.keyCode == 13 && !e.shiftKey){
                $("#message-form").submit();

            }
        });
    });

</script>
