<?php
/**
 * Created by IntelliJ IDEA.
 * User: timmcvicker
 * Date: 4/10/17
 * Time: 14:31
 */
include_once "include.php";
$name = $_REQUEST['name'];
$uname = $_REQUEST['uname'];
$balance = $_REQUEST['balance'];
$pword = $_REQUEST['pword'];
$sync = 1;

$sql = "INSERT into user (name, username, balance, synced) VALUES ('$name', '$uname', '$balance', '$sync')";
if($result = mysqli_query($conn, $sql)) {
    $lastID = mysqli_insert_id($conn);
    $sql = "INSERT into user_security (user_id, password) VALUES ('$lastID', '$pword')";
    if($result = mysqli_query($conn, $sql)) {
        echo 'user id created: ' . $lastID . '<br>';
    } else {
        echo '';
    }
} else {
    echo '';
}
