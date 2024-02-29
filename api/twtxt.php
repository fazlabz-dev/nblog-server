# nick        = My Nanoblog
# url         = https://example.com/twtxt.php
# avatar      = https://example.com/avatar.png
# description = My Twtxt feed for my Nanoblog

<?php
require "config.php";
header("Content-Type: text/plain; charset=utf-8");
// $query = "SELECT * FROM post";
$query = "SELECT * FROM post ORDER BY id DESC";
$result = $con->query($query);
$posts = array();
while($row = mysqli_fetch_assoc($result)) {
    $posts[] = $row;
  echo date("c", strtotime($row["date"])) . "\t" . $row["content"] . "\n";
}
?>