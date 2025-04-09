<?php
  //https://stackoverflow.com/questions/695438/what-are-the-safe-characters-for-making-urls
  function sanitizeFileName($unsafeName) {
    //reserved or unsafe characters for file names
    $unsafe = array("&", "$", "#", "@", "+", "?", ",", "=", ";", ":", "/", " ", "<", ">", "[", "]", "{", "}", "|", "\\", "^", "%");
    $safeName = str_replace($unsafe, '_', $unsafeName);
  
    return $safeName;
  }
?>
