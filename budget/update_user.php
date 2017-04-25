<?php
/**
 * Created by IntelliJ IDEA.
 * User: timmcvicker
 * Date: 4/10/17
 * Time: 15:23
 */
include_once "include.php";

$id = $_REQUEST['id'];
$balance = $_REQUEST['balance'];

if(isset($_REQUEST['uname'])) {
    $name = $_REQUEST['name'];
    $uname = $_REQUEST['uname'];
    $pword = $_REQUEST['pword'];

    $sql = "Update user SET name='$name', username='$uname', balance='$balance' where id='$id'";
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

} else {
    $sql = "Update user SET balance='$balance' where id='$id'";
    if($result = mysqli_query($conn, $sql)) {
        echo 'user id updated: ' . $id . '<br>';
    } else {
        echo '';
    }
}


