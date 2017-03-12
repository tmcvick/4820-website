<?php
include_once "include.php";

$id = $_REQUEST['id'];
$title = $_REQUEST['title'];
$priority = $_REQUEST['priority'];
$updated = 'CURRENT_TIMESTAMP';
$duedate = $_REQUEST['duedate'];
$deleted = 'false';

echo '<script language="javascript">';
echo 'alert("'. $duedate . '")';
echo '</script>';
$sql = "UPDATE Item SET deleted_ind=$deleted, title='$title', priority='$priority', updated_at=$updated, due_date=$duedate WHERE id = $id";


if($result = mysqli_query($conn, $sql)) {
    echo '<script language="javascript">';
    echo 'alert("Item Updated!")';
    echo '</script>';
} else {
    echo '<script language="javascript">';
    echo 'alert("Item Update Failed!")';
    echo '</script>';
}
header("Refresh:0; url=author.php");
?>