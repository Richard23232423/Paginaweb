<?php
    $server = "servidor24.mysql.database.azure.com";
    $user = "richard";
    $pass = "richard24*";
    $db = "proyecto";

    try {	    
        $conn = new PDO("mysql:host=$server;dbname=$db", $user, $pass);        
        // Establece el modo de error del PDO a excepcion
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {        
    	echo "Fallo de conexion: " . $e->getMessage();
        
        }









?>
