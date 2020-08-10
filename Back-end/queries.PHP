<?PHP>
//This query return name of the organizations with demographic tag asian but asian could be replaced with any variable
$sql = "SELECT users.name FROM users, user_demographics, demographics WHERE demographics.demographic=\'Asian\' AND user_demographics.d_id_FK= demographics.d_id AND users.id= user_demographics.user_id_FK";

//bussiness stage query
$sql = "SELECT users.name FROM users, stage, user_stages WHERE stage.stage = \"just an idea\" AND user_stages.user_id_FK = users.id AND user_stages.b_id_FK = stage.b_id";

//navigation multi query
//you can add as many variables by saying or in between them
//it would be better if we could run this in a for loop

$sql = "SELECT name FROM users, user_navigations, navigations WHERE navigations.navigation= \"funding\" OR navigations.navigation = \"mentorship\" AND user_navigations.user_id_FK = users.id AND user_navigations.n_id_FK = navigations.n_id";