<?php

// Get values from form
$name=$_POST['name'];
$mensaje=$_POST['mensaje'];
$phone=$_POST['phone'];
$email=$_POST['email'];

$to = "email@email.com";
$subject = "From";
$message = " Nombre: " . $name . "\r\n Mensaje: " . $mensaje . "\r\n Tel: " . $phone . "\r\n Email: " . $email;


$from = "Your Web";
$headers = "From:" . $from . "\r\n";
$headers .= "Reply-To: $email" . PHP_EOL;
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 

if(@mail($to,$subject,$message,$headers))
{
print "<script>document.location.href='http://web.com/thanks.html';</script>";
// Created by Hugo
}else{
echo "Error! Please try again.";
}