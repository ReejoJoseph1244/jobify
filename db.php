<?php

//Mysql Config
$servername = "localhost";
$username = "";
$password = "";
$dbname = "jobify";

//Create New Database Connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check Connection
if($conn->connect_error) {
	die("Connection Failed: ". $conn->connect_error);
}