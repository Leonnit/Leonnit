<?php  
    $conn=new PDO('mysql:host=localhost;dbname=voiture;', 'root', '');
    $alluser=$conn->query(' SELECT * FROM utilisateur ORDER BY id DESC');
    if(isset($_POST['s']) AND !empty($_POST['s']) ){
        $recherche=htmlspecialchars($_POST['s']);
        $alluser=$conn->query('SELECT pseudo FROM utilisateur WHERE pseudo LIKE "%'. $recherche .'%" ORDER BY id DESC');

    }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="recherch.php" method="post">
        <input type="text"name="s" placeholder="Recherche l'utilisateur"  required>
        <input type="submit" value="Recherche" name="chercher">
    </form>
    <section class="afficher_ Utilisateur">
        <?php
           if($alluser->rowCount()> 0){
             while($row = $alluser->fetch()){
                ?>
                <p><?= $row['pseudo']; ?></p>
                <?php
             }
           }else{
            ?>
            <p>Aucune utilisateur touve !</p>
            <?php
           }
        
        ?>
    </section>
     
</body>
</html>   