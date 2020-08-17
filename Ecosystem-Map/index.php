<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Nashville Entrepreneur Center</title>

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

<form action="db_connect.php" method="GET"> 
            <!-- Page Content -->
            <div class="container">
                <div class="row">
                    
                    <!-- Select Basic -->
<div class="form-group">
    <label class="control-label" for="selectbasic">Demographic</label>
      <select id="selectbasic" name="selectbasic" class="form-control">
        <option value="1">Demographics</option>
        <option value="1">American Indian or Alaskan Native</option>
        <option value="2" name="query">Asian</option>
        <option value="">Black or African American</option>
        <option value="">Hispanic or Latino</option>
        <option value="">Middle Eastern</option>
        <option value="">Multi-Racial</option>
        <option value="">Native Hawaiian or Pacific Islander</option>
        <option value="">White</option>
      </select>
    
  </div>
  
  <!-- Select Basic -->
  <div class="form-group">
    <label class="control-label" for="selectbasic">Business Stage</label>
    
      <select id="selectbasic" name="selectbasic" class="form-control">
        <option value="1">Business Stage</option>
        <option value="1">just an idea</option>
        <option value="2">pre-revenue</option>
        <option value="">revenue less than 25k</option>
        <option value="">revenue between 25k and 100k</option>
        <option value="">revenue between 100k and 250k</option>
        <option value="">revenue greater than 250k</option>
      </select>
    
  </div>

  <!-- Select Basic -->
  <div class="form-group">
    <label class="control-label" for="selectbasic">Resources</label>
    
      <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1">Resources</option>
        <option value="1">mentorship</option>
        <option value="1">co-working spaces</option>
        <option value="2">startup curriculum</option>
        <option value="">educational workshops</option>
        <option value="">networking opportunities</option>
        <option value="">funding</option>
        <option value="">accelerator/incubator programs</option>
      </select>
    
  </div>


  <!-- Button -->
<div class="form-group">
    <div class="">
        <div id="button"><a href="db_connect.php">Submit</a></div>
    </div>
  </div>

                </div>
            </div>
            </form>

            <!-- Bootstrap core JavaScript -->
            <script src="vendor/jquery/jquery.slim.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>