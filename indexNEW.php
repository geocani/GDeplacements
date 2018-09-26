<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom Bootstrap -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
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
                    <a class="logout" href="#">DECONNEXION</a>
                </li>
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
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li ><h5 class="">PROFIL</h5></li> <!-- TITRE-->
            <li><p class="text-color"><i class="fa fa-user ico-size"></i>Nom Prénom</p></li>
            <li><p class="text-color"><i class="fa fa-briefcase ico-size"></i>Fonction</p></li>
            <li><p class="text-color"><i class="fa fa-drivers-license ico-size"></i>Grade</p></li>
          
          <!-- LIEN ACCORDEON-->
          <li ><h5 class="">OUTILS</h5></li>
          <li class="sub-menu">
            <a class="active" href="javascript:;">
              <i class="fa fa-plus"></i>
              <span>Formulaire</span>
              </a>
            <ul class="sub">
                <li><a href="#"><i class="fa fa-clock-o pad-ico-profil"></i>Historique</a></li>
                <li><a href="#"><i class="fa fa fa-car pad-ico-profil"></i>Voiture</a></li>
                <li><a href="#"><i class="fa fa-bus pad-ico-profil"></i>Transport en commun</a></li>
            </ul>
          </li>
          <!-- LIEN ACCORDEON-->
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-check"></i>
              <span>Validation</span>
              </a>
            <ul class="sub">
              <li><a href="#">Lien</a></li>
              <li><a href="#">Lien</a></li>
            </ul>
          </li>
          <!-- LIEN ACCORDEON-->
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-circle-o"></i>
              <span>Lien accordeon</span>
              </a>
            <ul class="sub">
              <li><a href="#">Lien</a></li>
              <li><a href="#">Lien</a></li>
            </ul>
          </li>
          <!-- LIEN SIMPLE-->
          
          <li class="mt"> 
            <a href="#">
              <i class="fa fa-circle-o"></i>
              <span>Lien simple</span>
              </a>
          </li>
        </ul>
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row mt">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex accusamus nihil aliquam debitis ut eveniet optio, 
            deserunt dolore deleniti perferendis non ratione error laudantium quaerat. Nulla inventore fuga a eos!</p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda qui, nulla velit illo harum veritatis, quidem incidunt eligendi tempore atque 
            aliquam accusantium quibusdam rem aut vitae consequatur provident? Nobis, numquam.</p>
        </div>
      </section>
    </section>
    <!-- **********************************************************************************************************************************************************
        FOOTER
        *********************************************************************************************************************************************************** -->
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
