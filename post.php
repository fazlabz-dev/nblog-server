<?php
require "config.php";
$query = "INSERT INTO post (date, content) VALUES (CURDATE(), \"" . htmlspecialchars($_POST["content"], ENT_QUOTES) . "\")";
if ($_POST["content"] != null) {
   $result = $con->query($query);
   header("Location: /");
   exit;
} else {
   echo "Your post must not be blank!";
}
?>