
<?php
    if (isset($_POST['inscription'])){
        if(!empty($_POST['login'])){
            if(!empty($_POST['pass1'])){
                if(!empty($_POST['pass2'])){
                    // Verifier
                    if($_POST['pass1'] === $_POST['pass2']){
                        $affiche_trajet = $bdd->prepare("SELECT * FROM agents WHERE login = ?");
                        $affiche_trajet->execute(array($_POST["login"])); 
                        $req_ok = $affiche_trajet->rowCount();
                        if ($req_ok != 1){
                            // Ecrire dans la BDD
                            $insert_login = $bdd->prepare("INSERT INTO agents(login, mdp) VALUES (?, ?)");
                            $insert_login->execute(array($_POST['login'], $_POST['pass1']));
                            // Redirection
                            header("location: index.php");
                        }else{
                            $erreur = "Ce login existe déja.";
                        }
                    }else{
                        $erreur = "* Mot de passe différent";
                    }
                }else{
                    $erreur = "* veuillez confirmer votre mot de passe.";
                }
            }else{
                $erreur = "* Veuillez choisir un mot de passe.";
            }
        }else{
            $erreur = "* Veuillez choisir un login.";
        }
    }

?>
<section id="main-content">
    <section class="wrapper wrapper-login">
        <div class="pt-inscription">
            <div class="row">
                <div class="col-sm-4">
                    <!-- col vide -->
                </div>
                <!-- FORM -->
                <div class="col-sm-4"> 
                <div class="ico-login">
                            <img class="" src="assets/img/sports-car.svg" width="200px" alt="">
                        </div>
                    <div class="titre-page">
                        <h2><i class="fa fa-sign-in pad-ico-profil"></i><span>Inscription</span><h2>
                    </div>
                    <form class="form-horizontal" action="#" method="POST">
                        <div class="form-group">
                            <label class="control-label" for="login">Choisissez un login:</label>
                                <input type="text" class="form-control" name="login" id="login" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="pwd1">Choisissez un mot de passe:</label>
                                <input type="password" class="form-control" name="pass1" id="pwd1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="pwd2">confirmez votre mot de passe:</label>
                                <input type="password" class="form-control" name="pass2" id="pwd2" placeholder="">
                        </div>
                        <div class="form-inline"> 
                            <div class="col-sm-offset-2">
                                <button type="submit" name="inscription" class="btn btn-default" >Inscription</button>
                            </div>
                            <div class="col-sm-offset-2">
                                <a href="index.php"><button type="submit" name="" class="btn btn-default" ></button>Retour </a>
                            </div>

                        </div>
                    </form>
                    <div class="raw erreur">
                        <?php if (isset($erreur)){ echo "<p class='erreur'>" . $erreur . "</p>"; }; ?>
                    </div>
                </div>
                <div class="col-sm-4">
                    <!-- col vide -->
                </div>
            </div>
        </div>
    </section>
</section>
