<?php
  include("conn.php");
  $db = new mysqli($hostname, $username, $password, $database);

  if ($db->connect_error) {
    echo 'Could not connect to the database. Error:' . $db->connect_error ;
  }

  // $query = 'SELECT * FROM `mySiteUsers`';
  // $result = $db->query($query);
  // $numRecords = $result->num_rows;
  
  $loginUser = $_POST["user"];
  $loginPass = $_POST["pass"];
?>