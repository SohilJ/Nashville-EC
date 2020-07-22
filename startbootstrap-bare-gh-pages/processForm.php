<?php 

//first last name, email
$firstName = $_POST['first'];
$lastName = $_POST['last'];
$email = $_POST['email'];


//What stage of business are you in?

//Company Name

$companyName = $_POST['companyName'];

//Brief Description of Business

$companyDescription = $_POST['companyDescription'];

//What stage of business?

$businessStage = $_POST['businessStage'];

//What industry is your business in ?

$arts = $_POST['Arts'];
$consumer_goods_retail = $_POST['ConsumerGoods'];
$financial_services = $_POST['Financial'];
$food_and_beverages = $_POST['FoodBeverage'];
$healthcare= $_POST['Healthcare'];
$music_and_entertainment = $_POST['MusicEntertainment'];
$technology = $_POST['Technology1'];

//How would you classify your business?

$non_profit = $_POST['Nonprofit'];
$service = $_POST['Service'];
$product = $_POST['Product'];
$technology_bussiness = $_POST['Technology']; //Spelled business wrong ?
$brick_and_mortar = $_POST['BrickMortar'];
$social_enterprise = $_POST['SocialEnterprise'];
$small_bussiness = $_POST['SmallBusiness']; //Spelled business wrong ?

//What resources are you looking for ?

$mentorship = $_POST['Mentorship'];
$startup_cirriculm = $_POST['StartupCurriculum']; //Spelled wrong ?
$accelerator_incubrator_programs = $_POST['Accelerator']; //Spelled wrong
$networking_opportunities = $_POST['Networking'];
$educational_workshops = $_POST['Educational'];
$entrepreneurial_events = $_POST['Entrepreneurial'];
$funding = $_POST['Funding'];
$coworking_spaces = $_POST['Coworking']; 


//Ethnicity, Veteran, Gender

$ethnicity = $_POST['Ethnicity'];
$veteran = $_POST['Veteran'];
$gender = $_POST['Gender'];








if (isset($_POST['submit'])) {

    echo "First Name: " .$firstName . "<br />";
    echo "last: " .$lastName . "<br />";
    echo "last: " .$email . "<br />";
    echo "last: " .$companyName . "<br />";
    echo "last: " .$companyDescription . "<br />";
    
    echo "last: " .$arts . "<br />";
    echo "last: " .$technology . "<br />";
    echo "last: " .$healthcare . "<br />";
    echo "last: " .$ethnicity . "<br />";
    echo "last: " .$veteran . "<br />";
    echo "last: " .$gender . "<br />";



}

?>