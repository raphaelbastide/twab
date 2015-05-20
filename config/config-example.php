<?php
  $config = new stdClass();
  // Edit the following lines and rename config-example to config.php

  // Your username
  $config->userName = 'twabber';

  // Your password
  $config->userPass = 'pleaseChangeMe';

  // The theme folder name you want to use
  $config->themeName = 'default';

  // This is where twab is hosted on your server
  // Don’t forget the slash `/` at the end of the URL
  $config->userUrl = "http://default.net/twab/";

  // Do not change that :)
  $config->themeUrl = $config->userUrl."themes/".$config->themeName."/";
  $messageFile = $config->userName.'.plan';
?>
