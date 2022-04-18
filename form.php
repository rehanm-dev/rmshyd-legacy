<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['msg'];
$to = "mannan.messi43@gmail.com";
$subject = "Mail From rmshyd.com(Website)";
$txt ="Name = ". $name . "\r\nEmail = ". $email . "\r\nMessage =". $message;
$headers = "From: noreply@rmshyd.com" . "\r\n" .
"CC: somebody@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>