<?php
$name = $_POST["name"];
$name = ucwords($name);

$email = $_POST["email"];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die();
}

$message = $_POST['message'];

$filename = "contact.txt";

$file = fopen($filename, "a+");
/* json try
$existing = fread($file, filesize($filename));
$existing = file_get_contents($filename);
print_r("a" . $existing);
if($existing){
    $json = json_decode($existing);
}else{
    $json = [];
}

$json[] = [
 "name" => $name,
 "email" => $email,
 "message" => $message
];
*/
fwrite($file, "\nName: " . $name . "\nEmail: " . $email . "\nMessage: " . $message);

echo "Thank you!"
?>