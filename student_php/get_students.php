<?php
  include_once "include.php";

//Gender: 1 for male, 2 for female, 3 for other
  $sql = "Select * from Student";

  if($result = mysqli_query($conn, $sql)) {
    $resultArray = array();
    $tempArray = array();
    while($row = $result->fetch_object()) {
      $tempArray = $row;
      array_push($resultArray, $tempArray);
    }
    echo json_encode($resultArray);
  }
 ?>
