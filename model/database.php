<?php
 $dsn= 'mysql:host=127.0.0.1:3307;dbname=assignment_traker';
 $username = 'root';
 try 
 {
    $db = new PDO($dsn,$username);
 }
 catch(PDOException $e)
 {
        $error= "Database Error :";
        $error .=$e->getMessage();
        include ('view/error.php');
        exit();
 }