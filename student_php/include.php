<?php
  $servername = "mysql1.cs.clemson.edu";
  $username = "android_a3_80dn";
  $password = "phpstudent80";
  $dbname = "android_a3_ns28";

  try {
    $conn = new mysqli($servername, $username, $password, $dbname);
  } catch (PDOException $e) {
    echo "Connection Failed\n", e->getMessage();
  }
  ?>
