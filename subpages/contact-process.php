<?php

require "contact-database.php";

$name = ucwords($_POST["name"]);

$email = $_POST["email"];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die();
}
$message = $_POST["message"];
$result = mysqli_query($conn, "SELECT Email from ContactTable WHERE Email =    '$email'");

if (mysqli_num_rows($result) > 0) {
    die("error");
}

$query = 'INSERT INTO ContactTable (Name, Email, Message) VALUES ("%s", "%s", "%s")';
$query = sprintf($query, $name, $email, $message);
if ($result = mysqli_query($conn, $query)) {
//        echo 'Inserted record successfully';

}
?>