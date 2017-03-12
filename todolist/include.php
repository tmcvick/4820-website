<?php
  $servername = "mysql1.cs.clemson.edu";
  $username = "andrdtd_hir0";
  $password = "todolist54";
  $dbname = "android_todo_ul7b";

  try {
    $conn = new mysqli($servername, $username, $password, $dbname);
  } catch (PDOException $e) {
    echo "Connection Failed\n", $e->getMessage();
  }
  ?>
