<?php
require "config.php";
$query = "UPDATE post SET `content` = \"" . htmlspecialchars($_POST["content"], ENT_QUOTES) . "\" WHERE `id` = " . $_GET["id"] . "";
if ($_POST["content"] != null) {
   $result = $con->query($query);
   header("Location: /");
   exit;
} else {
   echo "Your post must not be blank!";
}
?>