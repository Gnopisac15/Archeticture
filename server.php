<?php
ob_start();
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sd-204";

$userN = $_GET["username"];
$passW = $_GET["password"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user (username, password, status)
VALUES ('".$userN."', '".$passW."', 'enabled')";

if($conn->query($sql)==TRUE){

    echo "Welcome " .$_GET['username']." have a nice day!";
}else{
    echo "Error: ".$sql. "<br>".$conn->error;
}

//retrieve all data 


$conn->close();
?>