<?php
    //insertion du serveur du connectiondu base de donne
    include("model.php");
    include("serveur.php");
//condition si le bouton a ete clicke
    if(isset($_POST['envoyer'])){
    //creation d'objet appartire du classe Personne
        $voiture= new  Voiture();  
        $voiture->se_connecte($matricule=$_POST['matricule'], $couleur=$_POST['couleur'], $chevaux=$_POST['chevaux'], $type=$_POST['type']);
        $sql= $conn->prepare("INSERT INTO `voiture`(matricule, couleur, chevaux,`type`) VALUES (?, ?, ?, ?)");
        $sql->bind_param("ssss",$matricule, $couleur, $chevaux, $type);
        $sql->execute();
        echo"enregistrement termine";
        $sql->close();
        $conn->close();
    } 
?> 