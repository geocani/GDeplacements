
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






































  
$sql = "DELETE FROM Data WHERE ID=201"; 
if(mysqli_query($link, $sql)){ 
    echo "Record was deleted successfully."; 
}  






















?>