<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="favicon.ico" rel="icon" type="image/x-icon" />
  <title>Twab</title>
</head>
<body>
   <?php
  require 'config.php';
  $password = $_POST['password'];
  $message = $_POST['message'];
  if ($password==$config->userpass) {
    $file_data = $message."\n";
    $file_data .= file_get_contents($messagefile);
    file_put_contents($messagefile, $file_data);
    fclose($messagefile);
    header("Location: ./");
    die();
  }
  else{
    echo "Wrong password…";
    }
  ?>
  </ul>
</body>
</html>
