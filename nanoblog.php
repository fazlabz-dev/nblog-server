<?php
require "config.php";
header("Content-Type: application/json; charset=utf-8");
// $query = "SELECT * FROM post";
$query = "SELECT * FROM post ORDER BY id DESC";
$result = $con->query($query);
$posts = array();
while($row = mysqli_fetch_assoc($result)) {
    $posts[] = $row;
}
echo json_encode($posts);
?>