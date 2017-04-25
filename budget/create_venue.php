<?php
/**
 * Created by IntelliJ IDEA.
 * User: timmcvicker
 * Date: 4/24/17
 * Time: 23:50
 */
include_once "include.php";
$desc = $_REQUEST['name'];
$amount = $_REQUEST['latitude'];
$date = $_REQUEST['longitude'];
$recInd = $_REQUEST['type'];

$sql = "INSERT into location (name, latitude, longitude, type) 
        VALUES ('$desc', '$amount', '$date', '$recInd')";
if($result = mysqli_query($conn, $sql)) {
    $lastID = mysqli_insert_id($conn);
    echo 'location id created: ' . $lastID . '<br>';
} else {
    echo $conn->error;
}