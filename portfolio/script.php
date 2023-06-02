<?php
    ob_start();
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $comment = $_POST['impression'];
        echo $comment;
        $file = fopen('comments.txt', 'a');
        fwrite($file, "Ім'я: ".$name."\n");
        fwrite($file, "Враження: ".$comment."\n");
        fwrite($file, "====================\n");
        fclose($file);
        header("Location:".$_SERVER['HTTP_REFERER']."");
    }
    ob_end_flush();
 
?>

