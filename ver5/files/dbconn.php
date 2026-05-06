<?php
$dbname='alphavcp_iit-mat';
$link=mysqli_connect("localhost","alphavcp_iit-mat","RAM111ramram@1") or die("Couldn't make connection.");
$db = mysqli_select_db($link ,$dbname) or die("Couldn't select database");
?>