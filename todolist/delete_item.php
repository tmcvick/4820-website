<?php
include_once "include.php";

$id = $_REQUEST['id'];


$sql = "UPDATE ITEM SET deleted_ind=true WHERE id = $id";


if($result = mysqli_query($conn, $sql)) {
    echo '<script language="javascript">';
    echo 'alert("Item Deleted!")';
    echo '</script>';
} else {
    echo '<script language="javascript">';
    echo 'alert("Item Deletion Failed! + ' . $conn->error . '")';
    echo '</script>';
}
header("Refresh:0; url=author.php");
?>