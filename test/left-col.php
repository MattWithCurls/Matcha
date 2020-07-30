<div id="left-col-container">
        <div style="cursor:pointer" onclick="document.getElementById('new-message').style.display='block'" class="white-back">
            <p align="center">New Message</p>
                   
        </div>


<?php 
//remove if needed
    session_start();
    $name = $_SESSION['username'];

    $query = "SELECT DISTINCT reciever_name,sender_name FROM messages WHERE sender_name = '".$name."'
    OR reciever_name = '".$name."' ";

    $r = mysqli_query($con, $query);
    if($r){
        if(mysqli_num_rows($r)>0){

            $counter = 0;
            $added_user = array();
            while($row = mysqli_fetch_assoc($r)) {
                $sender_name = $row['sender_name'];
                $reciever_name = $row['reciever_name'];

                if($name == $sender_name){

                    if(in_array($reciever_name,$added_user)){
                        

                    }else{
                        //reciever name

                        ?>
                        <div class="grey-back">
                                <img src="samples/avatar2.png" class="image" />
                                            <?php echo '<a href="?user='.$reciever_name.'">'.$reciever_name.'</a>';?>
                            </div>
                        <?php

                            $added_user = array($counter => $reciever_name);
                            //increment the counter
                            $counter++;


                    }

                }else if($name == $reciever_name){

                    if(in_array($sender_name,$added_user)){
                        

                    }else{
                        //sender_name name

                        ?>
                        <div class="grey-back">
                                <img src="samples/avatar2.png" class="image" />
                                            <?php echo '<a href="?user='.$sender_name.'">'.$sender_name.'</a>';?>
                            </div>
                        <?php

                            $added_user = array($counter => $sender_name);
                            //increment the counter
                            $counter++;


                    }

                }


                }
        }else{
            echo 'no user';

        }

        }else{
            echo $query;
        }
    

?>







        
</div>