<?php
require "config.php";
require "auth.php";
if (authorize()) {
   if ($_POST["content"] != null) {
      $raw = htmlspecialchars($_POST["content"], ENT_QUOTES);
      $stmt = $con->prepare("INSERT INTO post (date, content) VALUES (CURDATE(), ?)");
      $stmt->bind_param("s", $raw);
      $stmt->execute();
      $stmt->close();
      header("Location: /");
      exit;
   } else {
      echo "Your post must not be blank!";
   }
} else {
   header('WWW-Authenticate: Basic realm="NBlog Server"');
   header('HTTP/1.0 401 Unauthorized');
   echo 'Couldn\'t authorize';
}
?>