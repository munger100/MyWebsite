<?php

$server = "localhost";
$db = "mungerm";
$usr = "mungerm";
$pwd = "worriedFalcon";
$conn = mysqli_connect($server, $usr, $pwd);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully\n";

// Select Database
mysqli_select_db($conn, $db) or die("Database selection failed.");

//echo "Database selected successfully\n";

?>