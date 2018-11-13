<section class="page" id="main-content">
    <section class="wrapper-debug">
        <!-- FORM -->
        <div class="cont-edition-profil">
        <div class="tete">
            <h2><i class="fa fa-clock-o pad-ico-profil"></i> Edition de votre profil</h2>
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
                            <input type="text" name="edit-nom" class="form-control input-edit" id="edit-nom" placeholder="" value="<?php if(isset($date_trajet)) { echo $date_trajet;} ?>">
                            <div class="erreur">
                                <?php if(isset($erreur)){echo $erreur;}?>
                            </div>
                            <label class="label-edition" for="edit-prenom">Prénom:</label>
                            <input type="text" name="edit-prenom" class="form-control input-edit" id="edit-prenom" placeholder="" value="<?php if(isset($date_trajet)) { echo $date_trajet;} ?>">
                            <div class="erreur">
                                <?php if(isset($erreur)){echo $erreur;}?>
                            </div>
                            <label class="label-edition" for="edit-nom">E-mail:</label>
                            <input type="email" name="edit-email" class="form-control input-edit" id="edit-email" placeholder="" value="<?php if(isset($date_trajet)) { echo $date_trajet;} ?>">
                            <div class="erreur">
                                <?php if(isset($erreur)){echo $erreur;}?>
                            </div>
                            <label class="label-edition" for="edit-login">Login:</label>
                            <input type="text" name="edit-login" class="form-control input-edit" id="edit-login" placeholder="" value="<?php if(isset($date_trajet)) { echo $date_trajet;} ?>">
                            <div class="erreur">
                                <?php if(isset($erreur)){echo $erreur;}?>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                        <label class="label-edition" for="edit-nom">Service:</label>
                            <input type="text" name="edit-nom" class="form-control input-edit" id="edit-nom" placeholder="" value="<?php if(isset($date_trajet)) { echo $date_trajet;} ?>">
                            <div class="erreur">
                                <?php if(isset($erreur)){echo $erreur;}?>
                            </div>
                            <label class="label-edition" for="edit-prenom">Grade:</label>
                            <input type="text" name="edit-prenom" class="form-control input-edit" id="edit-prenom" placeholder="" value="<?php if(isset($date_trajet)) { echo $date_trajet;} ?>">
                            <div class="erreur">
                                <?php if(isset($erreur)){echo $erreur;}?>
                            </div>
                            <label class="label-edition" for="edit-nom">Immatriculation:</label>
                            <input type="email" name="edit-email" class="form-control input-edit" id="edit-email" placeholder="" value="<?php if(isset($date_trajet)) { echo $date_trajet;} ?>">
                            <div class="erreur">
                                <?php if(isset($erreur)){echo $erreur;}?>
                            </div>
                            <label class="label-edition" for="edit-login">Autre:</label>
                            <input type="text" name="edit-login" class="form-control input-edit" id="edit-login" placeholder="" value="<?php if(isset($date_trajet)) { echo $date_trajet;} ?>">
                            <div class="erreur">
                                <?php if(isset($erreur)){echo $erreur;}?>
                            </div>
                            <button type="button" class="btn btn-primary btn-lg btn-block btn-style-edit">Inscription</button>
                        </div>
                    </div>   
                </form>
            </div>
        </div>
    </section>
</section>
        