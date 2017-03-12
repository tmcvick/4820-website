<?php
include_once "include.php";

$title = $_REQUEST['title'];
$priority = $_REQUEST['priority'];
$updated = 'CURRENT_TIMESTAMP';
$duedate = $_REQUEST['duedate'];
$deleted = 'false';

$sql = "INSERT into Item (title, priority, due_date, deleted_ind, updated_at) VALUES ('$title', '$priority', '$duedate', $deleted, $updated)";


if($result = mysqli_query($conn, $sql)) {
    echo '<script language="javascript">';
    echo 'alert("Item Created!")';
    echo '</script>';
} else {
    echo '<script language="javascript">';
    echo 'alert("Item Creation Failed!")';
    echo '</script>';
}
header("Refresh:0; url=author.php");
?>
