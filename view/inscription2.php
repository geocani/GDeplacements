
<?php
    if (isset($_POST['inscription'])){
        $erreur =  "*OOOOOOOOOOOKKKKKKKKK";
    }

?>
<section id="main-content">
    <section class="wrapper wrapper-login">
        <div class="rouge">
            <div class="row">
                <div class="col-sm-4">
                    <!-- col vide -->
                </div>
                <!-- FORM -->
                <div class="col-sm-4"> 
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
