<?php
$host = "localhost";
$username = "localhost";
$password = "";
$database = "exhibition_db"; 

$dbconn = mysqli_connect($host, $database);

if (!$dbconn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>