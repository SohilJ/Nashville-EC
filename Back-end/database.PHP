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

//sql to create table
$sql = "CREATE TABLE Organizations (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
just_an_idea INT(1),
pre_revenue INT(1),
revenue_less_than_25k INT(1),
revenue_between_25k_and_100k just INT(1),
revenue_more_than_250k INT(1),
arts INT(1),
consumer_goods_retail INT(1),
financial_services INT(1),
food_and_beverages INT(1),
healthcare INT(1),
music_and_entertainment INT(1),
technology INT(1),
non_profit INT(1),
service INT(1),
product INT(1),
technology_bussiness INT(1),
brick_and_mortar INT(1),
social_enterprise INT(1),
small_bussiness INT(1),
mentorship INT(1),
startup_cirriculm INT(1),
accelerator_incubrator_programs INT(1),
networking_opportunities INT(1),
educational_workshops INT(1),
entrepreneurial_events INT(1),
funding INT(1),
coworking_spaces INT(1),
american_indian_or_alaska_native INT(1),
asian INT(1),
black_or_african_american INT(1),
hispanic_or_latino INT(1),
native_hawaii_or_pacific_islander INT(1),
middle_eastern INT(1),
multiracial INT(1),
other INT(1),
rather_not_say INT(1),
white INT(1),
male INT(1),
female INT(1),
non_binary INT(1),
other_gender INT(1),
rather_not_say_gender INT(1),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Organizations created successfully";
} else {
  echo "Error creating table: " . $conn->error;
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