<?php
/**
 * Created by IntelliJ IDEA.
 * User: timmcvicker
 * Date: 4/10/17
 * Time: 22:48
 */
include_once "include.php";
$desc = $_REQUEST['desc'];
$amount = $_REQUEST['amount'];
$date = date("Y-m-d H:i:s");
$recInd = $_REQUEST['rec'];
$days = $_REQUEST['days'];
$isExpense = $_REQUEST['expense'];
$uid = $_REQUEST['user'];
$lid = $_REQUEST['location'];

$sql = "INSERT into transaction (description, amount, date, recurring_ind, recurring_in_days, expense_ind, user_id, location_id) 
        VALUES ('$desc', '$amount', '$date', '$recInd', '$days', '$isExpense', '$uid', '$lid')";
if($result = mysqli_query($conn, $sql)) {
    $lastID = mysqli_insert_id($conn);
    echo 'transaction id created: ' . $lastID . '<br>';
} else {
    echo $conn->error;
}
