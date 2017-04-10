<?php
/**
 * Created by IntelliJ IDEA.
 * User: timmcvicker
 * Date: 4/10/17
 * Time: 15:23
 */
include_once "include.php";
$name = $_REQUEST['name'];
$uname = $_REQUEST['uname'];
$balance = $_REQUEST['balance'];
$pword = $_REQUEST['pword'];
$id = $_REQUEST['id'];
$sync = $_REQUEST['sync'];
$sync = $sync + 1;

$sql = "Update user SET name='$name', username='$uname', balance='$balance', synced='$sync' where id='$id'";
if($result = mysqli_query($conn, $sql)) {
    $sql = "update user_security set password='$pword' where user_id ='$id'";
    if($result = mysqli_query($conn, $sql)) {
        echo 'user id updated: ' . $id . '<br>';
    } else {
        echo '';
    }
} else {
    echo '';
}
