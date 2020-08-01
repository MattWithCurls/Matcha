<?php

session_start();
if ($_SESSION['user_name'] && !empty($_SESSION['user_name']));

    $msg = "";
    $css_class = ""; 

    $conn = mysqli_connect('localhost','root','123456','matcha');

    if (isset($_POST['save-user'])){
        $bio = $_POST['bio'];
        $gender = $_POST['gender'];
        $preferences = $_POST['preferences'];
        $age = $_POST['age'];
        $country = $_POST['country'];
        $interests = $_POST['interests'];

        $profileImageName = time() . '_' . $_FILES['profileImage']['name'];

        $target = 'images/' . $profileImageName;

        if(move_uploaded_file($_FILES['profileImage']['tmp_name'], $target)){
            $sql = "INSERT INTO test (bio,gender,preferences,age,country,interests,profile_image) VALUES ('$bio','$gender','$preferences','$age','$country','$interests','$profileImageName')";
            if(mysqli_query($conn,$sql)){
                $msg = "Image uploaded";
                $css_class = "alert-success";
            }else{
                $msg = "Database error:Failed to save user";
                $css_class = "alert-danger";
            }
        }else{
            $msg = "Failed to upload";
            $css_class = "alert-danger";
        }


    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert Image in MySql using PHP</title>
    

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
          <!-- <a class="dropdown-item" href="#">Edit Profile</a> -->
          <a class="dropdown-item" href="logout.php">Log Out</a>
        </div>
      </div>
  </div>

  <a href="example.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">About Me</a>
  <!-- <a href="imgupload.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">AddPicture</a> -->
  <a href="userlocation.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Enter your address</a>

<form action="" method="post" enctype="multipart/form-data">

<h1>Gender</h1>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Male" name="gender">
      <label class="form-check-label" for="inlineCheckbox1">Male</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Female" name="gender">
      <label class="form-check-label" for="inlineCheckbox2">Female</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Trans Women" name="gender">
      <label class="form-check-label" for="inlineCheckbox2">Trans Women</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Trans Man" name="gender">
      <label class="form-check-label" for="inlineCheckbox2">Trans Man</label>
    </div>

    <br>
    <h1>Looking for</h1>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Male" name="preferences">
      <label class="form-check-label" for="inlineCheckbox1">Male</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Female" name="preferences">
      <label class="form-check-label" for="inlineCheckbox2">Female</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Trans Women" name="preferences">
      <label class="form-check-label" for="inlineCheckbox2">Trans Women</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Trans Man" name="preferences">
      <label class="form-check-label" for="inlineCheckbox2">Trans Man</label>
    </div>



    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1">Country</label>
      <select class="form-control" id="exampleFormControlSelect1" name="country">
      <option >Select Country</option>
              <option> Afghanistan</option>
              <option> Åland</option>
              <option> Albania</option>
              <option>Algeria</option>
              <option>American Samoa</option>
              <option> Andorra</option>
              <option> Angola</option>
              <option> Anguilla</option>
              <option> Antarctica</option>
              <option> Antigua and Barbuda</option>
              <option> Argentina</option>
              <option> Armenia</option>
              <option> Aruba</option>
              <option> Australia</option>
              <option>  Austria</option>
              <option> Azerbaijan</option>
              <option> Bahamas</option>
              <option> Bahrain</option>
              <option>Bangladesh</option>
              <option>  Barbados</option>
              <option> Belarus</option>
              <option> Belgium</option>
              <option>Belize</option>
              <option>Tuvalu</option>
              <option> U.S. Minor Outlying Islands</option>
              <option> U.S. Virgin Islands</option>
              <option> Uganda</option>
              <option> Ukraine</option>
              <option> United Arab Emirates</option>
              <option> United Kingdom</option>
              <option> United States</option>
              <option> Uruguay</option>
              <option> Uzbekistan</option>
              <option> Vanuatu</option>
              <option> Vatican City</option>
              <option> Venezuela</option>
              <option> Vietnam</option>
              <option> Wallis and Futuna</option>
              <option> Western Sahara</option>
              <option> Yemen</option>
              <option> Zambia</option>
              <option>  Zimbabwe</option>
      </select>
    </div>


    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1">Age</label>
      <select class="form-control" id="exampleFormControlSelect1" name="age">
        <option>18</option>
        <option>19</option>
        <option>20</option>
        <option>21</option>
        <option>22</option>
        <option>23</option>
        <option>24</option>
        <option>25</option>
        <option>26</option>
        <option>27</option>
        <option>28</option>
        <option>29</option>
        <option>30</option>
      </select>
    </div>

    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1">Interests</label>
      <select class="form-control" id="exampleFormControlSelect1" name="interests">
        <option>coder</option>
        <option>fitness</option>
        <option>vegan</option>
        <option>geek</option>
      </select>
    </div>


    <div class="form-group col-md-6">
      <label for="exampleFormControlTextarea1">About Me</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="bio"></textarea>
    </div>

    <div class="form-group">
        <img src="images/placeholder" id="profileDisplay">
        <label for= "profileImage">Profile Image</label>
        <input type="file" name="profileImage" id="profileImage" style="display: none;">
    </div>

    <div class="form-group">
        <button type="submit" name="save-user" class="btn btn-primary btn-block">Save user</div>
    </div>
</form>

</body>
</html>