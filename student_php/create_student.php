<?php
  include_once "include.php";

  $name = $_REQUEST['name'];
  $major = $_REQUEST['major'];
  $created = date("Y-m-d H:i:s");
  $username = $_REQUEST['username'];
  $gender = $_REQUEST['gender'];

//Gender: 1 for male, 2 for female, 3 for other
echo '<script language="javascript">';
echo 'alert("' . $gender . '")';
echo '</script>';
    if($gender == "male") {
        $gender = 1;
    } else if($gender == "female") {
        $gender = 2;
    } else {
        $gender = 3;
    }

  $sql = "INSERT into Student (Name, Major, AccountCreated, Username, GenderID) VALUES ('$name', '$major', '$created', '$username', '$gender')";


  if($result = mysqli_query($conn, $sql)) {
      echo '<script language="javascript">';
      echo 'alert("Student Created!")';
      echo '</script>';
  } else {
      echo '<script language="javascript">';
      echo 'alert("Student Creation Failed!")';
      echo '</script>';
  }
    header("Refresh:0; url=author.php");
 ?>
