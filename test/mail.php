<?php
    include '../model/bdd.php';

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

    if (isset($_POST['submit'])) {
        $to = "geoffreycanivet@gmail.com";
        $header = "From:'Agent'<agent@mail.com>"."\n";
        $header .= "Content-Type:text/html; charset='uft-8'"."\n";
        $header .= "Content-Transfer-Encoding: 8bit";
        $subject = "Demande de validation";
        $message='
            <html>
                <body>
                    <hr />
                    <br />
                    <h2>INFO UTILISATEUR:</h2>
                    <p>ID: 17</p>
                    <p>NOM: Canivet</p>
                    <p>PRENOM: Geoffrey</p>
                    <p>GRADE: Agent</p>
                    <p>SERVICE: Informatique</p>
                    <br />
                    <hr />
                    <br />
                    <h2>MESSAGE UTILISATEUR:</h2>
                    <p>Bonjour,</p>
                    <br />
                    <p>Je voudrais faire valider ce trajet s\'il vous plais.</p>
                    <br />
                    <p>Merci.</p>
                    <br />
                    <hr />
                    <h2>RECAPITULATIF TRAJET:</h2>
                    <br />
                    <table 1border="1">
                        <tr>
                            <th>ID Trajet: </th>
                            <td>'.$id_trajet.'</td> 
                        </tr>
                        <tr>
                            <th>Status: </th>
                            <td>'.$status_trajet.'</td>
                        </tr>
                        <tr>
                            <th>Date: </th>
                            <td>'.$date_trajet.'</td>
                        </tr>
                        <tr>
                            <th>Départ administratif: </th>
                            <td>'.$heure_administrative.'</td> 
                        </tr>
                        <tr>
                            <th>Départ domicile: </th>
                            <td>'.$heure_domicile.'</td>
                        </tr>
                        <tr>
                            <th>Commune visitée: </th>
                            <td>'.$nom_commune.'</td>
                        </tr>
                        <tr>
                            <th>Heure arrivée: </th>
                            <td>'.$heure_arrivee.'</td> 
                        </tr>
                        <tr>
                            <th>Heure départ: </th>
                            <td>'.$heure_depart.'</td>
                        </tr>
                        <tr>
                            <th>Fin mission: </th>
                            <td>'.$fin_mission.'</td>
                        </tr>
                        <tr>
                            <th>Km aglomération: </th>
                            <td>'.$km_aglomeration.'</td> 
                        </tr>
                        <tr>
                            <th>Km hors: </th>
                            <td>'.$km_hors.'</td>
                        </tr>
                        <tr>
                            <th>Transport: </th>
                            <td>'.$transport.'</td>
                        </tr>
                        <tr>
                            <th>Motif: </th>
                            <td>'.$motif.'</td>
                        </tr>
                    </table>
                    <br />
                </body>
            </html>
            ';

        mail($to,$subject,$message, $header);

        header('Location: ../index.php');
    }

?>
<form method="POST" action="">
	<input type="submit" value="Recevoir un mail !" name="submit"/>
</form>