<?php 
// Read the varables sent by Post from AT gateway
$session = $_POST["session"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];

if ($text == ""){
    // This is first request> how we start respose with CON
    $response = "CON What is would you want to check \n";
    $response .= "1. My Account No \n";
    $response .= "2. My Phone number ";
}elseif($text == "1"){
    // Business logic for the first level response
    $response ="CON Choose your account information you want to view \n";
    $response .= "1. Acconut number \n";
    $response .= "2. Account balance";

}elseif($text == "2"){
    // Business logic for the first level response
    // This is first request> how we end respose with CON
    $respone = "END Your phone number is ".$phoneNumber;
    

}elseif($text == "1*1"){
    // This is second level of response
    $accountNumber = "ACC10022";
    // This is terminal request how we start with END
    $response = "END Your account number is  ".$accountNumber;
}elseif($text == "1*2"){
    // This is second level of business logic
    $balance = "Tsh 500,000";
    // This is terminal request how we start with END
    $response = "END Your balance is ".$balance;

}
//echo the response to the API
header('Content-type; text/plain');
echo $response;



?>