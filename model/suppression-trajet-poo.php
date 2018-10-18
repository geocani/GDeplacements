
<?php
session_start();
try
{
	// Connexion BDD
	$host = "localhost";
	$bddname = "frais";
	$log = "root";
	$pass = "";
	$bdd = new PDO("mysql: host=$host; dbname=$bddname; charset=utf8", $log, $pass);
}
catch(Exception $e)
{
	// Erreur
        die('Erreur : '.$e->getMessage());
}

// SELECTION DE LA LIGNE A SUPPRIMER


// $affiche_ligne = $bdd->prepare("SELECT * FROM trajets WHERE id_trajet = ?");
// $affiche_ligne->execute(array($_SESSION['id_agent']));
// while($ligne = $affiche_ligne->fetch()){
    
// }

// SUPPRESSION
$supp = $bdd->prepare("DELETE FROM trajets WHERE id_trajet=?");   
$supp->execute(array(30));
echo ok
// header("location: historique.php?id=".$_SESSION['id_agent']);
































  





























?>