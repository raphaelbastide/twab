<?php
  require 'config/config.php';
  if (file_exists($messageFile)) {
    $f = fopen($messageFile, 'r');
    $lastMessage = fgets($f);
    fclose($f);
  }
  $themePage = "themes/".$config->themeName."/index.php";
  if (file_exists($themePage)) {
    include($themePage);
  }else {
    echo "Theme doesn’t exist!<br>";
    echo "Check <code>themeName</code> in config/config.php";
  }
?>
