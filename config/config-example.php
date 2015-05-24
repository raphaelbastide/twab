<?php
  $config = new stdClass();
  // Edit those lines and rename config-example to config.php
  $config->userName = 'foxy';
  $config->userPass = 'ilovechickens';
  // This is where twab is hosted on your server
  // Don’t forget the slash `/` at the end of the URL
  $config->userUrl = "http://foxy.net/twab/";
  // Do not change that
  $messageFile = $config->userName.'.plan';
?>
