<section id="main-content">
    <section class="wrapper wrapper-login">
        <div class="rouge">
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
                                <input type="text" class="form-control" name="login" id="login" placeholder="Enter login">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="pwd">Password:</label>
                                <input type="password" class="form-control" name="pass" id="pwd" placeholder="Enter password">
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
                                <button type="submit" type="submit" name="log" class="btn btn-default" >Envoyer</button>
                                <div class="pas-membre">
                                    <p>Pas encore membre? <span> <a href="inscription.php">Inscrivez vous.</a> </span> </p>
                                </div>
                                <div class="pas-membre">
                                    <p>pdf? <span> <a href="fpdf/test.php">Inscrivez vous.</a> </span> </p>
                                </div>
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