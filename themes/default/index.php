<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<meta name="twab-userfile" content="<?php echo $config->userUrl.$messageFile?>">
  <link href="favicon.ico" rel="icon" type="image/x-icon" />
  <meta http-equiv="refresh" content="30" >
  <title><?php echo $lastMessage ?></title>
</head>
<body>
  <p>Microblogging in a browser tab.</p>
  <p>Leave this page opened to read my feed in the tab!</p>
  <p>My last messages:</p>
  <pre>
<?php
if (file_exists($messageFile)) {
include($messageFile);
}else {
echo 'No message yet. Post your first on /new.php';
}
?>
  </pre>
  <a href="http://lab.raphaelbastide.com/twab/whythisiscool.html">Why this is cool?</a>
</body>
<script src="js/autolink.js"></script>
<script>
  // Autolink the content of <pre>
  var elements = document.querySelectorAll('pre');
  Array.prototype.forEach.call(elements, function(el, i){
      var text = el.innerHTML;
      el.innerHTML = text.autoLink();
  });
</script>
</html>
