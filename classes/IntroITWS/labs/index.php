<?php
  //Using session superglobal for all pages that care about who's signed in
    //https://stackoverflow.com/questions/7129498/write-session-start-on-1-page-or-all-pages
    //https://www.w3schools.com/php/php_sessions.asp
   session_start();
   include($_SERVER['DOCUMENT_ROOT'] . "/iit/quiz3/includes/head.inc.php");
?>

<header>
   <a href="/iit/"><h3>Nick's Personal Website</h3></a>
   <h1>Labs</h1>
   <p>Intro to ITWS</p>
</header>

<?php
   include($_SERVER['DOCUMENT_ROOT'] . "/iit/quiz3/includes/nav.inc.php");
?>

<!-- Add new lab to database -->
<?php
   require($_SERVER['DOCUMENT_ROOT'] . "/iit/quiz3/conn.php");
   $db = new mysqli($hostname, $username, $password, $database);

   if ($db->connect_error) {
      echo '<div class="messages">Could not connect to the database. Error: ';
      echo $db->connect_error . '</div>';
   }

   $errors = "";
   $focusId == "";

   if(isset($_POST["add"])) {
      //based on code from Lab 9
      $title = trim($_POST["title"]);
      $desc = trim($_POST["desc"]);
      $link = trim($_POST["link"]);

      if ($title == '') {
         $errors .= '<li>Title may not be blank</li>';
         if ($focusId == '') $focusId = '#title';
      }
      if ($desc == '') {
         $errors .= '<li>Description may not be blank</li>';
         if ($focusId == '') $focusId = '#desc';
      }
      if ($link == '') {
         $errors .= '<li>Folder name may not be blank</li>';
         if ($focusId == '') $focusId = '#link';
      }

      //make the link string into a valid relative link pointing to a directory
      $link = $link . "/";

      if($errors == "") {
         $insQuery = "insert into myLabs (`title`,`desc`,`link`) values(?,?,?)";
         $statement = $db->prepare($insQuery);
         $statement->bind_param("sss", $lastNameForDb, $firstNamesForDb, $dobForDb);
         $statement->execute();
         $statement->close();
      }
   }
?>

<!-- Form to add labs if admin -->
<?php
   if($_SESSION["isAdmin"] == true) {
      echo
      '<div class="block">
         <h3>Add New Lab</h3>
         <form id="addLabForm" name="addLabForm" autocomplete="off" action="" method="post">
            <label for="title">Lab title:</label>
            <input type="text" name="title" id="title">
            <br>
            <label for="desc">Short description:</label>
            <input type="text" name="desc" id="desc">
            <br>
            <label for="link">Name of the folder associated with this lab:</label>
            <input type="text" name="link" id="link">
            <br>
            <input type="submit" value="Add Lab" id="add" name="add">
         </form>
      </div>';

      if ($errors != '') {
         echo '<div class="messages"><h4>Lab could not be added, please correct the following errors:</h4><ul>';
         echo $errors;
         echo '</ul></div>';
         echo '<script type="text/javascript">';
         echo '  $(document).ready(function() {';
         echo '    $("' . $focusId . '").focus();';
         echo '  });';
         echo '</script>';
      }
   }
?>



<!-- Content div to be filled using PHP -->
<div class="block" title="Links to all my labs! This list is inserted here using PHP!">
   <p>
      This is the ITWS-1100 labs folder landing page.
   </p>
   <ul>
      <?php
         $query = 'SELECT * FROM `myLabs`';
         $result = $db->query($query);
         $numRecords = $result->num_rows;

         for ($i = 0; $i < $numRecords; $i++) {
            $record = $result->fetch_assoc();
            echo '<li><a href="' . $record["link"] . '">';
            echo $record["title"] . ' (' . $record["desc"] . ')';
            echo '</a></li>';
         }
      ?>
   </ul>
</div>

<?php
   include($_SERVER['DOCUMENT_ROOT'] . "/iit/quiz3/includes/foot.inc.php");
?>