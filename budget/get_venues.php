<?php
/**
 * Created by IntelliJ IDEA.
 * User: timmcvicker
 * Date: 4/24/17
 * Time: 23:52
 */
include_once "include.php";

$sql = "SELECT * from location";
if($result = mysqli_query($conn, $sql)) {
    if($result->num_rows == 0)
    {
        echo 'No venues found';
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