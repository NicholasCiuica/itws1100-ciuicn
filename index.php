<?php
//session superglobal storage to keep users logged in
  session_start();
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

  //remove user session info if user chooses to sign out
  if(isset($_POST["signout"])) {
    $_SESSION["isSignedIn"] = false;
    $_SESSION["isAdmin"] = false;
    $_SESSION["loginName"] = "";
  }
  //load up the user if they are signed in, otherwise set to defaults
  $isSignedIn = !empty($_SESSION["isSignedIn"]) ? $_SESSION["isSignedIn"] : false;
  $isAdmin = !empty($_SESSION["isAdmin"]) ? $_SESSION["isAdmin"] : false;
  $loginName = !empty($_SESSION["loginName"]) ? $_SESSION["loginName"] : "";
  
  $invalidLogin = false;
  $loginUser = "";
  $loginPass = "";

  if(isset($_POST["signin"])) {
    $loginUser = trim($_POST["user"]);
    $loginPass = trim($_POST["pass"]);

    //search for the user in db using their input credentials
    $query = 'SELECT * FROM mySiteUsers WHERE user = "' . $loginUser . '" AND pass = "' . $loginPass . '" LIMIT 1';
    $result = $db->query($query);
    $numRecords = $result->num_rows;
    $record = $result->fetch_assoc();

    //check if this user exists
    if($numRecords > 0) {
      $isSignedIn = true;
      $loginName = htmlspecialchars($record["name"]);
      if($record["type"] == "admin") {
        $isAdmin = true;
      }
    //if they don't, display an error message
    } else {
      $invalidLogin = true;
    }

    $_SESSION["isSignedIn"] = $isSignedIn;
    $_SESSION["isAdmin"] = $isAdmin;
    $_SESSION["loginName"] = $loginName;
  }
?>

<?php
  include($_SERVER['DOCUMENT_ROOT'] ."/iit/quiz3/includes/nav.inc.php");
?>

<!-- Have user sign in with a form, or if they're already signed in, welcome them and display signout button -->
<div class="block">
  <?php
    //signout button
    if($isSignedIn) {
      echo '<h3>Welcome, ' . $loginName . '!</h3>';
      echo
      '<form id="signOutForm" name="signOutForm" action="./" method="post">
        <input type="submit" value="Sign Out" id="signout" name="signout">
      </form>';
    } 
    //signin form
    else {
      echo '<h3>Sign in</h3>';
      echo
      '<form id="signInForm" name="signInForm" autocomplete="off" action="" method="post">
          <label for="user">Username:</label>
          <input type="text" name="user" id="user">
          <br>
          <label for="pass">Password:</label>
          <input type="password" name="pass" id="pass">
          <br>
          <input type="submit" value="Sign In" id="signin" name="signin">
      </form>';
      if($invalidLogin) {
        echo '<br><p class="messages">ERROR: Invalid username or password. Please try again.</p>';
      }
    }
  ?>
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