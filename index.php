<?php
  //using server root to get to includes
    //https://stackoverflow.com/questions/3952590/php-how-to-find-application-root
include($_SERVER['DOCUMENT_ROOT'] . "/iit/quiz3/includes/head.inc.php");
?>

<header>
  <a href="/iit/"><h3>Nick's Personal Website</h3></a>
  <h1>Homepage</h1>
  <p>Navigate using the dropdown menus below, click the underlined text above to return here</p>
</header>

<!-- Validate user -->
<?php
  require($_SERVER['DOCUMENT_ROOT'] ."/iit/quiz3/conn.php");
  $db = new mysqli($hostname, $username, $password, $database);
  if ($db->connect_error) {
    echo 'Could not connect to the database. Error:' . $db->connect_error ;
  }
  $isSignedIn = false;
  $isAdmin = false;

  if(isset($_POST["submit"])) {
    $loginUser = $_POST["user"];
    $loginPass = $_POST["pass"];
    //These sources helped me formulate my SQL query
      //https://stackoverflow.com/questions/4253960/sql-how-to-properly-check-if-a-record-exists
      //https://stackoverflow.com/questions/11784289/does-it-make-sense-to-use-limit-1-in-a-query-select-1
    $query = 'SELECT * FROM mySiteUsers WHERE user = "' . $loginUser . '" AND pass = "' . $loginPass . '" LIMIT 1';
    $result = $db->query($query);
    $numRecords = $result->num_rows;
    $record = $result->fetch_assoc();

    if($numRecords > 0) {
      $isSignedIn = true;
    }
    if($record["type"] == "admin") {
      $isAdmin = true;
    }
  }
  echo $isSignedIn;
  echo $isAdmin;
?>

<!-- Have user sign in, or if they're already signed in, welcome them and display signout button -->
<?php
include($_SERVER['DOCUMENT_ROOT'] ."/iit/quiz3/includes/nav.inc.php");
?>

<div class="block">
  <h3>Sign in</h3>
  <form id="signInForm" name="signInForm" autocomplete="off" action="./" method="post">
    <label for="user">Username:</label>
    <input type="text" name="user" id="user">
    <label for="pass">Password:</label>
    <input type="text" name="pass" id="pass">
    <input type="submit" value="Sign In" id="submit" name="submit">
  </form>
</div>

<div class="block" title="I use an Azure cloud instance for deployment. Links to GitHub and Azure under External Links!">
  <p>
    This website uses GitHub as an intermediary between coding on my local machine and deploying code on a server.
    I've learned a lot about PHP and SQL while making this website! 
  </p>
</div>

<div class="block" title="These blocks will usually display more important info lol">
  <p>
    Some fun facts about me while you're here:
  </p>
  <ul>
    <li>I like art, especially drawing and watercolor</li>
    <li>I'm a big fan of CSS and I love box-shadow</li>
    <li>I can't stop playing modded Minecraft!!!</li>
    <li>I play Magic the Gathering with my friends sometimes</li>
  </ul>
</div>

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/iit/quiz3/includes/foot.inc.php");
?>