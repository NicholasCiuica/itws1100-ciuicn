<?php
  include("conn.php");
  $db = new mysqli($hostname, $username, $password, $database);

  if ($db->connect_error) {
    echo 'Could not connect to the database. Error:' . $db->connect_error ;
  }
  
  $loginUser = $_POST["user"];
  $loginPass = $_POST["pass"];

  //These sources helped me formulate my SQL query
    //https://stackoverflow.com/questions/4253960/sql-how-to-properly-check-if-a-record-exists
    //https://stackoverflow.com/questions/11784289/does-it-make-sense-to-use-limit-1-in-a-query-select-1
  $query = 'SELECT * FROM mySiteUsers WHERE user = ' . $loginUser . ' AND pass = ' . $loginPass . ' LIMIT 1';
  $result = $db->query($query);
  $numRecords = $result->num_rows;
  echo $numRecords;
?>