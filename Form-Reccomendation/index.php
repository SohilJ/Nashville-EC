<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Nashville Entrepruener Center</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-white static-top">
        <div class="container">
            <a class="navbar-brand"><img src="Logo.png" class="logo" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" style=" color: darkblue ; font-weight: bold" href="#">
                            Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style=" color: darkblue ; font-weight: bold" href="#">PROGRAMS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style=" color: darkblue ; font-weight: bold" href="#">MEMEBRSHIP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style=" color: darkblue ; font-weight: bold" href="#">EVENTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style=" color: darkblue ; font-weight: bold" href="#">SUPPORT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style=" color: darkblue ; font-weight: bold" href="about.html"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style=" color: rgb(255, 0, 76) ; font-weight: bold" href="form.html">How can we help?</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

            <!-- Page Content -->
            <div class="container">
                <div class="row">
                    <div class="form">
                        <div class="registration">
                        <h1>FORM</h1>
                        <!--FORM-->
                        <form action="db_connect.php" method="GET">
                  
                            <!--First & Last Name-->
                            <div class="row">
                              <div class="col">
                                <label for="firstName">First Name</label>
                                <input type="text" name="first" class="form-control" placeholder="First name">
                              </div>
                              <div class="col">
                                <label for="lastName">Last Name</label>
                                <input type="text" name ="last" class="form-control" placeholder="Last name">
                              </div>
                            </div>

                              <!--Email-->
                                <label for="inputEmail">Email</label>
                                <input type="email" name="email" class="form-control" id="inputEmail">
                              </div>
                              <!--Stage of business-->
                              <div>
                                <label for="inputStage">What stage of business are you in?</label>
                                <select id="inputStage" class="form-control" name="businessStage">
                                  <option selected>Choose...</option>
                                  <option value="Just an Idea">Just an Idea</option>
                                  <option value = "Pre-Revenue">Pre-Revenue</option>
                                  <option value = "Annual Revenue Less than $25k">Annual Revenue Less than $25k</option>
                                  <option value = "Annual Revenue $25k-$100k">Annual Revenue $25k-$100k</option>
                                  <option value = "Annual Revenue $100k-$250k" >Annual Revenue $100k-$250k</option>
                                  <option value = "Annual Revenue More Than $250k">Annual Revenue More Than $250k</option>
                                </select>
                              </div>
                              <!--Company Name-->
                              <div class="form-group">
                                <label for="companyName">What is the name of your company/concept? (If you don't have a name yet, please put N/A)</label>
                                <input type="text" name ="companyName" class="form-control" placeholder="Last name">
                              </div>
                              <!--Description-->
                              <div class="form-group">
                                <label for="companyDescription">Please provide a brief description of your business.</label>
                                <textarea class="form-control" name="companyDescription" rows="3"></textarea>
                              </div>
                              
                              
                            </div>
                        </div>
                        
                        
                          <!--------------------------------------->

                          <!--What industry is your business in? [MULTISELECT]-->
                          <div class="row">
                            <div class="col-4">

                              <div class="form-group">
                                <label class="control-label" for="checkboxes" name="industry">What industry is your business in?</label>
                                
                                <div class="checkbox">
                                  <label for="checkboxes-0">
                                    <input type="hidden" name="Arts" value="0">
                                    <input type="checkbox" name="Arts" id="checkboxes-0" value="1">
                                    Arts
                                  </label>
                                  </div>
                                <div class="checkbox">
                                  <label for="checkboxes-1">
                                    <input type="hidden" name="ConsumerGoods" value="0">
                                    <input type="checkbox" name="ConsumerGoods" id="checkboxes-1" value="1">
                                    Consumer Goods/Retail
                                  </label>
                                  </div>
                                <div class="checkbox">
                                  <label for="checkboxes-2">
                                    <input type="hidden" name="Financial" value="0">
                                    <input type="checkbox" name="Financial" id="checkboxes-2" value="1">
                                    Financial Services
                                  </label>
                                  </div>
                                <div class="checkbox">
                                  <label for="checkboxes-3">
                                    <input type="hidden" name="FoodBeverage" value="0">
                                    <input type="checkbox" name="FoodBeverage" id="checkboxes-3" value="1">
                                    Food & Beverage
                                  </label>
                                  </div>
                                <div class="checkbox">
                                  <label for="checkboxes-4">
                                    <input type="hidden" name="Healthcare" value="0">
                                    <input type="checkbox" name="Healthcare" id="checkboxes-4" value="1">
                                    Healthcare
                                  </label>
                                  </div>
                                <div class="checkbox">
                                  <label for="checkboxes-5">
                                    <input type="hidden" name="MusicEntertainment" value="0">
                                    <input type="checkbox" name="MusicEntertainment" id="checkboxes-5" value="1">
                                    Music & Entertainment
                                  </label>
                                  </div>
                                <div class="checkbox">
                                  <label for="checkboxes-6">
                                    <input type="hidden" name="Technology1" value="0">
                                    <input type="checkbox" name="Technology1" id="checkboxes-6" value="1">
                                    Technology
                                  </label>
                                  </div>

                              </div>

                            </div>
                            <!--How would you classify your business? [MULTISELECT]-->
                            <div class="col-4">

                              <div class="form-group">
                                <label class="control-label" for="checkboxes">How would you classify your business?</label>
                                
                                <div class="checkbox">
                                  <label for="checkboxes-0">
                                    <input type="hidden" name="Nonprofit" value="0">
                                    <input type="checkbox" name="Nonprofit" id="checkboxes-0" value="1">
                                    Nonprofit
                                  </label>
                                  </div>
                                <div class="checkbox">
                                  <label for="checkboxes-1">
                                    <input type="hidden" name="Service" value="0">
                                    <input type="checkbox" name="Service" id="checkboxes-1" value="1">
                                    Service
                                  </label>
                                  </div>
                                <div class="checkbox">
                                  <label for="checkboxes-2">
                                    <input type="hidden" name="Product" value="0">
                                    <input type="checkbox" name="Product" id="checkboxes-2" value="1">
                                    Product
                                  </label>
                                  </div>
                                <div class="checkbox">
                                  <label for="checkboxes-3">
                                    <input type="hidden" name="Technology" value="0">
                                    <input type="checkbox" name="Technology" id="checkboxes-3" value="1">
                                    Technology
                                  </label>
                                  </div>
                                <div class="checkbox">
                                  <label for="checkboxes-4">
                                    <input type="hidden" name="BrickMortar" value="0">
                                    <input type="checkbox" name="BrickMortar" id="checkboxes-4" value="1">
                                    Brick & Mortar
                                  </label>
                                  </div>
                                <div class="checkbox">
                                  <label for="checkboxes-5">
                                    <input type="hidden" name="SocialEnterprise" value="0">
                                    <input type="checkbox" name="SocialEnterprise" id="checkboxes-5" value="1">
                                    Social Enterprise
                                  </label>
                                  </div>
                                <div class="checkbox">
                                  <label for="checkboxes-6">
                                    <input type="hidden" name="SmallBusiness" value="0">
                                    <input type="checkbox" name="SmallBusiness" id="checkboxes-6" value="1">
                                    Small Business
                                  </label>
                                  </div>
                              </div>

                            </div>
                            <div class="col-4">

                              <div class="form-group">
                                <label class="control-label" for="checkboxes">What resources are you looking for?</label>
                                <div class="">
                                <div class="checkbox">
                                  <label for="checkboxes-0">
                                    <input type="checkbox" name="Mentorship" id="checkboxes-0" value="1">
                                    Mentorship
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label for="checkboxes-1">
                                    <input type="checkbox" name="StartupCurriculum" id="checkboxes-1" value="1">
                                    Startup Curriculum
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label for="checkboxes-2">
                                    <input type="checkbox" name="Accelerator" id="checkboxes-2" value="1">
                                    Accelerator/Incubator Programs
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label for="checkboxes-3">
                                    <input type="checkbox" name="Networking" id="checkboxes-3" value="1">
                                    Networking Opportunities
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label for="checkboxes-4">
                                    <input type="checkbox" name="Educational" id="checkboxes-4" value="1">
                                    Educational Workshops
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label for="checkboxes-5">
                                    <input type="checkbox" name="Entrepreneurial" id="checkboxes-5" value="1">
                                    Entrepreneurial Events
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label for="checkboxes-6">
                                    <input type="checkbox" name="Funding" id="checkboxes-6" value="1">
                                    Funding
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label for="checkboxes-7">
                                    <input type="checkbox" name="Coworking" id="checkboxes-7" value="1">
                                    Coworking Space
                                  </label>
                                </div>
                                </div>
                              </div>
                              

                            </div>
                          </div>
                          <!--------------------------------------->

                            <!-- Select Basic -->
                            <div class="form-group">
                              <label class=" control-label" for="selectbasic">What is your ethnicity?</label>
                              
                                <select id="selectbasic" name="Ethnicity" class="form-control">
                                  <option value="American Indian or Alaska Native">American Indian or Alaska Native</option>
                                  <option value="Asian">Asian</option>
                                  <option value="Black or African American">Black or African American</option>
                                  <option value="Hispanic or Latino">Hispanic or Latino</option>
                                  <option value="Native Hawaiian or Pacific Islander">Native Hawaiian or Pacific Islander</option>
                                  <option value="Middle Eastern">Middle Eastern</option>
                                  <option value="Multi-racial">Multi-racial</option>
                                  <option value="Other">Other</option>
                                  <option value="ather Not Say">Rather Not Say</option>
                                  <option value="White">White</option>
                                </select>
                              
                            </div>

                            <!-- Select Basic -->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="Veteran">Have you ever served as part of the United States Armed Forces?</label>
                              
                                <select id="Veteran" name="Veteran" class="form-control">
                                  <option value="Yes">Yes</option>
                                  <option value="No">No</option>
                                </select>
                              
                            </div>

                            <!-- Select Basic -->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="Gender">What is your gender?</label>
                              
                                <select id="Gender" name="Gender" class="form-control">
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                  <option value="Non-Binary">Non-Binary</option>
                                  <option value="Other">Other</option>
                                  <option value="Rather Not Say">Rather Not Say</option>
                                </select>
                              
                            </div>

                          <!--Button-->
                          <button type="submit" class="btn btn-primary"name="submit">Submit</button>
                          </form>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript -->
            <script src="vendor/jquery/jquery.slim.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>