<?php
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
?>
<section id="main-content">
    <section class="wrapper-visu">
        <div class="center container">
            <table class="table table-sm table-striped shad">
                <tbody>
                    <tr>
                        <th colspan="2">
                            <div class="titre-page-recap">
                                <h2>Récapitulatif</h2>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th scope="row"><p class="rec"><span class="str">ID: </span></p></th>
                        <td><p class="rec"><?php echo $id_trajet; ?></p> </td>
                    </tr>
                    <tr>
                        <th scope="row"><p class="rec"><span class="str">Status: </span></p></th>
                        <td><p class="rec"><?php echo $status_trajet; ?></p> </td>
                    </tr>
                    <tr>
                        <th scope="row"><p class="rec"><span class="str">Date: </span></p></th>
                        <td><p class="rec"><?php echo $date_trajet; ?></p> </td>
                    </tr>
                    <tr>
                        <th scope="row"><p class="rec"><span class="str">Départ administratif: </span></p></th>
                        <td><p class="rec"><?php echo $heure_administrative; ?></p></td>
                    </tr>
                    <tr>
                        <th scope="row"><p class="rec"><span class="str">Départ domicile: </span></p></th>
                        <td><p class="rec"><?php echo $heure_domicile; ?></p></td>
                    </tr>
                    <tr>
                        <th scope="row"><p class="rec"><span class="str">Commune visitée: </span></p></th>
                        <td><p class="rec"><?php echo $nom_commune; ?></p></td>
                    </tr>
                        <tr>
                        <th scope="row"><p class="rec"><span class="str">heure d'arrivée: </span></p></th>
                    <td><p class="rec"><?php echo $heure_arrivee; ?></p></td>
                    </tr>
                    <tr>
                        <th scope="row"><p class="rec"><span class="str">heure de départ: </span></p></th>
                        <td><p class="rec"><?php echo $heure_depart; ?></p></td>
                    </tr>
                    <tr>
                        <th scope="row"><p class="rec"><span class="str">Fin de mission: </span></p></th>
                        <td><p class="rec"><?php echo $fin_mission; ?></p></td>
                    </tr>
                    <tr>
                        <th scope="row"><p class="rec"><span class="str">Km dans aglomération: </span></p></th>
                        <td><p class="rec"><?php echo $km_aglomeration; ?> Km</p></td>
                    </tr>
                    <tr>
                        <th scope="row"><p class="rec"><span class="str">Km hors aglomération: </span></p></th>
                        <td><p class="rec"><?php echo $km_hors; ?> km</p></td>
                    </tr>
                    <tr>
                        <th scope="row"><p class="rec"><span class="str">Transport: </span></p></th>
                        <td><p class="rec"><?php echo $transport; ?> €</p></td>
                    </tr>
                    <tr>
                        <th scope="row"><p class="rec"><span class="str">Motif: </span></p></th>
                        <td><p class="rec"><?php echo $motif; ?></p></td>
                    </tr>
                </tbody>
            </table>
            <a href="historique.php?id_trajet=<?php echo $_SESSION['id_agent']; ?>"><button type="button" class="btn btn-primary">Retour</button></a>
            <a href="modification_trajet.php?id_trajet=<?php echo $id_trajet; ?>"><button type="button" class="btn btn-primary">Modifier</button></a>  
            <a class="hidden-phone" href="historique.php?id_trajet=<?php echo $_SESSION['id_agent']; ?>"><button type="button" class="btn btn-primary">Imprimer</button></a>
        </div>
    </section>
</section>

