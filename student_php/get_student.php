<?php
  include_once "include.php";

  $studentId = $_REQUEST['studentId'];

//Gender: 1 for male, 2 for female, 3 for other
  $sql = "SELECT StudentId, Name, Major, AccountCreated, Username, gender FROM Student INNER JOIN Gender on Student.GenderID = Gender.genderID WHERE StudentId = $studentId LIMIT 1";

  if($result = mysqli_query($conn, $sql)) {
    $row = $result->fetch_assoc();
    echo json_encode($row);
  } else {
    echo $conn->error;
  }
 ?>
