<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

mysql_connect($servername, $username, $password, $dbname);
mysql_select_db($dbname) or die("Unable too connect database");

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
if(!$con){
	echo '<h1> connected to sql </h1>'
}
// Check connection
//if ($conn->connect_error) {
//  die("Connection failed: " . $conn->connect_error);
//}

//creating database
CREATE DATABSE nashville;
USE nashville;

//sql to create table
$sql = "CREATE TABLE users (
user_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
contact VARCHAR(30) NOT NULL,
website VARCHAR(54) NOT NULL,
logo BLOB,
phone INT,
description VARCHAR(500),
program_overview VARCHAR(500)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table users created successfully";
} else {
  echo "Error creating table users: " . $conn->error;
}


$sql2 = "CREATE TABLE demographics (
d_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
demographic VARCHAR(30) NOT NULL
)";

if ($conn->query($sql2) === TRUE) {
  echo "Table demographics created successfully";
} else {
  echo "Error creating table demographics: " . $conn->error;
}


$sql3 = "CREATE TABLE business_type (
b_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
business VARCHAR(30) NOT NULL
)";

if ($conn->query($sql3) === TRUE) {
  echo "Table business_type created successfully";
} else {
  echo "Error creating table business_type: " . $conn->error;
}


$sql4 = "CREATE TABLE genders (
g_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
gender VARCHAR(30) NOT NULL
)";

if ($conn->query($sql4) === TRUE) {
  echo "Table genders created successfully";
} else {
  echo "Error creating table genders: " . $conn->error;
}


$sql5 = "CREATE TABLE industries (
i_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
industry VARCHAR(30) NOT NULL
)";

if ($conn->query($sql5) === TRUE) {
  echo "Table industries created successfully";
} else {
  echo "Error creating table industries: " . $conn->error;
}


$sql6 = "CREATE TABLE stages (
s_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
stage VARCHAR(30) NOT NULL
)";

if ($conn->query($sql6) === TRUE) {
  echo "Table stages created successfully";
} else {
  echo "Error creating table stages: " . $conn->error;
}


$sql7 = "CREATE TABLE nagvigations (
n_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
navigation VARCHAR(30) NOT NULL
)";

if ($conn->query($sql7) === TRUE) {
  echo "Table navigations created successfully";
} else {
  echo "Error creating table navigations: " . $conn->error;
}


$sql8 = "CREATE TABLE users_demographics (
user_id INT NOT NULL REFRENCES users(user_id),
d_id INT NOT NULL REFRENCES demographics(d_id)
)";

if ($conn->query($sql8) === TRUE) {
  echo "Table users_demographics created successfully";
} else {
  echo "Error creating table users_demographics: " . $conn->error;
}


$sql9 = "CREATE TABLE users_business_type (
user_id INT NOT NULL REFRENCES users(user_id),
b_id INT NOT NULL REFRENCES business_type(b_id)
)";

if ($conn->query($sql9) === TRUE) {
  echo "Table users_business_type created successfully";
} else {
  echo "Error creating table users_business_type: " . $conn->error;
}


$sql10 = "CREATE TABLE users_gneders (
user_id INT NOT NULL REFRENCES users(user_id),
g_id INT NOT NULL REFRENCES genders(g_id)
)";

if ($conn->query($sql10) === TRUE) {
  echo "Table users_gneders created successfully";
} else {
  echo "Error creating table users_gneders: " . $conn->error;
}


$sql11 = "CREATE TABLE users_industries (
user_id INT NOT NULL REFRENCES users(user_id),
i_id INT NOT NULL REFRENCES industries(i_id)
)";

if ($conn->query($sql11) === TRUE) {
  echo "Table users_industries created successfully";
} else {
  echo "Error creating table users_industries: " . $conn->error;
}


$sql12 = "CREATE TABLE users_stages (
user_id INT NOT NULL REFRENCES users(user_id),
s_id INT NOT NULL REFRENCES stages(s_id)
)";

if ($conn->query($sql12) === TRUE) {
  echo "Table users_stages created successfully";
} else {
  echo "Error creating table users_stages: " . $conn->error;
}


$sql13 = "CREATE TABLE users_navigations (
user_id INT NOT NULL REFRENCES users(user_id),
n_id INT NOT NULL REFRENCES navigations(n_id)
)";

if ($conn->query($sql13) === TRUE) {
  echo "Table users_navigations created successfully";
} else {
  echo "Error creating table users_navigations: " . $conn->error;
}


//queries
$sql = "SELECT name FROM Organizations WHERE arts=='1'";
$result -> $mysqli -> query($sql);
while( $row = mysql_fetch_assoc( $result)){
    $arts[] = $row;
}

$sql2 = "SELECT name FROM Organizations WHERE consumer_good_retail=='1'";
$result2 -> $mysqli -> query($sql2);
while( $row2 = mysql_fetch_assoc( $result2)){
    $consumer_goods_retail[] = $row2;
}

$sql3 = "SELECT name FROM Organizations WHERE finanical_services=='1'";
$result3 -> $mysqli -> query($sql3);
while( $row3 = mysql_fetch_assoc( $result3)){
    $financial_services[] = $row3;
}

$sql4 = "SELECT name FROM Organizations WHERE food_and_beverages=='1'";
$result4 -> $mysqli -> query($sql4);
while( $row4 = mysql_fetch_assoc( $result4)){
    $food_and_beverages[] = $row4;
}

$sql5 = "SELECT name FROM Organizations WHERE healthcare=='1'";
$result5 -> $mysqli -> query($sql5);
while( $row5 = mysql_fetch_assoc( $result5)){
    $healthcare[] = $row5;
}

$sql6 = "SELECT name FROM Organizations WHERE music_and_entertainment=='1'";
$result6 -> $mysqli -> query($sql6);
while( $row6 = mysql_fetch_assoc( $result6)){
    $music_and_entertainment[] = $row6;
}

$sql7 = "SELECT name FROM Organizations WHERE technology=='1'";
$result7 -> $mysqli -> query($sql7);
while( $row7 = mysql_fetch_assoc( $result7)){
    $technology[] = $row7;
}

$sql8 = "SELECT name FROM Organizations WHERE non_profit=='1'";
$result8 -> $mysqli -> query($sql8);
while( $row8 = mysql_fetch_assoc( $result8)){
    $non-profit[] = $row8;
}

$sql9 = "SELECT name FROM Organizations WHERE service=='1'";
$result9 -> $mysqli -> query($sql9);
while( $row9 = mysql_fetch_assoc( $result9)){
    $service[] = $row9;
}

$sql10 = "SELECT name FROM Organizations WHERE product=='1'";
$result10 -> $mysqli -> query($sql10);
while( $row10 = mysql_fetch_assoc( $result10)){
    $product[] = $row10;
}

$sql11 = "SELECT name FROM Organizations WHERE technology_bussiness=='1'";
$result11 -> $mysqli -> query($sql11);
while( $row11 = mysql_fetch_assoc( $result11)){
    $technology_bussiness = $row11;
}

$sql12 = "SELECT name FROM Organizations WHERE brick_and_mortar=='1'";
$result12 -> $mysqli -> query($sql12);
while( $row12 = mysql_fetch_assoc( $result12)){
    $brick_and_mortar[] = $row12;
}

$sql13 = "SELECT name FROM Organizations WHERE social_enterprise=='1'";
$result13 -> $mysqli -> query($sql13);
while( $row13 = mysql_fetch_assoc( $result13)){
	$social_enterprise[] = $row13;
}
$sql14 = "SELECT name FROM Organizations WHERE small_bussiness=='1'";
$result14 -> $mysqli -> query($sql14);
while( $row14 = mysql_fetch_assoc( $result14)){
    $small_bussiness[] = $row14;
}

$sql15 = "SELECT name FROM Organizations WHERE mentorship=='1'";
$result15 -> $mysqli -> query($sql15);
while( $row15 = mysql_fetch_assoc( $result15)){
    $mentorship[] = $row15;
}

$sql16 = "SELECT name FROM Organizations WHERE startup_curriculm=='1'";
$result16 -> $mysqli -> query($sql16);
while( $row16 = mysql_fetch_assoc( $result16)){
    $startup_curriculm[] = $row16;
}

$sql17 = "SELECT name FROM Organizations WHERE aacelerator_incubator_programs=='1'";
$result17 -> $mysqli -> query($sql17);
while( $row17 = mysql_fetch_assoc( $result17)){
    $accelerator_incubator_programs[] = $row17;
}

$sql18 = "SELECT name FROM Organizations WHERE networking_opportunities=='1'";
$result18 -> $mysqli -> query($sql18);
while( $row18 = mysql_fetch_assoc( $result18)){
    networking_opportunities[] = $row18;
}

$sql19 = "SELECT name FROM Organizations WHERE educational_workshops=='1'";
$result19 -> $mysqli -> query($sql19);
while( $row19 = mysql_fetch_assoc( $result19)){
    $networking_opportunites[] = $row19;
}

$sql20 = "SELECT name FROM Organizations WHERE entrepreneurial_events=='1'";
$result20 -> $mysqli -> query($sql20);
while( $row20 = mysql_fetch_assoc( $result20)){
    $entrepreneurial_events[] = $row20;
}

$sql21 = "SELECT name FROM Organizations WHERE funding=='1'";
$result121 -> $mysqli -> query($sql21);
while( $row21 = mysql_fetch_assoc( $result21)){
    $funding[] = $row21;
}

$sql22 = "SELECT name FROM Organizations WHERE coworking_spaces=='1'";
$result22 -> $mysqli -> query($sql22);
while( $row22= mysql_fetch_assoc( $result22)){
    $coworking_spaces[] = $row22;
}

$conn->close();
?>