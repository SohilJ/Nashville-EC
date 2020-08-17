<?php

$dbhost   = 'localhost';
$username = 'root';
$password = '';
$db       = 'database_db';
$con      = mysqli_connect("$dbhost", "$username", "$password");

mysqli_connect("$dbhost", "$username", "$password");

//echo "Connected";

mysqli_select_db($con, $db);

//echo "Connected2";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nashville-EC</title>
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
    
<?php
$query = $_GET['query'];
//$query = 'Asian';
// gets value sent over search form

//$min_length = 3;
// you can set minimum length of the query if you want

//if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then

$query = htmlspecialchars($query);
// changes characters used in html to their equivalents, for example: < to &gt;

$query = mysqli_real_escape_string($con, $query);
// makes sure nobody uses SQL injection

$raw_results = mysqli_query($con, "SELECT users.name FROM users, user_demographics, demographics WHERE demographics.demographic LIKE '%" . $query . "%' AND user_demographics.d_id_FK= demographics.d_id AND users.id= user_demographics.user_id_FK") or die(mysqli_error($con));

/*

//This query return name of the organizations with demographic tag asian but asian could be replaced with any variable
$sql = "SELECT users.name FROM users, user_demographics, demographics WHERE demographics.demographic=\'Asian\' AND user_demographics.d_id_FK= demographics.d_id AND users.id= user_demographics.user_id_FK";

//bussiness stage query
$sql = "SELECT users.name FROM users, stage, user_stages WHERE stage.stage = \"just an idea\" AND user_stages.user_id_FK = users.id AND user_stages.b_id_FK = stage.b_id";

//navigation multi query
//you can add as many variables by saying or in between them
//it would be better if we could run this in a for loop

$sql = "SELECT name FROM users, user_navigations, navigations WHERE navigations.navigation= \"funding\" OR navigations.navigation = \"mentorship\" AND user_navigations.user_id_FK = users.id AND user_navigations.n_id_FK = navigations.n_id";

*/

if (mysqli_num_rows($raw_results) > 0) { // if one or more rows are returned do following
    
    while ($results = mysqli_fetch_array($raw_results)) {
        //$results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
        
        echo "<p><h3>" . $results['name'] . "</p>";
        // posts results gotten from database(title and text) you can also show id ($results['id'])
    }
    
    
} else { // if there is no matching rows do following
    echo "No results";
}

?>

</body>
</html>