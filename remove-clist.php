<?php
 $connection = new mysqli("localhost","root","","iwttesr");
if (!$connection) {
    die("Error in database connection". $connection->connect_error);
}
include_once "get-remove-function.php";
if (isset($_GET['recordId'])){
    $recordId = $_GET['recordId'];
    $common = new Common();
    $delete = $common->deleteRecordById($connection,$recordId);
    if ($delete){
        echo '<script>alert("property removed successfully !")</script>';
        echo '<script>window.location.href="consideration-list.php";</script>';
    }
}