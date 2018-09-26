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
  <title>frais kilometrique</title>
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        HEADER MENU TOP
        *********************************************************************************************************************************************************** -->
    <!--HEADER MENU TOP FIX-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--LOGO-->
      <a href="index.html" class="logo"><b>DASH<span>IO</span></b></a>
      <!--MENU TOP-->
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html">Logout</a></li>
        </ul>
      </div>
    </header>
    <!-- **********************************************************************************************************************************************************
        SIDEBAR MENU LEFT
        *********************************************************************************************************************************************************** -->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <h5 class="centered">MENU LEFT</h5> <!-- TITRE-->
          <!-- LIEN SIMPLE-->
          <li class="mt"> 
            <a href="index.html">
              <i class="fa fa-dashboard"></i>
              <span>LIEN SIMPLE</span>
              </a>
          </li>
          <!-- LIEN ACCORDEON-->
          <li class="sub-menu">
            <a class="active" href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>UI Elements</span>
              </a>
            <ul class="sub">
              <li><a href="#">General</a></li>
            </ul>
          </li>
          <!-- LIEN ACCORDEON-->
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Components</span>
              </a>
            <ul class="sub">
              <li><a href="#">Grids</a></li>
              <li><a href="#">Calendar</a></li>
            </ul>
          </li>
          <!-- LIEN ACCORDEON-->
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Extra Pages</span>
              </a>
            <ul class="sub">
              <li><a href="#">Blank Page</a></li>
              <li><a href="#">Login</a></li>
            </ul>
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
