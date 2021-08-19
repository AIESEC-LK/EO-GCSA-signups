<?php

error_reporting(0);

require_once("sheets.php");
require_once("configs.php");

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$preferred_contact = $_POST['preferred_contact'];
$university = $_POST['university'];
$degree = $_POST['degree'];
$acyear = $_POST['acyear'];
$privacy_agreed = $_POST['privacy_agreed'];
$captcha = $_POST['g-recaptcha-response'];


$response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?
secret=".$privatekey
."response=".$captcha
."&remoteip=".$_SERVER['REMOTE_ADDR']), true);

if($response){
    $remap = array(
        "7667"  => "University of Colombo",
        "7668"  => "University of Kelaniya",
        "7669"  => "University of Moratuwa",
        "7671"  => "University of Peradeniya",
        "7670"  => "University of Sri Jayewardenepura",
        "7672"  => "University of Ruhuna",
        "7673"  => "Sri Lanka Institute of Information Technology",
        "21790" => "Unemployed",
        "21789" => "Employed",
        "21791" => "Self-Employed",
        "21977" => "Connect with the Impact of AIESEC",
        "21976" => "Global Networking",
        "21975" => "Leadership Experience",
        "21974" => "Personal Development",
        "21799" => "From a friend",
        "21809" => "Event",
        "21810" => "Email",
        "21802" => "Facebook",
        "21805" => "Instagram",
        "21806" => "LinkedIn",
        "21807" => "Other Social Media",
        "21813" => "Media (magazine, TV, newspaper or radio)",
        "21809" => "Uni Session or Presentation",
        "21808" => "Search Engine",
        "21800" => "Information Booth on Campus",
        "21814" => "Other",
        "21794" => "Email",
        "21792" => "WhatsApp"
    );
    
    // $preunilist = json_decode(file_get_contents('universities.json'));
    
    // $unilist = array();
    // foreach ($preunilist as $x) {
    
    //     $unilist[$x->university] = $x->entity;
    // }
    try {
        append([[
            $first_name . " " . $last_name,
            $email,
            $phone,
            $remap[$preferred_contact],
            $university,
            // $unilist[$university],
            $degree,
            $acyear,
    
        ]]);
    } catch (Exception $e) {
        $output = json_encode(array('errors' => [array('message' => "Unable to remap.")]));
        die($output);
    }
    
    
        $output = json_encode(array('data' => [array('message' => "successful")]));
        echo ($output);
}
else{
    $output = json_encode(array('errors' => [array('message' => "Captcha Failed.")]));
    die($output);
}


