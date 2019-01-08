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
                                <input type="text" class="form-control" name="login" id="login" placeholder="Votre login">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="pwd">Mot de passe:</label>
                                <input type="password" class="form-control" name="pass" id="pwd" placeholder="Votre mot de passe">
                        </div>
                        <div class="form-group"> 
                            <div class="col-sm-offset-2">
                                <div class="checkbox">
                                    <label><input type="checkbox"> Se souvenir de moi.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"> 
                            <div class="col-sm-offset-2">
                                <button type="submit" type="submit" name="log" class="btn btn-style" >Envoyer</button>
                                <div class="pas-membre">
                                    <p>Ceci est une version d'évaluation, utilisez le login <span> <a class="str-link">login</a> </span> et le pass <span> <a class="str-link">12345</a> </span>  </p>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="raw erreur">
                        <?php if (isset($erreur)){ echo "<p class='erreur'>" . $erreur . "</p>"; }; ?>
                    </div>
<!-------------------------------------ALERTE----------------------------------------->
<!-- <div class="test-alert"> -->
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">BOUTON</button> -->
    <!-- Modal -->
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ATTENTION !</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
            <div class="modal-body">
                Etes-vous certain de vouloir supprimer ce trajet?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary"><a href="alert.php">OK</a>></button>
            </div>
        </div>
    </div> -->
<!-- </div> -->
<!------------------------------------------------------------------------------------>
                    </div>
                </div>
                <div class="col-sm-4">
                    <!-- col vide -->
                </div>
            </div>
        </div>
    </section>
</section>