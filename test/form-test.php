<p>id</p>
<p>nom</p>
<p>prenom</p>
<p>service</p>
<p>grade</p>
<p>login</p>
<p>mdp</p>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <!-- Navbar-->
    <nav class="navbar navbar-dark bg-primary justif">
        <input class="form-control login_rec" type="text" placeholder="Login">
        <input class="form-control login_rec" type="text" placeholder="Password">
        <button class="btn btn-primary btn-lg" type="submit">Connexion</button>
    </nav>

    <div class="container">
        <div class="titre">
            <h1 class="text-center">Indemnités kilométriques.</h1>
        </div>
        <div class="row">
            <!-- connexion -->
            <div class="col-md-6 sep">
                <h2>Connexion:</h2>
                <div class="IMG">
               <!-- IMG -->
                </div>
                <div class="formulaire_connexion">
                    <form>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control padinput" placeholder="Login">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control padinput" placeholder="Password">
                            </div>
                        </div>
                    
                        <div class="row">
                            <button type="submit" class="btn btn-primary btn-lg but">Connexion</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- inscription -->
            <div class="col-md-6">
                <h2>Inscription:</h2>
                <div class="formulaire">
                    <form>

                        



                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control padinput" placeholder="Nom">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control padinput" placeholder="Prénom">
                            </div>
                        </div>


                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control padinput" placeholder="Login">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control padinput" placeholder="Mot de passe">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control padinput" placeholder="Confirmer le mot de passe">
                            </div>
                        </div>




                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control padinput" placeholder="Adresse">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control padinput" placeholder="Code postal">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control padinput" placeholder="Voiture">
                            </div>
                            <div class="col">
                                <select class="custom-select ">
                                    <option selected>Grade</option>
                                    <option value="1">Un</option>
                                    <option value="2">Deux</option>
                                    <option value="3">Trois</option>
                                </select>
                            </div>
                            <div class="col">
                                <select class="custom-select ">
                                    <option selected>Service</option>
                                    <option value="1">Académie de Police (Administration Provinciale de l'Enseignement et de la Formation )</option>
                                    <option value="2">Accueil Palais</option>
                                    <option value="3">Accueil Temps Libre</option>
                                    <option value="4">Administration des Services Techniques et de l'Environnement</option>
                                    <option value="5">Administration Provinciale Centrale</option>
                                    <option value="6">Administration Provinciale de l'Enseignement et de la Formation</option>
                                    <option value="7">Annoncer la Couleur (Direction des Affaires Sociales et Sanitaires )</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <button type="button" class="btn btn-primary btn-lg but">S'inscrire</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="titre">
            <h1 class="text-center">Formulaire.</h1>
        </div>
        <!-- Formulaire -->
        <!-- Gauche --> 
        <div class="row"> 
            <div class="col-md-6">
                <legend>Horaire</legend>
                    <label for="date">Date:</label>
                    <input type="date" class="form-control input-sm" id="date" placeholder="">
                    <label for="heureRes">Heure au départ de la résidance administrative:</label>
                    <input type="time" class="form-control input-sm" id="heureRes" placeholder="">
                    <label for="heureDom">Heure au départ du domicile:</label>
                    <input type="time" class="form-control input-sm" id="heureDom" placeholder="">
                <legend>Communes visitées:</legend>
                <div class="row">
                    <div class="col">
                        <label for="">Commune:</label>
                        <input type="text" class="form-control padinput" placeholder="Ex: Namur">
                    </div>
                    <div class="col">
                        <label for="">Heure d'arrivée:</label>
                        <input type="time" class="form-control padinput">
                    </div>
                    <div class="col">
                        <label for="">Heure de départ:</label>
                        <input type="time" class="form-control padinput">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Commune:</label>
                        <input type="text" class="form-control padinput" placeholder="Ex: Namur">
                    </div>
                    <div class="col">
                        <label for="">Heure d'arrivée:</label>
                        <input type="time" class="form-control padinput">
                    </div>
                    <div class="col">
                        <label for="">Heure de départ:</label>
                        <input type="time" class="form-control padinput">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Commune:</label>
                        <input type="text" class="form-control padinput" placeholder="Ex: Namur">
                    </div>
                    <div class="col">
                        <label for="">Heure d'arrivée:</label>
                        <input type="time" class="form-control padinput">
                    </div>
                    <div class="col">
                        <label for="">Heure de départ:</label>
                        <input type="time" class="form-control padinput">
                    </div>
                </div>
                <label for="miTerm">Heure de rentrée mission terminée:</label>
                <input type="time" class="form-control input-sm" id="miTerm" placeholder="">
            </div>
            <!-- Doite -->
            <div class="col-md-6">
                <legend>Km parcourus</legend>
                    <label for="km1">Km parcouru dans l'aglomeration de la résidance administrative:</label>
                    <input type="number" class="form-control input-sm" id="km1" placeholder="100">
                    <label for="km2">Km parcouru en dehors:</label>
                    <input type="number" class="form-control input-sm" id="km2" placeholder="100">
                    <label for="transcom">Transport en commun:</label>
                    <input type="text" class="form-control input-sm" id="transcom" placeholder="">
                <legend>Temps de séjours:</legend>
                    <input type="checkbox" id="sejour1" name="feature" value="scales"/>
                    <label for="sejour1">+ 5h à - 8h</label><br>
                    <input type="checkbox" id="sejour2" name="feature" value="scales"/>
                    <label for="sejour2">8h et + et assimilés</label><br>
                    <input type="checkbox" id="sejour3" name="feature" value="scales"/>
                    <label for="sejour3">Nuitées</label><br>
                <legend>Montant frais réels limités au plafond:</legend>
                    <input type="text" class="form-control input-sm" id="commune" placeholder="">
                    <legend>Motifs des déplacements:</legend>
                    <textarea class="form-control input-sm" id="address" rows="3"></textarea>
                    <br>
            </div>
        </div> 
        <div class="row">
            <button type="button" class="btn btn-primary btn-lg but">Envoyer</button>
        </div>
        <br><br><br>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>