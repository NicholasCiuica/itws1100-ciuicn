<?php
  //https://gist.github.com/sumanthkumarc/2de2e2cc06c648a9f52c121501a181df
  /*
   * Function to sanitize the file name for url and file name safe.
   *
   * @param string $filename
   *   The unsafe filename is taken as input
   *
   * @return string
   *   The safe file name is returned.
   */
  function filename_sanitizer($unsafeFilename) {
  
    // our list of "unsafe characters", add/remove characters if necessary
    $dangerousCharacters = array(" ", '"', "'", "&", "/", "\\", "?", "#", "<", ">");
  
    // every forbidden character is replaced by an underscore
    $safe_filename = str_replace($dangerousCharacters, '_', $unsafeFilename);
  
    return $safe_filename;
  }
?>
