<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['emailaddress'];
$message= $_POST['message'];
$number= $_POST['mobile'];
$to = "bimmantraconsultant@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message ."\r\n Mobile number =" .$number;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: bimmantraconsultant@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
echo "Thank You, your enquiry is been sent!" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Go Back</a>";
?>