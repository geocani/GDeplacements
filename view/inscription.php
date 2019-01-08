
<?php
    if (isset($_POST['inscription'])){
        if(!empty($_POST['new-login'])){
            if(!empty($_POST['new-pass'])){
                if(!empty($_POST['new-pass2'])){
                    // Verifier
                    if($_POST['new-pass'] === $_POST['new-pass2']){
                        $affiche_trajet = $bdd->prepare("SELECT * FROM agents WHERE login = ?");
                        $affiche_trajet->execute(array($_POST["new-login"])); 
                        $req_ok = $affiche_trajet->rowCount();
                        if ($req_ok != 1){
                            // Ecrire dans la BDD
                            $insert_login = $bdd->prepare("INSERT INTO agents(login, mdp) VALUES (?, ?)");
                            $insert_login->execute(array($_POST['new-login'], $_POST['new-pass']));
                            // Redirection
                            // header("location: index.php");
                            echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
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

<section class="pg" id="">
    <section class="wrapper wrapper-login">
        <div class="pt-login">
            <div class="row">
                <div class="col-sm-4">
                    <!-- col vide -->
                </div>
                <!-- FORM -->
                <div class="col-sm-4"> 
                    <div class="form-group">
                        <div class="ico-login">
                            <img class="" src="assets/img/sports-car.svg" width="200px" alt="">
                        </div>
                    </div>
                    <form class="form-horizontal" action="#" method="POST">
                        <div class="form-group">
                            <label class="control-label" for="login">Login:</label>
                                <input type="text" class="form-control" name="new-login" id="login" placeholder="Choisisez un login" value="<?php if(isset($_POST['new-login'])) { echo $_POST['new-login'];} ?>">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="pwd">Mot de passe:</label>
                                <input type="password" class="form-control" name="new-pass" id="pwd" placeholder="choisisez un mot de passe">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="pwd">Confirmation:</label>
                                <input type="password" class="form-control" name="new-pass2" id="pwd" placeholder="Confirez votre mot de passe">
                        </div>
                        <div class="form-group"> 
                            <div class="col-sm-offset-2">

                            </div>
                        </div>
                        <div class="form-group"> 
                            <div class="col-sm-offset-2">
                                <button type="submit" name="inscription" class="btn btn-style" >Inscription</button>
                                <a href="index.php" class="btn btn-style">Annuler</a>
                            </div>
                        </div>
                    </form>
                    <div class="raw erreur">
                        <?php if (isset($erreur)){ echo "<p class='erreur'>" . $erreur . "</p>"; }; ?>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <!-- col vide -->
                </div>
            </div>
        </div>
    </section>
</section>