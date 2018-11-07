<?php
session_start();
try
{
	// Connexion BDD
	$host = "localhost";
	$bddname = "frais";
	$log = "root";
	$pass = "";
	$bdd = new PDO("mysql: host=$host; dbname=$bddname; charset=utf8", "$log", "$pass");
}
catch(Exception $e)
{
	// Erreur
        die('Erreur : '.$e->getMessage());
}

//////////////////////////////////////////////////////////

// session_start();
// try
// {
// 	// Connexion BDD
// 	$host = "localhost";
// 	$bddname = "frais";
// 	$log = "root";
// 	$pass = "";
// 	$bdd = new PDO("mysql: host=localhost; dbname=surikat1_frais; charset=utf8", "surikat1_un", "AD*wcJj6raYE");
// }
// catch(Exception $e)
// {
// 	// Erreur
//         die('Erreur : '.$e->getMessage());
// }

