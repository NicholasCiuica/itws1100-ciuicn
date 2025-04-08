<?php
  //using server root to get to includes
    //https://stackoverflow.com/questions/3952590/php-how-to-find-application-root
include($_SERVER['DOCUMENT_ROOT'] . "/iit/quiz3/includes/head.inc.php");
?>

<!-- User must log in -->
<!-- https://www.w3schools.com/js/js_popup.asp -->
<script>
  function loginPopup() {
    const username = prompt("Please enter your username:");
    const password = prompt("Please enter your password:");
    let valid = false;
    
    //send to php to validate with the users database
    $.ajax({
      type: "POST",
      url: "/iit/quiz3/validate.php",
      data: {
        "user": username,
        "pass": password
      },
      success: function(result) {
        console.log(result);
      }
    });

    if(valid) {
      alert("Welcome " + username + "!");
    } else {
      alert("Failed to log in, username or password is incorrect. Please try again!");
      loginPopup();
    }
  }
  loginPopup();
</script>

<header>
  <a href="/iit/"><h3>Nick's Personal Website</h3></a>
  <h1>Homepage</h1>
  <p>Navigate using the dropdown menus below, click the underlined text above to return here</p>
</header>

<?php
include($_SERVER['DOCUMENT_ROOT'] ."/iit/quiz3/includes/nav.inc.php");
?>

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