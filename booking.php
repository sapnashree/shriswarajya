<?php
//get data from form  

$name = $_POST['name'];

$email= $_POST['email'];
$mobile = $_POST['mobile'];

$service= $_POST['service'];
$to = "prajwal.vedh@gmail.com";
// info@gonnalecorp.com
$subject = "New Booking Recevied";
$txt ="Hello I'm $name, I Booked Appoinment Please Check and Contact me    \r 

Customer Name : ". $name . "\rMobile Number : " .$mobile .  "\r  Service : " . $service;


$headers = "From: $email" . "\r\n" .
"CC: $email";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:Thank.html");
?>