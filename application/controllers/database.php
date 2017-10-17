<?php
    $dsn = 'mysql:host=localhost;dbname=xeonsold_kaz_blog'; //Connects to local database
    $username = 'xeonsold_kasuma';
    $password = '111324';
    
    $db = new PDO($dsn, $username, $password); //Creates PDO Object
    
?>
