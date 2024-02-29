<?php
require "config.php";
$query = "DELETE FROM post WHERE id = " . $_GET["id"] . "";
if ($_GET["id"] != null) {
   $result = $con->query($query);
   header("Location: /");
   exit;
} else {
   echo "No ID specified.";
}
?>