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
      move_uploaded_file($_FILES["fileSelection"][$target_file], $target_file)
      echo("<h2>".$target_file."</h2>");
      $command = escapeshellcmd("python3 HtmlGenerator.py testImgs/test.jpg");
      $newURL = shell_exec($command);
      //header("Location: ".$newURL);
      //exit;
    ?>
  </body>
</html>
