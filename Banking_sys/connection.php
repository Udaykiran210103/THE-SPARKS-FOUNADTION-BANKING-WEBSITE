<?php

$hostname="localhost";
$user="root";
$password="";
$dbname="banking_sys";
$port=3308;

$conn =new mysqli($hostname,$user,$password,$dbname,$port);

if($conn->connect_error)
{   
    die("Connection failed: ".$conn->connect_error);
}




?>