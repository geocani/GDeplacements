<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicons -->
    <link href="" rel="icon">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--external css-->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom Bootstrap -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive-test.css" rel="stylesheet">
    <link href="css/style-all.css" rel="stylesheet">
    <title>frais kilometrique</title>
</head>

<body>
    <?php
        // session_start();
        // Connexion BDD
        // $bdd = new PDO("mysql: host=localhost; dbname=frais; charset=utf8", "root", "");

        // $user_id = $_GET['id'];

        // if ($user_id == $_SESSION['id']){ // Vérifie si l'id en GET est bien celui de la SESSION
    ?>
<section id="container">
<!--HEADER MENU FIX-->
    <header class="header color233C4F">
        <div class="top-menu">
            <ul class="nav pull-left top-menu">
                <li>
                    <img src="img/logo.png" alt="Logo" width="150px">
                </li>
            </ul>
            <ul class="titre-center">
                <li>
                    <h2>Frais de déplacement et de séjour</h2>
                </li>
            </ul>
            <ul class="nav pull-right top-menu">
                <li>
                    <div class="sidebar-toggle-box">
                        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation">
                            <!--Ico burger-->
                        </div> 
                    </div>  
                </li>
            </ul>
        </div>
    </header>
<!--SIDEBAR MENU LEFT-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <ul class="sidebar-menu" id="nav-accordion">
            <li ><h5 class="">PROFIL</h5></li> <!-- TITRE-->
            <li><p class="text-color"><i class="fa fa-user ico-size"></i><?php //echo $_SESSION['nom']." ".$_SESSION['prenom']; ?></p></li>
            <li><p class="text-color"><i class="fa fa-briefcase ico-size"></i><?php //echo $_SESSION['service'];?></p></li>
            <li><p class="text-color"><i class="fa fa-drivers-license ico-size"></i><?php //echo $_SESSION['grade'];?></p></li>
            <!-- OUTILS-->
            <li ><h5 class="">OUTILS</h5></li>
            <li class="sub-menu">
                <a class="active" href="javascript:;"><i class="fa fa-plus"></i><span>Formulaire</span></a>
                <ul class="sub">
                    <li><a class="active" href="#"><i class="fa fa-clock-o pad-ico-profil"></i>Historique</a></li>
                    <li><a href="#"><i class="fa fa fa-car pad-ico-profil"></i>Voiture</a></li>
                    <li><a href="#"><i class="fa fa-bus pad-ico-profil"></i>Transport en commun</a></li>
                </ul>
            </li>
            <!-- VALIDATION-->
            <li class="sub-menu"><a href="javascript:;"><i class="fa fa-check"></i><span>Validation</span></a>
                <ul class="sub">
                    <li><a href="#">Lien</a></li>
                    <li><a href="#">Lien</a></li>
                </ul>
            </li>
            <!-- DECONNEXION -->
            <li class="mt"> 
                <a href="deconnexion.php"><i class="fa fa-power-off"></i><span>DECONNEXION</span></a>
            </li>
        </ul>
    </div>
</aside>


<!--MAIN-->
<section id="main-content">
    <section class="wrapper">

<!-- FORM -->
<div class="container form-frais">
    <div class="titre-page">
        <h2>FORMULAIRE</h2>
    </div>
    <form>
        <!--Date et heure de départ-->
        <h4>Date et heure de départ.</h4>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="date-trajet">Date:</label>
                <input type="date" class="form-control" id="date-trajet" placeholder="Heure">
            </div>
            <div class="form-group col-md-4">
                <label for="heure-administrative">Départ:</label>
                <input type="text" class="form-control" id="heure-administrative" placeholder="résidence administrative">
            </div>
            <div class="form-group col-md-4">
                <label for="heure-domicile">Départ:</label>
                <input type="text" class="form-control" id="heure-domicile" placeholder="Domicile">
            </div>
        </div>
        <!--Commune visitée-->
        <h4>Commune visitée.</h4>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="nom-commune">Nom:</label>
                <input type="time" class="form-control" id="nom-commune" placeholder="Ex: Namur">
            </div>
            <div class="form-group col-md-3">
                <label for="heure-arrivee">Heure d'arrivée:</label>
                <input type="time" class="form-control" id="heure-arrivee" placeholder="">
            </div>
            <div class="form-group col-md-3">
                <label for="heure-depart">Heure de retour:</label>
                <input type="time" class="form-control" id="heure-depart" placeholder="">
            </div>
            <div class="form-group col-md-3">
                <label for="fin-mission">Heure de fin de mission:</label>
                <input type="time" class="form-control" id="fin-mission" placeholder="">
            </div>
        </div>
        <!--KM parcourus-->
        <h4>Kilomètres parcourus.</h4>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="km-aglomeration">Dans l'agomération:</label>
                <input type="number" class="form-control" id="km-aglomeration" placeholder="Ex: 10">
            </div>
            <div class="form-group col-md-4">
                <label for="km-hors">Hors aglomération:</label>
                <input type="number" class="form-control" id="km-hors" placeholder="Ex: 10">
            </div>
            <div class="form-group col-md-4">
                <label for="transport">Transport en commun:</label>
                <input type="number" class="form-control" id="transport" placeholder="Ex: 2.50">
            </div>
        </div>
        <!--Motif-->
        <div class="form-group">
            <label for="motif">Motif:</label>
            <textarea class="form-control" id="motif" rows="3"></textarea>
        </div>
        <!---->
        <div class="form-group">
            <div class="form-check">
                <p>
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">Je déclare de ne pas bénéficier d'un libre parcours et/ou de bénéficier d'une rédution sur les chemins de fer et autobus.</label>
                </p>
                <p>
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">J'affirme sur l'honneur que cette déclaration est sincère et complète à la somme de quarante et un euro, dix-huit cents.</label>
                </p>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer le formulaire</button>
    </form>
</div>





      </section>
    </section>
    <!--FOOTER-->
  </section>
  <!-- SCRIPT -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/common-scripts.js"></script>
  <!-- <script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script> -->
</body>

</html>
