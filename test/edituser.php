<html>

<head>
    <title>USer update</title>
    <style>

        input {
            width: 40%;
            height: 5%;
            border: 1px;
            border-radius: 05px;
            padding: 8px 15px 8px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px grey;
        }
    </style>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="css/form.css">
</head>

<body>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
<h5> <a class="my-0 mr-md-auto font-weight-normal" href="dashboard.php">Matcha</h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark" href="#">Features</a>
      <a class="p-2 text-dark" href="#">Enterprise</a>
      <a class="p-2 text-dark" href="#">Support</a>
      <a class="p-2 text-dark" href="#">Pricing</a>
      <div class="btn-group">
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          My Profile
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Visits</a>
          <button type="button" class="btn btn-primary">
            Notifications <span class="badge badge-light">4</span>
          </button>
          <button type="button" class="btn btn-primary">
            Messages <span class="badge badge-light">4</span>
          </button>
          <a class="dropdown-item" href="#">Who Liked Me</a>
           <a class="dropdown-item" href="edituser.php">Edit Profile</a> 
          <a class="dropdown-item" href="#">Log Out</a>
        </div>
      </div>
  </div>

  <a href="editaboutme.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">About Me</a>
  <a href="edituser.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Parameters</a>
  <a href="userlocation.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Change Location</a>


  <br/>


    <center>

        <form action="" method="POST">
            <input type="text" name="firstname" placeholder="first name" />
            <input type="text" name="lastname" placeholder="last name" />
            <input type="text" name="user_name" placeholder="username" />
            <input type="text" name="email" placeholder="email" />

            <input type="submit" name="update" value="save changes"/>

        </form>
    </center>
</body>

</html>


<?php

session_start();
if ($_SESSION[user_name] && !empty($_SESSION[user_name]));

$connection = mysqli_connect("localhost","root","123456");
$db = mysqli_select_db($connection,'matcha');

if(isset($_POST['update'])){
    $firstname = $_POST['firstname'];

    $query = "UPDATE `users` SET firstname='$_POST[firstname]',lastname='$_POST[lastname]',email='$_POST[email]',user_name='$_POST[user_name]' ";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        echo'succes';
    }
}
?>
