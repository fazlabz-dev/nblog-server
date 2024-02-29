<?php
require "config.php";
require "auth.php";
if (authorize()) {
   if ($_GET["id"] != null) {
      $stmt = $con->prepare("DELETE FROM post WHERE id = ?");
      $stmt->bind_param("s", $_GET["id"]);
      $stmt->execute();
      $stmt->close();
      header("Location: /");
      exit;
   } else {
      echo "No ID specified.";
   }
} else {
   header('WWW-Authenticate: Basic realm="NBlog Server"');
   header('HTTP/1.0 401 Unauthorized');
   echo 'Couldn\'t authorize';
}
?>