<?php
/**
 * Created by IntelliJ IDEA.
 * User: timmcvicker
 * Date: 4/10/17
 * Time: 22:45
 */
include_once "include.php";

$id = $_REQUEST['id'];

$sql = "SELECT * from transaction  where user_id='$id'";
if($result = mysqli_query($conn, $sql)) {
    if($result->num_rows == 0)
    {
        echo 'No transactions found';
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