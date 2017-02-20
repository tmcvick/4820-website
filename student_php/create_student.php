<?php
  include_once "include.php";

  $name = $_REQUEST['name'];
  $major = $_REQUEST['major'];
  $created = $_REQUEST['accountcreated'];
  $username = $_REQUEST['username'];
  $gender = $_REQUEST['gender'];

  $sql = "INSERT into Student (Name, Major, AccountCreated, Username, GenderID) VALUES ('$name', '$major', $created, '$username', $gender)";


  if($result = mysqli_query($conn, $sql)) {
    echo "Student Created!";
  } else {
    echo "$conn->error";
    echo "Student creation failed";
  }

 ?>
