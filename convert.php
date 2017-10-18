<!DOCTYPE html>
<html>
  <head>
    <title>Image To Ascii</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <h1>ASCII Converter</h1>
    <?php
      $target_file = basename($_FILES["fileSelection"]["name"]);
      $command = escapeshellcmd("python3 HtmlGenerator.py ".$_FILES["fileSelection"]["tmp_name"]);
      exit;
    ?>
  </body>
</html>
