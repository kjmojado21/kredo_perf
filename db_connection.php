<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "kredo_perf";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn->error);
?>