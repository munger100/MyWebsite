<?php

require "contact-database.php";

$name = $_POST['name'] . "-main";
$query = "Select * From ContentTable";
$result = mysqli_query($conn, $query);

// Do stuff with $result
//$row = mysqli_fetch_assoc($result);
//echo $row['content'];
//echo $result['index-main'];

while ($line = mysqli_fetch_array($result)) {
    echo $line[$name] . '<br/>';
}
?>