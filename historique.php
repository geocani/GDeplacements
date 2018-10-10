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
            <!-- <ul class="titre-center">
                <li>
                    <h2>Frais kilométrique</h2>
                </li>
            </ul> -->
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
            <li><p class="text-color"><i class="fa fa-user ico-size"></i>Nom Prénom</p></li>
            <li><p class="text-color"><i class="fa fa-briefcase ico-size"></i>Fonction</p></li>
            <li><p class="text-color"><i class="fa fa-drivers-license ico-size"></i>Grade</p></li>
          <!-- OUTILS-->
          <li ><h5 class="">OUTILS</h5></li>
          <li class="sub-menu">
            <a class="active" href="javascript:;">
              <i class="fa fa-plus"></i>
              <span>Formulaire</span>
              </a>
            <ul class="sub">
                <li><a class="active" href="#"><i class="fa fa-clock-o pad-ico-profil"></i>Historique</a></li>
                <li><a href="#"><i class="fa fa fa-car pad-ico-profil"></i>Voiture</a></li>
                <li><a href="#"><i class="fa fa-bus pad-ico-profil"></i>Transport en commun</a></li>
            </ul>
          </li>
          <!-- VALIDATION-->
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
          <!-- DECONNEXION -->
          <li class="mt"> 
            <a href="index.php">
              <i class="fa fa-power-off"></i>
              <span>DECONNEXION</span>
              </a>
          </li>
        </ul>
      </div>
    </aside>
    <!--MAIN-->
    <section id="main-content">
      <section class="wrapper">
          <div class="center">
            <!-- HISTORIQUE -->
            <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Historique</h4>
                <thead>
                  <tr>
                    <th><i class="fa fa-calendar"></i> Date</th>
                    <th><i class=" fa fa-edit"></i> Status</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Descrition</th>
                    <th class=""><i class="fa fa-wrench"></i> Modification</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <a href="basic_table.html#">17/09/2018</a>
                    </td>
                    <td class="hidden-phone">En attente</td>
                    <td>-- </td>
                    <td>
                      <button class="btn btn-outline-primary border"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-outline-danger border"><i class="fa fa-trash-o "></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <a href="basic_table.html#">
                      15/09/2018
                        </a>
                    </td>
                    <td class="hidden-phone">En attente</td>
                    <td>-- </td>
                    <td>
                      <button class="btn btn-outline-primary border"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-outline-danger border"><i class="fa fa-trash-o "></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <a href="basic_table.html#">
                      12/09/2018
                        </a>
                    </td>
                    <td class="hidden-phone">Validé</td>
                    <td>-- </td>
                    <td>
                      <button class="btn btn-outline-primary border"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-outline-danger border"><i class="fa fa-trash-o "></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <a href="basic_table.html#">10/09/2018</a>
                    </td>
                    <td class="hidden-phone">Validé</td>
                    <td>-- </td>
                    <td>
                      <button class="btn btn-outline-primary border"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-outline-danger border"><i class="fa fa-trash-o "></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <a href="basic_table.html#">04/09/2018</a>
                    </td>
                    <td class="hidden-phone">Validé</td>
                    <td>-- </td>
                    <td>
                      <button class="btn btn-outline-primary border"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-outline-danger border"><i class="fa fa-trash-o "></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <a href="basic_table.html#">25/08/2018</a>
                    </td>
                    <td class="hidden-phone">Validé</td>
                    <td>-- </td>
                    <td>
                      <button class="btn btn-outline-primary border"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-outline-danger border"><i class="fa fa-trash-o "></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <a href="basic_table.html#">
                      20/08/2018
                        </a>
                    </td>
                    <td class="hidden-phone">Validé</td>
                    <td>-- </td>
                    <td>
                      <button class="btn btn-outline-primary border"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-outline-danger border"><i class="fa fa-trash-o "></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <a href="basic_table.html#">
                      11/08/2018
                        </a>
                    </td>
                    <td class="hidden-phone">Validé</td>
                    <td>-- </td>
                    <td>
                      <button class="btn btn-outline-primary border"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-outline-danger border"><i class="fa fa-trash-o "></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <a href="basic_table.html#">09/08/2018</a>
                    </td>
                    <td class="hidden-phone">Validé</td>
                    <td>-- </td>
                    <td>
                      <button class="btn btn-outline-primary border"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-outline-danger border"><i class="fa fa-trash-o "></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <a href="basic_table.html#">05/08/2018</a>
                    </td>
                    <td class="hidden-phone">Validé</td>
                    <td>-- </td>
                    <td>
                      <button class="btn btn-outline-primary border"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-outline-danger border"><i class="fa fa-trash-o "></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
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
