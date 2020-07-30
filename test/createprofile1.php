<?php

session_start();
if ($_SESSION[username] && !empty($_SESSION[username]));

?>
<!DOCTYPE html>
<html>

<head>

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
          <a class="dropdown-item" href="#">Log Out</a>
        </div>
      </div>
  </div>

  <a href="createprofile1.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">About Me</a>
  <a href="userimg.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">AddPicture</a>
  <a href="userlocation.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Enter your address</a>
  <form action="gender.php" method="post" >
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
        <option>South Africa</option>
        <option>Germany</option>
        <option>Russia</option>
        <option>Nigeria</option>
        <option>USA</option>
        <option>Canada</option>
        <option>Sweden</option>
        <option>Serbia</option>
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
    

    <input type="submit" name="submit" value="submit" class="btn btn-info" />

  </form>
</body>

</html>





