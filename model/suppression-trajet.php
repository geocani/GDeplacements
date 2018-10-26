<?php
    session_start();
    include 'bdd.php';
    $supp = $bdd->prepare("DELETE FROM trajets WHERE id_trajet=?");   
    $supp->execute(array($_GET["id_trajet"]));
    header("location: ../historique.php?id=".$_SESSION['id_agent']);
?>
