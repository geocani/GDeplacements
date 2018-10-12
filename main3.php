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
    session_start();
    // Connexion BDD
    $bdd = new PDO("mysql: host=localhost; dbname=frais; charset=utf8", "root", "");

    if (isset($_POST['submit'])){
        // Ecriture dans BDD
        $insert = $bdd->prepare("INSERT INTO agents (nom, prenom, service, grade, login, mdp) VALUES (?, ?, ?, ?, ?, ?)");
        // $insert->execute(array($_POST['nom'],$_POST['prenom'],$_POST['service'],$_POST['grade'],$_POST['login'],$_POST['mdp']));
        $insert->execute(array("eeee","eeee","eeee","eeee","eeee","eeee"));
        echo "ok";
    }

    


  ?>
    <form action="#" method="POST">
        <p>nom</p><input type="text" name="nom" id="">
        <p>prenom</p><input type="text" name="prenom" id="">
        <p>service</p><input type="text" name="service" id="">
        <p>grade</p><input type="text" name="grade" id="">
        <p>login</p><input type="text" name="login" id="">
        <p>mdp</p><input type="text" name="mdp" id="">
        <input type="submit" name="submit" id="">
    </form>

  <!-- SCRIPT -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/common-scripts.js"></script>
</body>

</html>
