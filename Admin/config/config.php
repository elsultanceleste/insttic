<?php

    $host= "localhost";
    $user= "root";
    $pass= "";
    $db= "insttic2";

    try {
        $dns= "mysql:host=$host;dbname=$db";
        $conn= new PDO($dns, $user, $pass);
        if($conn){
            // echo "Conexión exitosa";
        }else{
            echo "Error en la conexión";
        }
    } catch (PDOException $e) {
        echo "". $e->getMessage();
    }


?>