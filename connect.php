<?php
$hostname  = 'localhost';
$username = 'ticket-booking';
$password='ticket-booking';
$dbname = 'ticket-booking';
$connect =  mysqli_connect($hostname , $username , $password ,$dbname) or die("Error Connecting");
?> 