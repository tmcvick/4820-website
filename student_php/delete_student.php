<?php
include_once "include.php";

$id = $_REQUEST['studentId'];


$sql = "DELETE FROM Student WHERE StudentId = $id";


if($result = mysqli_query($conn, $sql)) {
    echo '<script language="javascript">';
    echo 'alert("Student Deleted!")';
    echo '</script>';
} else {
    echo '<script language="javascript">';
    echo 'alert("Student Deletion Failed!")';
    echo '</script>';
}
header("Refresh:0; url=author.php");
?>