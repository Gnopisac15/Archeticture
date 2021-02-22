<?php
include "process.php";


if(isset($_POST['save']))
{
  $userName = $_POST['username'];
  $passWord = $_POST['password'];
  $status = $_POST['status'];

  $conn->query("INSERT INTO user(username,password,status)VALUES('$userName','$passWord','$status')")or
            die($conn->error);
    
}


?>