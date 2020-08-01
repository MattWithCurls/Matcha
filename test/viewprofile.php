<?php
session_start();
if ($_SESSION['user_name'] && !empty($_SESSION['user_name']));
?>

<html>
<head>
    <title><?php echo $firstname;?> <?php echo $lastname;?>s Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
<h5> <a class="my-0 mr-md-auto font-weight-normal" href="dashboard.php">Matcha</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="#">Features</a>
    <a class="p-2 text-dark" href="#">Enterprise</a>
    <a class="p-2 text-dark" href="#">Support</a>
    <a class="p-2 text-dark" href="#">Pricing</a>
    <div class="btn-group">
      <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      My Profile
      </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Visits</a>
      <a class="dropdown-item" href="chat.php">Chat</a>
      <button type="button" class="btn btn-primary">
        Notifications <span class="badge badge-light">4</span>
      </button>
      <button type="button" class="btn btn-primary">
        Messages <span class="badge badge-light">4</span>
      </button>
      <a class="dropdown-item" href="#">Who Liked Me</a>
      <a class="dropdown-item" href="editaboutme.php">Edit Profile</a>
      <a class="dropdown-item" href="logout.php">Log Out</a>
    </div>
</div>
</div>


   
</head>
<body>

        <?php
            if (isset($_GET['user_name'])){
                $username = $_GET['user_name'];
                $db = new PDO("mysql:host=localhost;dbname=matcha", "root", "123456");
                
               $query = "SELECT * FROM users INNER JOIN  userdetails ON users.user_id = userdetails.user_det_id WHERE user_name='$username'";
               
               $result = $db->query($query);
                while($row = $result->fetch (PDO::FETCH_ASSOC)){
                    
                    $firstname = $row['firstname'];
                    $lastname = $row['lastname'];
                    $dbusername = $row['user_name']; 
                    $age = $row['age'];
                    $gender = $row['gender'];
                    $bio = $row['bio'];
                    $interests = $row['interests'];
                    $country = $row['country'];
                    $preferences = $row['preferences'];
                    // $image = $row['userprofilepic'];
                    $lastlogin = $row['loginTime'];
                    $username = $row['user_name'];
                    $user_id = $row['user_id'];
                    $image = $row['userprofilepic'];

                }
                // $result->closeCursor();
                // $db = null;

                // if($username !=$dbusername){
                //     die ("there has been an error");
                // }
                // if($status == 0){
                //     $stat = "the account is not active";
                // }else{
                //     $stat = "account is active";

                // }
               

                ?>

                <h2><?php echo  $firstname;?> <?php echo $lastname;?> s profile</h2><br/>
                    <table>
                        <tr><td>Picture:</td><td><?php echo "<td><img src='data:image/jpg;base64,".base64_encode($image['userprofilepic'])."'/></td>";;?></td></tr>
                      
                        <tr><td>Firstname:</td><td><?php echo $firstname;?></td></tr>
                        
                        <tr><td>Lastname:</td><td><?php echo $lastname;?></td></tr>
                        
                        <tr><td>Username:</td><td><?php echo $dbusername;?></td></tr>
                        
                        <tr><td>Age:</td><td><?php echo $age;?></td></tr>
                        
                        <tr><td>Gender:</td><td><?php echo $gender;?></td></tr>
                        
                        <tr><td>Bio:</td><td><?php echo $bio;?></td></tr>
                        
                        <tr><td>interests:</td><td><?php echo $interests;?></td></tr>
                        
                        <tr><td>Country:</td><td><?php echo $country;?></td></tr>
                        
                        <tr><td>Preferences:</td><td><?php echo $preferences;?></td></tr>
                        
                        <tr><td>Last Activity:</td><td><?php echo $lastlogin;?></td></tr>
			    
			    <tr><td>viewed:</td><td><?php  session_start(); 
                        if(isset($_SESSION['views'])) 
                            $_SESSION['views'] = $_SESSION['views']+1; 
                        else
                            $_SESSION['views']=1; 
        
                            echo"views = ".$_SESSION['views']; ?> </td></tr>
                        
                        <tr><td>Rate User:</td><td><div align="center" style="background: #ffffff ; padding: 50px;color:white;">
                                <i class="fa fa-star fa-2x" data-index="0"></i>
                                <i class="fa fa-star fa-2x" data-index="1"></i>
                                <i class="fa fa-star fa-2x" data-index="2"></i>
                                <i class="fa fa-star fa-2x" data-index="3"></i>
                                <i class="fa fa-star fa-2x" data-index="4"></i>
                                <br><br>
                                <?php echo round($avg,2) ?>
                            </div></td></tr>
                            
                            <br/>

                        <tr><td>Like:</td><td><div class="bs-example">
	
                      <button type="button" class="btn btn-primary show-toast">Like</button>
                        <div class="toast" id="myToast" style="position: absolute; top: 0; right: 0;">
                            <div class="toast-header">
                                <strong class="mr-auto"><i class="fa fa-grav"></i> Notification</strong>
                                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="toast-body">
                                <div>you liked the user now you can chat with <?php echo $username?>.</div>
                            </div></td></tr>

                                            <div class="bs-example">
	
	
                        

                    </table>
            <?php
            }else "you need to specify username";

        ?>

</body>
</html>

<script>
    $(document).ready(function(){
        $(".show-toast").click(function(){
            $("#myToast").toast('show');
        });
    });
    var ratedIndex = -1, uID = 0;

        $(document).ready(function () {
            resetStarColors();

            if (localStorage.getItem('ratedIndex') != null) {
                setStars(parseInt(localStorage.getItem('ratedIndex')));
                uID = localStorage.getItem('uID');
            }

            $('.fa-star').on('click', function () {
               ratedIndex = parseInt($(this).data('index'));
               localStorage.setItem('ratedIndex', ratedIndex);
               saveToTheDB();
            });

            $('.fa-star').mouseover(function () {
                resetStarColors();
                var currentIndex = parseInt($(this).data('index'));
                setStars(currentIndex);
            });

            $('.fa-star').mouseleave(function () {
                resetStarColors();

                if (ratedIndex != -1)
                    setStars(ratedIndex);
            });
        });

        function saveToTheDB() {
            $.ajax({
               url: "rateuser.php",
               method: "POST",
               dataType: 'json',
               data: {
                   save: 1,
                   uID: uID,
                   ratedIndex: ratedIndex
               }, success: function (r) {
                    uID = r.id;
                    localStorage.setItem('uID', uID);
               }
            });
        }

        function setStars(max) {
            for (var i=0; i <= max; i++)
                $('.fa-star:eq('+i+')').css('color', 'gold');
        }

        function resetStarColors() {
            $('.fa-star').css('color', 'silver');
        }
    </script>


</script>


