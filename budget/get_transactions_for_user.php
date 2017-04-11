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
        $row = $result->fetch_assoc();
        echo json_encode($row);
    }
} else {
    echo $conn->error;
}