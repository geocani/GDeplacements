<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
if (isset($_POST['submit'])){
    if (!empty($_POST["nom"])){
        $nom = $_POST["nom"];
        echo $nom;
        if (!empty($_POST["prenom"])){
            if (!empty($_POST["sexe"])){
                echo "ok";
            }else{
                echo "erreur: sexe";
            }
        }else{
            echo "erreur: prenom";
        }
    }else{
        echo "erreur : nom";
    }
}


?>



    <form action="" method="POST">
        <input type="text" name="nom" placeholder="Nom" value="<?php if(isset($nom)) { echo $nom;} ?>">
        <input type="text" name="prenom" placeholder="Prenom">
        <input type="text" name="sexe" placeholder="Sexe">
        <input type="submit" name="submit" value="envoyer">
    </form>
</body>
</html>