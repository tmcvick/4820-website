<?php
  include_once "include.php";

  $name = $_REQUEST['name'];
  $major = $_REQUEST['major'];
  $created = date("Y-m-d H:i:s");
  $username = $_REQUEST['username'];
  $gender = $_REQUEST['gender'];

//Gender: 1 for male, 2 for female, 3 for other
    if($gender == "male") {
        $gender = 1;
    } else if($gender == "female") {
        $gender = 2;
    } else {
        $gender = 3;
    }

  $sql = "INSERT into Student (Name, Major, AccountCreated, Username, GenderID) VALUES ('$name', '$major', '$created', '$username', '$gender')";


  if($result = mysqli_query($conn, $sql)) {
    echo "Student Created!";
  } else {
    echo "$conn->error";
    echo "Student creation failed";
  }

 ?>
