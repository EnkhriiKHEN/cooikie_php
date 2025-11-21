<?php
$name = $_POST["username"];
setcookie("username", $name, time() + 86400); // 1 өдөр
echo "Name saved!";
?>