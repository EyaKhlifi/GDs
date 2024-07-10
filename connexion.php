<?php
    $dns="mysql:host=localhost;dbname=parc-info";
    $login="root";
    $password="";
    try{
        $dbh=new PDO($dns,$login,$password);
       
    }
    catch(PDOException $e){
        die($e->getMessage());
    }
?>
