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
      move_uploaded_file($_FILES["fileSelection"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . 'uploads/' . $_FILES["fileSelection"]["name"]);
      $command = escapeshellcmd("python3 HtmlGenerator.py "$_SERVER['DOCUMENT_ROOT'] . 'uploads/' . $_FILES["fileSelection"]["name"]);
      shell_exec($command);
      exit;
    ?>
  </body>
</html>
