<?PHP>
//This query return name of the organizations with demographic tag asian but asian could be replaced with any variable
$sql = "SELECT users.name FROM users, user_demographics, demographics WHERE demographics.demographic=\'Asian\' AND user_demographics.d_id_FK= demographics.d_id AND users.id= user_demographics.user_id_FK";