<?php
require 'config.php';
header('Content-Type: application/rss+xml; charset=utf-8');
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
?>
<rss version="2.0">
    <channel>
        <title>My Nanoblog</title>
        <description>My RSS feed for my Nanoblog</description>
        <link>https://example.com</link>
<?php
// $query = "SELECT * FROM post";
$query = "SELECT * FROM post ORDER BY id DESC";
$result = $con->query($query);
$posts = array();
while($row = mysqli_fetch_assoc($result)) {
    $posts[] = $row; ?>
            <item>
                <title><?php echo $row["content"] ?></title>
                <pubDate><?php echo $row["date"] ?></pubDate>
                <guid><?php echo $row["id"] ?></guid>
                <link>https://example.com<?php echo "#" . $row["id"] ?></link>
            </item>
<?php } ?>
    </channel>
</rss>