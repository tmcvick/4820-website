<?php
/**
 * Created by IntelliJ IDEA.
 * User: timmcvicker
 * Date: 4/11/17
 * Time: 17:16
 */
include_once "include.php";

$sql = "SELECT * from user";
if($result = mysqli_query($conn, $sql)) {
    if($result->num_rows == 0)
    {
        echo 'No users found';
    }
    else {
        $resultArray = array();
        $tempArray = array();
        while($row = $result->fetch_object()) {
            $tempArray = $row;
            array_push($resultArray, $tempArray);
        }
        echo json_encode($resultArray);
    }
} else {
    echo $conn->error;
}