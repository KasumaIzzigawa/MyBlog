<?php
    include 'application/controllers/config.php';
    
    require 'application/controllers/database.php';
    
    
    $article_id = 2;
    
    //Get content for blog
    $query = "SELECT articleName, articleDate, articleContent
              FROM articles
              WHERE articleID = $article_id";
    $blogs = $db->query($query);
    $blog = $blogs->fetch();
    
    include 'application/views/index.html';
?>

