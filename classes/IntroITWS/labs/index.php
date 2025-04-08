<?php
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

<!-- Content div to be filled using PHP -->
<div class="block" title="Links to all my labs! This list is inserted here using AJAX!">
   <p>
      This is the ITWS-1100 labs folder landing page.
   </p>
   <ul>
      <?php
         include($_SERVER['DOCUMENT_ROOT'] . "/iit/quiz3/conn.php");
         $db = new mysqli($hostname, $username, $password, $database);

         if ($db->connect_error) {
            echo '<div class="messages">Could not connect to the database. Error: ';
            echo $db->connect_error . '</div>';
         }

         $query = 'SELECT * FROM `myLabs` ORDER BY `title`';
         $result = $db->query($query);
         $numRecords = $result->num_rows;

         for ($i = 0; $i < $numRecords; $i++) {
            $record = $result->fetch_assoc();
            echo '<li><a href="' + $record["link"] + '">';
            echo $record["title"] + ' (' + $record["desc"] + ')';
            echo '</a></li>';
         }
      ?>
   </ul>
</div>

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/iit/quiz3/includes/foot.inc.php");
?>