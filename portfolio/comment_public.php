<?php
    $comments = file("comments.txt"); 
    $comments_per_page = 9; 

    if (isset($_GET["page"])) {
      $current_page = $_GET["page"];
    } else {
      $current_page = 1;
    }

    $start_comment = ($current_page - 1) * $comments_per_page;
    $end_comment = $start_comment + $comments_per_page;

    echo "<div  class='comment2'>";
    for ($i = $start_comment; $i < $end_comment; $i++) {
      if (isset($comments[$i])) {
        echo "<p style='background-color:rgb(46, 41, 29);'>" . $comments[$i] . "</p>";
      }
    }
    echo "</div>";

    $num_pages = ceil(count($comments) / $comments_per_page);
    echo "<div id='pagination'>";
    for ($i = 1; $i <= $num_pages; $i++) {
      if ($i == $current_page) {
        echo "<span>$i</span> ";
      } else {
        echo "<a href=\"?page=$i\">$i</a> ";
      }
    }
    echo "</div>";
?>