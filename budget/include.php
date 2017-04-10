<?php
/**
 * Created by IntelliJ IDEA.
 * User: timmcvicker
 * Date: 4/10/17
 * Time: 14:21
 */
  $servername = "mysql1.cs.clemson.edu";
  $username = "budget_user";
  $password = "androidbudget54";
  $dbname = "android_budget_tmcvick";

  try {
      $conn = new mysqli($servername, $username, $password, $dbname);
  } catch (PDOException $e) {
      echo "Connection Failed\n", $e->getMessage();
  }
  ?>
