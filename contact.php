<?php
//get data from form  

$name = $_POST['name'];

$email= $_POST['email'];
$mobile = $_POST['mobile'];
$services = $_POST['services'];
$message= $_POST['message'];
$to = "vedhindia@gmail.com";
// info@gonnalecorp.com
$subject = "NEW ENQUIRY";
$txt ="Swarajya Manpower Services Pvt. Ltd.MARK : Recevied New Enquiry    \r 
Customer Name : ". $name . "\r Email : " . $email .  "\r Mobile Number : " .$mobile .  "\r Service : " .$services . "\r Message : " . $message;
$headers = "From: $email" . "\r\n" .
"CC: $email";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:Thank.html");
?>