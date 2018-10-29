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
$affiche_trajet = $bdd->prepare("SELECT * FROM trajets WHERE id_trajet = ?");
$affiche_trajet->execute(array($_GET["id_trajet"]));
while($trajet = $affiche_trajet->fetch()){
    $id_trajet = $trajet['id_trajet'];
    $date_trajet = $trajet['date_trajet'];
    $heure_administrative = $trajet['heure_administrative'];
    $heure_domicile = $trajet['heure_domicile'];
    $nom_commune =  $trajet['nom_commune'];
    $heure_arrivee = $trajet['heure_arrivee'];
    $heure_depart = $trajet['heure_depart'];
    $fin_mission = $trajet['fin_mission'];
    $km_aglomeration = $trajet['km_aglomeration'];
    $km_hors = $trajet['km_hors'];
    $transport = $trajet['transport'];
    $motif = $trajet['motif'];
    $status_trajet = $trajet['status_trajet'];
}



require('fpdf.php');

class PDF extends FPDF
{
// En-tête
function Header()
{
    // Logo
    $this->Image('logoprovince.gif',10,6,30);
    // Police Arial gras 15
    $this->SetFont('Arial','B',15);
    // Décalage à droite
    $this->Cell(80);
    // Titre
    $this->Cell(30,10,'Frais kilometrique ',2,0,'C');
    // Saut de ligne
    $this->Ln(20);
}

// Pied de page
function Footer()
{
    // Positionnement à 1,5 cm du bas
    $this->SetY(-15);
    // Police Arial italique 8
    $this->SetFont('Arial','I',8);
    // Numéro de page
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation de la classe dérivée
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Cell(60,10,'Date: ');
$pdf->Cell(60,10,''.$date_trajet.'' );
$pdf->Ln(10);
$pdf->Cell(60,10,'Depart administratif: ');
$pdf->Cell(60,10,''.$heure_administrative.'' );
$pdf->Ln(10);
$pdf->Cell(60,10,'Depart domicile: ');
$pdf->Cell(60,10,''.$heure_domicile.'' );
$pdf->Ln(10);
$pdf->Cell(60,10,'Commune visitee: ');
$pdf->Cell(60,10,''.$nom_commune.'' );
$pdf->Ln(10);
$pdf->Cell(60,10,'Arrivee: ');
$pdf->Cell(60,10,''.$heure_arrivee.'' );
$pdf->Ln(10);
$pdf->Cell(60,10,'Depart: ');
$pdf->Cell(60,10,''.$heure_depart.'' );
$pdf->Ln(10);
$pdf->Cell(60,10,'Fin de mission: ');
$pdf->Cell(60,10,''.$fin_mission.'' );
$pdf->Ln(10);
$pdf->Cell(60,10,'Km aglomeration: ');
$pdf->Cell(60,10,''.$km_aglomeration.' Km' );
$pdf->Ln(10);
$pdf->Cell(60,10,'km hors aglomeration: ');
$pdf->Cell(60,10,''.$km_hors.' Km' );
$pdf->Ln(10);
$pdf->Cell(60,10,'Transport: ');
$pdf->Cell(60,10,''.$transport.' euros' );
$pdf->Ln(10);
$pdf->Cell(60,10,'Motif: ');
$pdf->Cell(60,10,''.$motif.'' );
$pdf->Output();



?>