<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <!-- GOOGLE FONT -->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <!-- BOOTSTRAP -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css' integrity='sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS' crossorigin='anonymous'>
    <!-- CUSTOM CSS -->
    <link rel='stylesheet' href='assets/css/style.css'>
    <title>CRUD</title>
</head>
<body>
    <?php

        // CONNEXION BDD
        try
        {
            $host = "localhost";
            $bddname = "crud";
            $log = "root";
            $pass = "";
            // $bdd = new PDO("mysql: host=$host; dbname=$bddname; charset=utf8", "$log", "$pass");
            $bdd = new PDO("mysql: host=localhost; dbname=surikat1_crud; charset=utf8", "surikat1_un", "AD*wcJj6raYE");
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }

        // INSCRIPTION
        if (isset($_POST["inscription"])){
            if (!empty($_POST["new-login"])){
                if (!empty($_POST["new-pass"])){
                    if (!empty($_POST["confirm-new-pass"])){
                        if($_POST['new-pass'] === $_POST['confirm-new-pass']){
                            // READ
                            $read = $bdd->prepare("SELECT * FROM membres WHERE login = ?");
                            $read->execute(array($_POST["new-login"])); 
                            $req_ok = $read->rowCount();
                            if ($req_ok != 1){
                                // Ecrire dans la BDD
                                $insert_login = $bdd->prepare("INSERT INTO membres(login, password) VALUES (?, ?)");
                                $insert_login->execute(array($_POST['new-login'], $_POST['new-pass']));
                                // Redirection

                                header("location: index.php");
                            }else{
                                $erreur = "Ce login existe déja.";
                            }
                            // $notifinsc = "inscription ok";
                        }else{
                            $notifinsc = "* Mot de passe différent";
                        }
                    }else{
                        $notifinsc = "confirmez le mod de passe";
                    }
                }else{
                    $notifinsc = "Entrez un password";
                }
            }else{
                $notifinsc = "Entrez un login";
            }
        }

        // CONNEXION
        if (isset($_POST["connexion"])){
            if (!empty($_POST["login"])){
                if (!empty($_POST["password"])){
                    // READ
                    $req = $bdd->prepare("SELECT * FROM membres WHERE login = ? AND password = ?");
                    $req->execute(array($_POST["login"], $_POST["password"]));
                    $req_ok = $req->rowCount();
                    if ($req_ok == 1){
                        echo "ok";
                        // header("location: logok.php"); 
                        
                        echo "<script type='text/javascript'>document.location.replace('logok.php');</script>";
                        echo "ok";
                    }else{
                        $notif =  "*Le nom d’utilisateur ou le mot de passe que vous avez entré n’est pas valide. Réessayez.";
                    }
                }else{
                    $notif = "Entrez un password";
                }
            }else{
                $notif = "Entrez un login";
            }
        }

        
    ?>



    <div class="container">
        <div class="row">
            <div class="titre">
                <h1>CRUD</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="rowform">
                    <h2>INSCRIPTION:</h2>
                    <form method="POST">
                        <input name="new-login" class="form-control form-control-sm" type="text" placeholder="Login">
                        <input name="new-pass" class="form-control form-control-sm" type="text" placeholder="Password">
                        <input name="confirm-new-pass" class="form-control form-control-sm" type="text" placeholder="Confirm Pw">
                        <div class="notif">
                            <?php                 
                                if (isset($notifinsc)){
                                echo $notifinsc;
                                }
                            ?>
                        </div>
                        <button name="inscription" type="submit" class="btn btn-primary">INSCRIPTION</button>
                    </form>
                    
                </div>
            </div>
            <div class="col-sm">
                <div class="rowform">
                    <h2>CONNEXION:</h2>
                    <form method="POST">
                        <input name="login" class="form-control form-control-sm" type="text" placeholder="Login">
                        <input name="password" class="form-control form-control-sm" type="text" placeholder="Password">
                        <div class="notif">
                            <?php                 
                                if (isset($notif)){
                                echo $notif;
                                }
                            ?>
                        </div>
                        <button name="connexion" type="submit" class="btn btn-primary">CONNEXION</button>
                    </form>
                </div>
            </div>
            <div class="col-sm">
                <div class="membres">
                    <h2>MEMBRES:</h2>
                    <?php
                        //MEMBRES
                        $reponse = $bdd->query('SELECT * FROM membres');
                        while ($donnees = $reponse->fetch())
                        {
                    ?>
                    <ul>
                        <li><?php echo $donnees['login']; ?>  </li>
                    </ul>
                    <?php
                        }
                        $reponse->closeCursor();
                    ?>



                        


                </div>
            </div>
        </div>
    </div>

    



<!-- BOOTSTRAP JS -->
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js' integrity='sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut' crossorigin='anonymous'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js' integrity='sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k' crossorigin='anonymous'></script>
<script src='js/script.js'></script>

</body>
</html>