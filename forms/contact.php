<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$objet= $_POST['subject'];
$message= $_POST['message'];

$to = "yasser.ibouda@gmail.com";
$subject = "Mail From github";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message . "\r\n Objet =" . $objet;
$headers = "From: noreply@github.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
?>
  