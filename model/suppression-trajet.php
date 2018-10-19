<?php
    session_start();
    try{
        $host = "localhost";
        $bddname = "frais";
        $log = "root";
        $pass = "";
        $bdd = new PDO("mysql: host=$host; dbname=$bddname; charset=utf8", "$log", "$pass");
    }catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
    $supp = $bdd->prepare("DELETE FROM trajets WHERE id_trajet=?");   
    $supp->execute(array($_GET["id_trajet"]));
    header("location: ../historique.php?id=".$_SESSION['id_agent']);
?>
