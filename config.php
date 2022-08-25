<?php
ob_start(); //Turns on output buffering 

$timezone = date_default_timezone_set("Kathmadu/Nepal");

$con = mysqli_connect("localhost", "root", "", "crime_alert"); //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>