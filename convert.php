<!DOCTYPE html>
<html>
  <head>
    <title>Image To Ascii</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <h1>ASCII Converter</h1>
    <div class="header">
      &nbsp;<br><br><br>
    </div>
    <?php
        $target_file = basename($_FILES["fileSelection"]["name"]);
        $command = escapeshellcmd("python3 HtmlGenerator.py ".$_FILES["fileSelection"]["tmp_name"]);
        echo shell_exec($command);
        //move_uploaded_file($_FILES["fileSelection"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . 'uploads/' . $_FILES["fileSelection"]["name"]);
        //$command = escapeshellcmd("python3 HtmlGenerator.py "."test.jpg");//$_FILES["fileSelection"]["tmp_name"]);//$_SERVER['DOCUMENT_ROOT'] . 'uploads/' . $_FILES["fileSelection"]["name"]);
        //shell_exec($command);
        //exit;
    ?>
    <form action="index.html">
      <input type="submit" value="Back">
    </form>
    <div class="header">
      &nbsp;<br><br><br>
    </div>
  </body>
</html>
