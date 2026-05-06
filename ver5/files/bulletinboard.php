<?php
echo '<h3>LIVE FEED</h3>';
include 'docroot.php';
include 'dbconn.php';
$result = mysqli_query($link, 'SELECT * FROM guestbook ORDER BY date DESC') or die("Fetch Failed:" . mysql_error());
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { 
    echo '<a href="https://www.alphaclasses.com/guestbook.php?id='.$row["id"].'" target=_blank>'.$row["id"].'</a><font color=blue>@'.$row["name"].'</font> posted a message on <font color=green>'.$row["date"].'</font><br>'.$row["message"].'<br><br>';
    }
?>
