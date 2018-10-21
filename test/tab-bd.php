<?php
session_start();
try
{
	// Connexion BDD
	$host = "localhost";
	$bddname = "test";
	$log = "root";
	$pass = "";
	$bdd = new PDO("mysql: host=$host; dbname=$bddname; charset=utf8", "$log", "$pass");
}
catch(Exception $e)
{
	// Erreur
        die('Erreur : '.$e->getMessage());
}
?>


<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<h2>HTML Table</h2>

<table>
    <tr>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>FONCTION</th>
    </tr>
  
    <?php 
        $allmsg = $bdd->query('SELECT * FROM agents');
        while($msg = $allmsg->fetch()){
    ?>
    <tr>
        <td><?php echo $msg['nom'] ?></td>
        <td><?php echo $msg['prenom'] ?></td>
        <td><?php echo $msg['fonction'] ?></td>
    </tr>
    <?php 
        } 
    ?>
</table>

</body>
</html>