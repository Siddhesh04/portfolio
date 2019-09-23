<?php
$to = 'sid200496@gmail.com';
$name = $_POST['name2020'];
$email = $_POST['email2020'];
$subject = $_POST['subject2020'];
$message = $_POST['message2020'];
$headers = 'From: '.$email;

if (mail($to, $subject, $message, $headers)) {
    echo 'Mail Send Successfully';
} else {
    echo 'Can not send mail';
}
?>