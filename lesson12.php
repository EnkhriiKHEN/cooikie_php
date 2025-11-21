<?php
$oldName = isset($_COOKIE["username"]) ? $_COOKIE["username"] : "";
?>

<form action="lesson13.php" method="post">
    <input type="text" name="username" value="<?php echo $oldName; ?>">
    <input type="submit" value="Save">
</form>