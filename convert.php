<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image To Ascii</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <header>
      <h1>Jsonet - <span class="page-qualifier">Image ASCII</span></h1>
      <?php include $_SERVER['DOCUMENT_ROOT'].'/navbar.html' ?>
    </header>
    <?php
        ini_set("display_errors", 1);
        error_reporting(E_ALL);
        $dest = "/var/www/html/ascii/art";
        $filename = basename($_FILES["fileSelection"]["name"]);
        $uploadSuccess = move_uploaded_file($_FILES["fileSelection"]["tmp_name"], "$dest/$filename");
        if (!$uploadSuccess) {
            echo "failed to move uploaded file";
            // Stop running?
        }
        $command = escapeshellcmd("python3 image_convert.py $dest/$filename");
        echo shell_exec($command);
    ?>
    <form action="index.html">
      <input type="submit" value="Back">
    </form>
    <footer>
      <?php include $_SERVER['DOCUMENT_ROOT'].'/footer.html' ?>
    </footer>
  </body>
</html>
