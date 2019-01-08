
<?php
    $affiche_agent = $bdd->prepare('SELECT * FROM agents WHERE id_agent = ?');
    $affiche_agent->execute(array($_SESSION['id_agent']));
    while ($agent = $affiche_agent->fetch()){
        $id = $agent['id_agent'];
        $avatar = $agent['avatar'];
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

        // Edit AVATAR
        if (isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])){
            $taille_max = 2097152; //Mo
            $extention_valide = array('jpg', 'jpeg', 'gif', 'png');
            // VERIF taille fichier
            if($_FILES['avatar']['size'] <= $taille_max){
                // VERIF extention - strtolower->tout en minuscule substr-> ignorer str aant point strrchr->prendre str apres le point
                $extention_upload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
                    if(in_array($extention_upload, $extention_valide)){ // in_array->si dans un tableau
                        $chemin = "assets/img/membres/avatar/".$_SESSION['id_agent'].".".$extention_upload;
                        $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin); // Deplave fichier
                            if($resultat){ // si move_uploaded_file ok
                                $updateavatar = $bdd->prepare('UPDATE agents SET avatar = :avatar WHERE id_agent = :id');
                                $updateavatar->execute(array(
                                'avatar' => $_SESSION['id_agent'].".".$extention_upload,
                                'id' => $_SESSION['id_agent']
                                ));
                            }else{
                                $erreur = "erreur transfert";
                            }
                    }else{
                        $erreur = "erreur format";
                    }
            }else{
                $erreur = "l'imge ne doit pas depasser 2Mo";
            }
        }
        // Edit NOM
        if(isset($_POST["edit-nom"])){
            $newnom = $_POST["edit-nom"];
            $modif_agent = $bdd->prepare("UPDATE agents SET nom = ? WHERE id_agent = ? ");
            $modif_agent->execute(array($newnom, $_SESSION['id_agent']));
            echo "<script type='text/javascript'>document.location.replace('historique.php?id=" .$_SESSION['id_agent']. "');</script>";
        }
        // Edit PRENOM
        if(isset($_POST["edit-prenom"])){
            $newprenom = $_POST["edit-prenom"];
            $modif_agent = $bdd->prepare("UPDATE agents SET prenom = ? WHERE id_agent = ? ");
            $modif_agent->execute(array($newprenom, $_SESSION['id_agent']));
            echo "<script type='text/javascript'>document.location.replace('historique.php?id=" .$_SESSION['id_agent']. "');</script>";
        }
        // Edit EMAIL
        if(isset($_POST["edit-mail"])){
            $newmail = $_POST["edit-mail"];
            $modif_agent = $bdd->prepare("UPDATE agents SET email = ? WHERE id_agent = ? ");
            $modif_agent->execute(array($newmail, $_SESSION['id_agent']));
            echo "<script type='text/javascript'>document.location.replace('historique.php?id=" .$_SESSION['id_agent']. "');</script>";
        }
        // Edit SERVICE
        if(isset($_POST["edit-service"])){
            $newservice = $_POST["edit-service"];
            $modif_agent = $bdd->prepare("UPDATE agents SET service = ? WHERE id_agent = ? ");
            $modif_agent->execute(array($newservice, $_SESSION['id_agent']));
            echo "<script type='text/javascript'>document.location.replace('historique.php?id=" .$_SESSION['id_agent']. "');</script>";
        }
        // Edit GRADE
        if(isset($_POST["edit-grade"])){
            $newgrade = $_POST["edit-grade"];
            $modif_agent = $bdd->prepare("UPDATE agents SET grade = ? WHERE id_agent = ? ");
            $modif_agent->execute(array($newgrade, $_SESSION['id_agent']));
            echo "<script type='text/javascript'>document.location.replace('historique.php?id=" .$_SESSION['id_agent']. "');</script>";
        }
        // Edit IMMATRICULATION
        if(isset($_POST["edit-immatriculation"])){
            $newimmatriculation = $_POST["edit-immatriculation"];
            $modif_agent = $bdd->prepare("UPDATE agents SET immatriculation = ? WHERE id_agent = ? ");
            $modif_agent->execute(array($newimmatriculation, $_SESSION['id_agent']));
            echo "<script type='text/javascript'>document.location.replace('historique.php?id=" .$_SESSION['id_agent']. "');</script>";
        }


    }
?>




<section class="page" id="main-content">
    <section class="wrapper-debug">
        <!-- FORM -->
        <div class="cont-edition-profil">
        <div class="tete">
            <h2><i class="fa fa-pencil pad-ico-profil"></i> Edition de votre profil</h2>
        </div>
            <div class="pic-edition">
                <?php 
                    if (empty($avatar)){
                        echo "<img class='img_avatar' src='assets/img/membres/avatar/avatar.svg' alt='AVATAR'>";
                    }else{
                        echo "<img class='img_avatar' src='assets/img/membres/avatar/".$avatar."' alt='AVATAR'>" ;
                    }
                ?>
            </div>
            <div class="container form-frais">
                <form action="" method="POST" enctype="multipart/form-data"> <!-- enctype="multipart/form-data" -- Permet l'encodage pour tout type de navigateur -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="label-edition" for="inputGroupFile01">Avatar:</label>
                            <div class="input-group input-edit">
                                <div class="custom-file">
                                <!-- INPUT FILE -->
                                    <input type="file" name="avatar" class="custom-file-input input-edit" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choisissez une image</label>
                                </div>
                            </div>
                            <label class="label-edition" for="edit-nom">Nom:</label>
                            <input type="text" name="edit-nom" class="form-control input-edit" id="edit-nom" placeholder="" value="<?php if(isset($nom)) { echo $nom;} ?>">
                            
                            <label class="label-edition" for="edit-prenom">Prénom:</label>
                            <input type="text" name="edit-prenom" class="form-control input-edit" id="edit-prenom" placeholder="" value="<?php if(isset($prenom)) { echo $prenom;} ?>">
                            
                            <label class="label-edition" for="edit-mail">E-mail:</label>
                            <input type="text" name="edit-mail" class="form-control input-edit" id="edit-mail" placeholder="" value="<?php if(isset($email)) { echo $email;} ?>">

                            <label class="label-edition" for="edit-mdp">Mot de passe:</label>
                            <input disabled type="password" class="form-control input-edit" id="edit-mdp" placeholder="" value="<?php if(isset($mdp)) { echo $mdp;} ?>">
                           
                        </div>
                        <div class="form-group col-md-6">
                            <label class="label-edition" for="edit-login">Login:</label>
                            <input disabled type="text" class="form-control input-edit" id="edit-login" placeholder="<?php if(isset($login)) { echo $login;} ?>" value="">
                            
                            <label class="label-edition" for="edit-service">Service:</label>
                            <input type="text" name="edit-service" class="form-control input-edit" id="edit-service" placeholder="" value="<?php if(isset($service)) { echo $service;} ?>">
                           
                            <label class="label-edition" for="edit-grade">Grade:</label>
                            <input type="text" name="edit-grade" class="form-control input-edit" id="edit-grade" placeholder="" value="<?php if(isset($grade)) { echo $grade;} ?>">
                           
                            <label class="label-edition" for="edit-immatriculation">Immatriculation:</label>
                            <input type="text" name="edit-immatriculation" class="form-control input-edit" id="edit-immatriculation" placeholder="" value="<?php if(isset($immatriculation)) { echo $immatriculation;} ?>">
                           
                            <div class="raw erreur">
                                <?php if (isset($erreur)){ echo "<p class='erreur'>" . $erreur . "</p>"; }; ?>
                            </div>
                            
                            <button name="edit-profil" type="submit" class="btn btn-primary btn-lg btn-block btn-style-edit">Modifier mes informations</button>
                            <div class="pas-membre">
                                <p>Vous devez vous <span> <a class="str-link">reconnecter</a> </span> pour actualiser vos informations.</p>
                            </div>
                            <!-- <button name="edit-profil" type="submit" class="btn btn-primary btn-lg btn-block btn-style-edit">annuler</button> -->
                            <!-- <label class="label-edition" for="edit-newmdp">Nouveau mot de passe:</label>
                            <input type="text" name="edit-newmdp" class="form-control input-edit" id="newedit-mdp" placeholder="" value="<?php //if(isset($date_trajet)) { echo $date_trajet;} ?>">
                            -->
                        </div>

                    </div>   
                </form>
            </div>
        </div>
    </section>
</section>
        