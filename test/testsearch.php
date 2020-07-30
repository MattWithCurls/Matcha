<?php
session_start();
if ($_SESSION[user_name] && !empty($_SESSION[user_name]));

?>



<html>
    <head>
        <title>user search</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


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
        <h2>search for user below</h2><br/><br/>
    <form action="viewprofile.php" method="GET">
        <table>
            <tr><td>Username:</td><td><input type="text" id="user_name" name="user_name"></td></tr>
            <tr><td><input type="submit" id="submit" name="submit" value="View Profile"></td></tr>
        </table>
    </form>
    </body>
    </html>
