<?php
include "process.php";


if(isset($_GET['delete'])){
    $userId = $_GET['delete'];
    $conn->query("DELETE FROM data WHERE id=$userId") or die($conn->error);

}

?>