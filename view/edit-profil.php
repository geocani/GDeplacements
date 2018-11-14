
<?php

    $affiche_agent = $bdd->prepare('SELECT * FROM agents WHERE id_agent = ?');
    $affiche_agent->execute(array($_GET["id_agent"]));
    while ($agent = $affiche_agent->fetch()){
        $id = $agent['id_agent'];
        $nom = $agent['nom'];
        $prenom = $agent['prenom'];
        $email = $agent['email'];
        $service = $agent['service'];
        $grade = $agent['grade'];
        $immatriculation = $agent['immatriculation'];
        $login = $agent['login'];
        $mdp = $agent['mdp'];
    }

    if (isset($_POST['edit-profil'])){
        
        // MODIF DATE TRAJET
        if(isset($_POST["edit-nom"])){
            $modif_agent = $bdd->prepare("UPDATE agents SET nom = ? WHERE id_agent = ? ");
            $modif_agent->execute(array($_POST['edit-nom'], $_GET["id_agent"]));
            header("location: historique.php?id=".$_SESSION['id_agent']);
        }
    }


?>




<section class="page" id="main-content">
    <section class="wrapper-debug">
        <!-- FORM -->
        <div class="cont-edition-profil">
        <div class="tete">
            <h2><i class="fa fa-clock-o pad-ico-profil"></i> Edition de votre profil <?php if(isset($id)) { echo $id;} ?> </h2>
        </div>
            <div class="pic-edition">
                <img class="img_avatar" src="assets/img/avatar.svg" alt="AVATAR">
            </div>
            <div class="container form-frais">
                <form action="" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="label-edition" for="inputGroupFile01">Avatar:</label>
                            <div class="input-group input-edit">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input input-edit" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choisissez une image</label>
                                </div>
                            </div>
                            <label class="label-edition" for="edit-nom">Nom:</label>
                            <input type="text" name="edit-nom" class="form-control input-edit" id="edit-nom" placeholder="" value="<?php if(isset($nom)) { echo $nom;} ?>">
                            <div class="erreur">
                                <?php if(isset($erreur)){echo $erreur;}?>
                            </div>
                            <label class="label-edition" for="edit-prenom">Prénom:</label>
                            <input type="text" name="edit-prenom" class="form-control input-edit" id="edit-prenom" placeholder="" value="<?php if(isset($prenom)) { echo $prenom;} ?>">
                            <div class="erreur">
                                <?php if(isset($erreur)){echo $erreur;}?>
                            </div>
                            <label class="label-edition" for="edit-nom">E-mail:</label>
                            <input type="email" name="edit-email" class="form-control input-edit" id="edit-email" placeholder="" value="<?php if(isset($email)) { echo $email;} ?>">
                            <div class="erreur">
                                <?php if(isset($erreur)){echo $erreur;}?>
                            </div>
                            <label class="label-edition" for="edit-login">Mot de passe:</label>
                            <input type="text" name="edit-login" class="form-control input-edit" id="edit-login" placeholder="" value="<?php //if(isset($date_trajet)) { echo $date_trajet;} ?>">
                            <div class="erreur">
                                <?php if(isset($erreur)){echo $erreur;}?>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="label-edition" for="edit-login">Login:</label>
                            <input type="text" name="edit-login" class="form-control input-edit" id="edit-login" placeholder="" value="<?php if(isset($login)) { echo $login;} ?>">
                            <div class="erreur">
                                <?php if(isset($erreur)){echo $erreur;}?>
                            </div>
                            <label class="label-edition" for="edit-nom">Service:</label>
                            <input type="text" name="edit-nom" class="form-control input-edit" id="edit-nom" placeholder="" value="<?php if(isset($service)) { echo $service;} ?>">
                            <div class="erreur">
                                <?php if(isset($erreur)){echo $erreur;}?>
                            </div>
                            <label class="label-edition" for="edit-prenom">Grade:</label>
                            <input type="text" name="edit-prenom" class="form-control input-edit" id="edit-prenom" placeholder="" value="<?php if(isset($grade)) { echo $grade;} ?>">
                            <div class="erreur">
                                <?php if(isset($erreur)){echo $erreur;}?>
                            </div>
                            <label class="label-edition" for="edit-nom">Immatriculation:</label>
                            <input type="email" name="edit-email" class="form-control input-edit" id="edit-email" placeholder="" value="<?php if(isset($immatriculation)) { echo $immatriculation;} ?>">
                            <div class="erreur">
                                <?php if(isset($erreur)){echo $erreur;}?>
                            </div>
                            <button name="edit-profil" type="submit" class="btn btn-primary btn-lg btn-block btn-style-edit">Modifier mes informations</button>
                        </div>
                    </div>   
                </form>
            </div>
        </div>
    </section>
</section>
        