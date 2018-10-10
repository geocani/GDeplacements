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
  <section id="container">
    <!--HEADER MENU FIX-->
    <header class="header color233C4F">
        <div class="top-menu">
            <ul class="nav pull-left top-menu">
                <li>
                    <img src="img/logo.png" alt="Logo" width="150px">
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
            <li><p class="text-color"><i class="fa fa-user ico-size"></i>-- --</p></li>
            <li><p class="text-color"><i class="fa fa-briefcase ico-size"></i>--</p></li>
            <li><p class="text-color"><i class="fa fa-drivers-license ico-size"></i>--</p></li>
          
          <!-- OUTILS-->
          <li ><h5 class="">OUTILS</h5></li>
          <li class="sub-menu">
            <a class="disabled" href="javascript:;" >
              <i class="fa fa-plus"></i>
              <span>Formulaire</span>
              </a>
            <ul class="sub">
                <li><a href="#"><i class="fa fa-clock-o pad-ico-profil"></i>Historique</a></li>
                <li><a href="#"><i class="fa fa fa-car pad-ico-profil"></i>Voiture</a></li>
                <li><a href="#"><i class="fa fa-bus pad-ico-profil"></i>Transport en commun</a></li>
            </ul>
          </li>
          <!-- VALIDATION-->
          <li class="sub-menu">
            <a class="disabled" href="javascript:;">
              <i class="fa fa-check"></i>
              <span>Validation</span>
              </a>
            <ul class="sub">
              <li><a href="#">Lien</a></li>
              <li><a href="#">Lien</a></li>
            </ul>
          </li>

          <!-- DECONNEXION -->
          <li class="mt"> 
            <a class="disabled" href="#">
              <i class="fa fa-power-off"></i>
              <span>DECONNEXION</span>
              </a>
          </li>
        </ul>
      </div>
    </aside>
    <!--MAIN-->
    <section id="main-content">
      <section class="wrapper wrapper-login">
        <div class="rouge">
          <div class="row">
            <div class="col-sm-4">
              <!-- .col-sm-3 -->
            </div>
            <!-- FORM -->
            <div class="col-sm-4"> 
              <div class="form-group">
                <div class="ico-login">
                  <img class="" src="img/sports-car.svg" width="200px" alt="">
                </div>
              </div>
                <form class="form-horizontal" action="historique.php">
                  <div class="form-group">
                    <label class="control-label" for="login">Login:</label>
                      <input type="text" class="form-control" id="login" placeholder="Enter login">
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="pwd">Password:</label>
                      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                  </div>
                  <div class="form-group"> 
                    <div class="col-sm-offset-2">
                      <div class="checkbox">
                        <label><input type="checkbox"> Remember me</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group"> 
                    <div class="col-sm-offset-2">
                      <button type="submit" class="btn btn-default" >Envoyer</button>
                    </div>
                  </div>
                </form>
            </div>
            <div class="col-sm-4">
              <!-- .col-sm-3 -->
            </div>
          </div>
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
</body>

</html>
