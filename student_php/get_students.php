<?php
  include_once "include.php";

//Gender: 1 for male, 2 for female, 3 for other
  $sql = "SELECT StudentId, Name, Major, AccountCreated, Username, gender FROM Student INNER JOIN Gender on Student.GenderID = Gender.genderID ORDER BY StudentId";

  if($result = mysqli_query($conn, $sql)) {
    $resultArray = array();
    $tempArray = array();
    while($row = $result->fetch_object()) {
      $tempArray = $row;
      array_push($resultArray, $tempArray);
    }
    echo json_encode($resultArray);
  } else {
    echo $conn->error;
  }
 ?>
