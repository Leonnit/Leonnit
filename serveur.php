<?php
    $serveur="localhost";
    $user="root";
    $pass="";
    $dbname="voiture"; 

    $conn = new mysqli($serveur, $user, $pass, $dbname);
    if($conn->connect_error){
        die("erreur du connection au base de donne".$conn->connect_error);
    }else{
        //echo"connection reussie";  
    }
?>