<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

mysql_connect($servername, $username, $password, $dbname);
mysql_select_db($dbname) or die("Unable too connect database");

// Creating connection
//$conn = new mysqli($servername, $username, $password, $dbname);
if(!$con){
	echo '<h1> connected to sql </h1>'
}
// Checking connection
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
website VARCHAR(54) NOT NULL,
description VARCHAR
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

//populating the users table with data- I populated 11/22 users for now.

$records = "INSERT INTO users (name, email, website, description)
VALUES ('Citizens kitchen', 'alan@citizenkitchens.com', 'https://citizenkitchens.com/', 'Citizen Kitchens is a food business incubator that provides access to all of the utilities and resources food entrepreneurs need to grow their businesses. For a monthly cost, you can get access to commercial kitchen space, storage, waste management, and certifications. Their shared cost absorption model helps entrepreneurs grow a food-based business in Nashville while managing the high price tags associated with equipment and licensing.');";

$records .= "INSERT INTO users (name, email, website, description)
VALUES ('Conexión Américas', 'ryan@conexionamericas.org', 'https://www.conexionamericas.org/','At Conexión Américas, our mission is to build a welcoming community and create opportunities where Latino families can belong, contribute and succeed.');";

$records .= "INSERT INTO users (name, email, website, description)
VALUES ('Bunker Labs', 'sue.black@bunkerlabs.org', 'https://bunkerlabs.org/', 'Bunker Labs is a national network of veteran entrepreneurs dedicated to helping new veteran entrepreneurs start their own business.')";

$records .= "INSERT INTO users (name, email, website, description)
VALUES ('EO', 'sameera@eonashville.com', 'https://www.eonetwork.org/', 'EO enables entrepreneurs to learn and grow from each other, leading to greater business success and an enriched personal life. We educate, we transform, we inspire and we offer invaluable resources in the form of local, regional and global events, leadership-development programs, confidential forums and executive education opportunities, among other offerings designed for personal and professional growth.')";

$records .= "INSERT INTO users (name, email, website, description)
VALUES ('H.O.M.E.', 'reed@helpingmusic.org', 'https://www.helpingmusic.org/', 'HOME's mission is to provide a supportive community for artist development and music production. They connect people in the entertainment and music industry through the use of their co-working space, studio space, and events.')";

//This record did not have an email so there's a default one setup temorarily
$records .= "INSERT INTO users (name, email, website, description)
VALUES ('Launch Tennessee', 'default@gmail.com', 'https://launchtn.org/', 'Launch Tennessee is a public-private partnership that supports entrepreneurs from ideation to exit. We’re guided by a vision of making Tennessee the most startup-friendly state in the nation.')";

$records .= "INSERT INTO users (name, email, website, description)
VALUES ('Nashville Technology Council', 'erin.whitaker@technologycouncil.com', 'https://technologycouncil.com/', 'NTC exists to be a catalyst for the growth and influence of Middle Tennessee’s technology industry. By connecting, uniting, developing, and promoting our community, we propel the Nashville area forward to become a national leader in technology-based innovation and development.')";

$records .= "INSERT INTO users (name, email, website, description)
VALUES ('Center for Nonprofit Management', 'chelsea@cnm.com', 'https://www.cnm.org/', 'Our mission at CNM is amplifying the impact of nonprofits and their partners, in order to achieve a connected community equipped to realize our greatest opportunities. At CNM, your mission is our mission. Our job is to help you strengthen your organization and meet your goals.')";

$records .= "INSERT INTO users (name, email, website, description)
VALUES ('Pathway Lending', 'leslie.hayes@pathwaylending.org', 'https://www.pathwaylending.org/', 'Provides lending solutions and educational services that supports the development, growth, and preservation of underserved small businesses, affordable housing, and sustainable communities. We are financing businesses and strengthening communities.')";

$records .= "INSERT INTO users (name, email, website, description)
VALUES ('Arts & Business Council', 'jharwelldye@abcnashville', 'https://abcnashville.org/', 'The Arts & Business Council is a 501(c)(3) organization that leverages and unites the unique resources of the arts and business communities to create a thriving, sustainable creative culture in Nashville.We create mutually beneficial partnerships between arts and business along with direct services, key opportunities, and education to the creative community to help them master the business of art.')";

//this record did not have both email and website and are therefore set to defaut
$records .= "INSERT INTO users (name, email, website, description)
VALUES ('CET Life Sciences Center', 'default@gmail.com', 'https://default.org/', 'The CET Life Sciences Center is a business incubator facility that offers laboratory and office space, equipment and infrastructure to early-stage biomedical companies. We help life sciences entrepreneurs start and grow businesses to turn promising ideas into commercial reality.')";


//check for the above queries
if ($conn->multi_query($records) === TRUE) {
  echo "User records created successfully";
} else {
  echo "Error: " . $records . "<br>" . $conn->error;
}

//populating the demographic table
$table = "INSERT INTO demographics (demographic)
VALUES ('American Indian or Alaskan Native');";

$table .= "INSERT INTO demographics (demographic)
VALUES ('Asian');";

$table .= "INSERT INTO demographics (demographic)
VALUES ('Black or African American');";

$table .= "INSERT INTO demographics (demographic)
VALUES ('Hispanic or Latino');";

$table .= "INSERT INTO demographics (demographic)
VALUES ('Middle Eastern');";

$table .= "INSERT INTO demographics (demographic)
VALUES ('Multi-Racial');";

$table .= "INSERT INTO demographics (demographic)
VALUES ('Native Hawaiian or Pacific Islander');";

$table .= "INSERT INTO demographics (demographic)
VALUES ('White');";

$table .= "INSERT INTO demographics (demographic)
VALUES ('other');";

$table .= "INSERT INTO demographics (demographic)
VALUES ('Rather not say');";

//check for the above queries
if ($conn->multi_query($table) === TRUE) {
  echo "Demographics table populated successfully";
} else {
  echo "Error: " . $table . "<br>" . $conn->error;
}

//populating the navigations table
$tables = "INSERT INTO navigations (navigation)
VALUES ('Mentorship');";

$tables .= "INSERT INTO navigations (navigation)
VALUES ('Co-working spaces');";

$tables .= "INSERT INTO navigations (navigation)
VALUES ('Startup cirriculum');";

$tables .= "INSERT INTO navigations (navigation)
VALUES ('Educational workshops');";

$tables .= "INSERT INTO navigations (navigation)
VALUES ('Network opportunities');";

$tables .= "INSERT INTO navigations (navigation)
VALUES ('Funding');";

$tables .= "INSERT INTO navigations (navigation)
VALUES ('Accelerator/ Incubator programs');";

$tables .= "INSERT INTO navigations (navigation)
VALUES ('Entrepreneurial events');";

//check for the above queries
if ($conn->multi_query($tables) === TRUE) {
  echo "Navigations table populated successfully";
} else {
  echo "Error: " . $tables . "<br>" . $conn->error;
}


//populating the relation between user_id and d_id table
$relation = "INSERT INTO users_demographics(user_id, n_id)
VALUES ('1','1');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('1','2');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('1','3');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('1','4');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('1','5');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('1','6');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('1','7');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('1','8');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('1','9');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('1','10');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('2','4');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('2','9');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('3','1');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('3','2');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('3','3');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('3','4');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('3','5');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('3','6');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('3','7');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('3','8');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('3','9');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('3','10');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('4','1');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('4','2');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('4','3');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('4','4');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('4','5');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('4','6');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('4','7');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('4','8');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('4','9');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('4','10');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('5','1');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('5','2');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('5','3');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('5','4');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('5','5');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('5','6');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('5','7');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('5','8');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('5','9');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('5','10');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('6','1');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('6','2');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('6','3');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('6','4');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('6','5');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('6','6');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('6','7');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('6','8');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('6','9');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('6','10');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('7','1');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('7','2');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('7','3');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('7','4');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('7','5');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('7','6');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('7','7');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('7','8');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('7','9');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('7','10');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('8','1');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('8','2');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('8','3');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('8','4');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('8','5');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('8','6');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('8','7');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('8','8');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('8','9');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('8','10');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('9','1');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('9','2');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('9','3');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('9','4');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('9','5');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('9','6');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('9','7');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('9','8');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('9','9');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('9','10');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('10','1');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('10','2');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('10','3');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('10','4');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('10','5');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('10','6');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('10','7');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('10','8');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('10','9');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('10','10');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('11','1');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('11','2');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('11','3');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('11','4');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('11','5');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('11','6');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('11','7');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('11','8');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('11','9');";

$relation .= "INSERT INTO  users_demographics(user_id, n_id)
VALUES ('11','10');";

//check for the above queries
if ($conn->multi_query($relation) === TRUE) {
  echo "user_demographics relation table populated successfully";
} else {
  echo "Error: " . $relation . "<br>" . $conn->error;
}

$conn->close();
?>