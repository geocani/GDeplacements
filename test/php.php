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
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
        }
    ?>

    <form action="" method="POST">
        <input type="text" name="nom" id="">nom 
        <input type="text" name="prenom" id="">prenom 
        <input type="submit" name="submit" id="">
    </form>

        <p>
            <?php
                if (isset($nom) AND isset($prenom)){
                    echo $nom;
                    echo $prenom;
                }
            ?>
        </p>

</body>
</html>