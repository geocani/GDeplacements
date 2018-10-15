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
    <link href="assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom Bootstrap -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive-test.css" rel="stylesheet">
    <link href="assets/css/style-all.css" rel="stylesheet">
    <title>frais kilometrique</title>
</head>

<body>
    <section id="container">

    <?php
        session_start();
        // Connexion BDD
        $bdd = new PDO("mysql: host=localhost; dbname=frais; charset=utf8", "root", "");

        if (isset($_POST['log'])){
            if (!empty($_POST['login']) AND !empty($_POST['pass'])){

                $login = $_POST['login'];
                $pass = $_POST['pass'];

                $req = $bdd->prepare("SELECT * FROM agents WHERE login = ? AND mdp = ?");
                $req->execute(array($login, $pass));
                $req_ok = $req->rowCount();

                    if ($req_ok == 1){
                        $agent_info = $req->fetch();
                        $_SESSION['id'] = $agent_info['id'];
                        $_SESSION['nom'] = $agent_info['nom'];
                        $_SESSION['prenom'] = $agent_info['prenom'];
                        $_SESSION['service'] = $agent_info['service'];
                        $_SESSION['grade'] = $agent_info['grade'];
                        $_SESSION['login'] = $agent_info['login'];
                        header("location: historique.php?id=".$_SESSION['id']);
                    }
            }else{
                $erreur =  "*Le nom d’utilisateur ou le mot de passe que vous avez entré n’est pas valide. Réessayez.";
            }
        }

        // INCLUDE
        include 'view/header.php';
        include 'view/side.php';
        include 'login.php';
    ?>
    
    </section>
    <!-- SCRIPT -->
    <script src="assets/lib/jquery/jquery.min.js"></script>
    <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/lib/jquery.scrollTo.min.js"></script>
    <script src="assets/lib/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/lib/common-scripts.js"></script>
</body>
</html>