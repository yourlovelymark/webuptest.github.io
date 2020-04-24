<?php

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$subject = $_POST['subject'];
$usermail = $_POST['email'];
$message = $_POST['message'];
$header = "From: $name $lastname \nContent-Type:".
          ' text/plain;charset="UTF-8"'.
          "\nContent-Transfer-Encoding: 8bit";

$to = 'marek.9@o2.pl';

$checkmail = '/^[a-zA-Z0-9.\-_]+@[a-zA-Z0-9\-.]+\.[a-zA-Z]{2,4}$/';

if(preg_match($checkmail, $usermail))
    mail($to, $subject, $message, $header);
else
    echo 'Nie poprawny adres email';

?>