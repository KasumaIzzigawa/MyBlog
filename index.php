<?php
    require 'application/database.php';
    
    
    $article_id = 2;
    
    //Get content for blog
    $query = "SELECT articleName, articleDate, articleContent
              FROM articles
              WHERE articleID = $article_id";
    $blogs = $db->query($query);
    $blog = $blogs->fetch();
    
    include 'application/index.html';
?>

