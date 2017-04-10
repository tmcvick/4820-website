<?php
/**
 * Created by IntelliJ IDEA.
 * User: timmcvicker
 * Date: 4/10/17
 * Time: 15:04
 */
include_once "include.php";

$id = $_REQUEST['$id'];

$sql = "SELECT * from user INNER JOIN user_security on user_security.user_id = user.id where user.id='$id' LIMIT 1";
if($result = mysqli_query($conn, $sql)) {
    if($result->num_rows === 0)
    {
        echo 'No user found';
    }
    else {
        $row = $result->fetch_assoc();
        echo json_encode($row);
    }
} else {
    echo $conn->error;
}
