<?php
    $dbhost = 'localhost';
    $dbname = 'blog';
    $dbuser = 'root';
    $dbpswd = '';

    try{
        $db = new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpswd,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO:: ERRMODE_WARNING));
        
    }catch(PDOexception $e){
        die("Impossible de ce connecter à la base de données. Veuillez vérifier vos paramétres de connexion Data Base");
    }

?>