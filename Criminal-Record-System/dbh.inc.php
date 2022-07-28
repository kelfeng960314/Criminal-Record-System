<?php

$servername = "mysql.cs.nott.ac.uk";
$dbusername = "psxfc4";
$dbpassword = "WGKUZU";
$dbname = "psxfc4"; 

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if (!conn){
    die("Connection failed: " .mysqli_connect_error()); 
}