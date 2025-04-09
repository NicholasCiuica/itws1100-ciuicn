<?php
  /* Delete a lab */

  require("conn.php");
  $db = new mysqli($hostname, $username, $password, $database);

  if ($db->connect_error) {
    echo '<div class="messages">Could not connect to the database. Error: ';
    echo $db->connect_error . '</div>';
  }

  if (isset($_POST["id"])) {
    $labId = (int) $_POST["id"];

    $query = "delete from actors where id = ?";
    $statement = $db->prepare($query);
    $statement->bind_param("i", $labId);
    $statement->execute();
    $statement->close();
  }
?>
