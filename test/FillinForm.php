<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Image Preview and Upload PHP</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="main.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-4 offset-md-4 form-div">
        <form action="processform.php" method="post" enctype="multipart/form-data">
          <h2 class="text-center mb-3 mt-3">Profile Form</h2>
          <div class="form-group text-center" style="position: relative;" >
            <span class="img-div">
              <div class="text-center img-placeholder"  onClick="triggerClick()">
                <h4>Update image</h4>
              </div>
              <img src="samples/avatar2.png" onClick="triggerClick()" id="profileDisplay">
            </span>
            <input type="file" name="profilepic" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
            <label>Profile Image</label>
          </div>
          <div class="form-group">
            <label>Bio</label>
            <textarea name="bio" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Gender</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option name="gender">Male</option>
              <option name="gender">Female</option>
              <option name="gender">Trans Man</option>
              <option name="gender">Trans Female</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Age</label>
            <select class="form-control" id="exampleFormControlSelect1" name="age">
              <option name="age">18</option>
              <option name="age">19</option>
              <option name="age">20</option>
              <option name="age">21</option>
              <option name="age">22</option>
              <option name="age">23</option>
              <option name="age">24</option>
              <option name="age">25</option>
              <option name="age">26</option>
              <option name="age">27</option>
              <option name="age">28</option>
              <option name="age">29</option>
              <option name="age">30</option>
              <option name="age">31</option>
              <option name="age">32</option>
              <option name="age">33</option>
              <option name="age">34</option>
              <option name="age">35</option>
              <option name="age">36</option>
              <option name="age">37</option>
              <option name="age">38</option>
              <option name="age">39</option>
              <option name="age">40</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Interests</label>
            <select class="form-control" id="exampleFormControlSelect1" >
              <option name="interests">Vegan</option>
              <option name="interests">Coder</option>
              <option name="interests">Fitness</option>
              <option name="interests">Geek</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1"> Sexual Preference</label>
            <select class="form-control" id="exampleFormControlSelect1" >
              <option name="preferences">Bisexual</option>
              <option name="preferences">Heterosexual</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Country</label>
            <select class="form-control" id="exampleFormControlSelect1" >
              <option name="country">Select Country</option>
              <option name="country"> Afghanistan</option>
              <option name="country"> Åland</option>
              <option name="country"> Albania</option>
              <option name="country">Algeria</option>
              <option name="country">American Samoa</option>
              <option name="country"> Andorra</option>
              <option name="country"> Angola</option>
              <option name="country"> Anguilla</option>
              <option name="country"> Antarctica</option>
              <option name="country"> Antigua and Barbuda</option>
              <option name="country"> Argentina</option>
              <option  name="country"> Armenia</option>
              <option name="country"> Aruba</option>
              <option name="country"> Australia</option>
              <option name="country">  Austria</option>
              <option name="country"> Azerbaijan</option>
              <option name="country"> Bahamas</option>
              <option name="country"> Bahrain</option>
              <option name="country">Bangladesh</option>
              <option name="country">  Barbados</option>
              <option name="country"> Belarus</option>
              <option name="country"> Belgium</option>
              <option name="country">Belize</option>
              <option name="country">Tuvalu</option>
              <option name="country"> U.S. Minor Outlying Islands</option>
              <option name="country"> U.S. Virgin Islands</option>
              <option name="country"> Uganda</option>
              <option name="country"> Ukraine</option>
              <option name="country"> United Arab Emirates</option>
              <option name="country"> United Kingdom</option>
              <option name="country"> United States</option>
              <option name="country"> Uruguay</option>
              <option name="country"> Uzbekistan</option>
              <option name="country"> Vanuatu</option>
              <option name="country"> Vatican City</option>
              <option name="country"> Venezuela</option>
              <option name="country"> Vietnam</option>
              <option name="country"> Wallis and Futuna</option>
              <option name="country"> Western Sahara</option>
              <option name="country"> Yemen</option>
              <option name="country"> Zambia</option>
              <option name="country">  Zimbabwe</option>
                  </select>
          </div>
          <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
<script src="script.js"></script>