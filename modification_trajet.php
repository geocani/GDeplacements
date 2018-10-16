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
        // INCLUDE
        include 'model/bdd.php';
        include 'model/log.php';
        include 'view/header.php';
        include 'view/side.php';
        include 'view/formulaire_modification.php';
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