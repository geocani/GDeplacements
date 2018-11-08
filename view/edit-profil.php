<section class="page" id="main-content">
    <section class="wrapper-debug">
        <!-- FORM -->
        <div class="cont-creation">
            <div class="container form-frais">
                <div class="titre-page-add-trajet">
                    <h2><i class="fa fa fa-car pad-ico-profil"></i><span> EDITION DU PROFIL</span><h2>
                </div>
                <form action="" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="Mon label">Label</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choisissez une image</label>
                                </div>
                            </div>
                            <label for="edit-nom">Nom:</label>
                            <input type="text" name="edit-nom" class="form-control" id="edit-nom" placeholder="" value="<?php if(isset($date_trajet)) { echo $date_trajet;} ?>">
                            <div class="erreur">
                                <?php if(isset($erreur)){echo $erreur;}?>
                            </div>
                            <label for="edit-prenomt">Prénom:</label>
                            <input type="text" name="edit-prenom" class="form-control" id="edit-prenom" placeholder="" value="<?php if(isset($date_trajet)) { echo $date_trajet;} ?>">
                            <div class="erreur">
                                <?php if(isset($erreur)){echo $erreur;}?>
                            </div>
                            <label for="edit-nom">E-mail:</label>
                            <input type="email" name="edit-email" class="form-control" id="edit-email" placeholder="" value="<?php if(isset($date_trajet)) { echo $date_trajet;} ?>">
                            <div class="erreur">
                                <?php if(isset($erreur)){echo $erreur;}?>
                            </div>
                            <label for="edit-login">Login:</label>
                            <input type="text" name="edit-login" class="form-control" id="edit-login" placeholder="" value="<?php if(isset($date_trajet)) { echo $date_trajet;} ?>">
                            <div class="erreur">
                                <?php if(isset($erreur)){echo $erreur;}?>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="edit-nom">Nom:</label>
                            <input type="text" name="edit-nom" class="form-control" id="edit-nom" placeholder="" value="<?php if(isset($date_trajet)) { echo $date_trajet;} ?>">
                            <div class="erreur">
                                <?php if(isset($erreur)){echo $erreur;}?>
                            </div>
                            <label for="edit-prenomt">Prénom:</label>
                            <input type="text" name="edit-prenom" class="form-control" id="edit-prenom" placeholder="" value="<?php if(isset($date_trajet)) { echo $date_trajet;} ?>">
                            <div class="erreur">
                                <?php if(isset($erreur)){echo $erreur;}?>
                            </div>
                            <label for="edit-nom">E-mail:</label>
                            <input type="email" name="edit-email" class="form-control" id="edit-email" placeholder="" value="<?php if(isset($date_trajet)) { echo $date_trajet;} ?>">
                            <div class="erreur">
                                <?php if(isset($erreur)){echo $erreur;}?>
                            </div>
                            <label for="edit-login">Login:</label>
                            <input type="text" name="edit-login" class="form-control" id="edit-login" placeholder="" value="<?php if(isset($date_trajet)) { echo $date_trajet;} ?>">
                            <div class="erreur">
                                <?php if(isset($erreur)){echo $erreur;}?>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</section>
        