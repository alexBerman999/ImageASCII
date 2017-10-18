<?php
$tmp_name = $_FILES["fileSelection"]["tmp_name"];
$name = basename($_FILES["fileSelection"]["name"]);
echo $name;
echo move_uploaded_file($tmp_name, $name)
?>
