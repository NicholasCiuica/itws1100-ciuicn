<?php
include($_SERVER['DOCUMENT_ROOT'] . "/iit/quiz3/includes/head.inc.php");
?>

<header>
   <a href="/iit/"><h3>Nick's Personal Website</h3></a>
   <h1>Lab 4</h1>
   <p>Intro to ITWS, Labs</p>
</header>

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/iit/quiz3/includes/nav.inc.php");
?>

<div class="block">
   <p>
      In lab 4 I practiced making XML feeds using RSS and Atom. I populated these files with information about my labs so far.
   </p>
</div>

<div class="block">
   <p>
      Links to my feeds:<br><br>
      <a href="rssfeed.xml" target="_blank">rssfeed.xml</a><br>
      <a href="atomfeed.xml" target="_blank">atomfeed.xml</a>
   </p>
</div>

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/iit/quiz3/includes/foot.inc.php");
?>