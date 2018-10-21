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
    <section class="wrapper">
        <div class="center container">
            <div class="titre-page">
                <h2><i class="fa fa-clock-o pad-ico-profil"></i><span>Recapitulatif</span><h2>
            </div>
            <div class="recap">
                <div class="col-md-1">
                    <!-- VIDE -->
                </div>
                <div class="col-md-10">
                    <table class="table table-sm table-striped shad">
                        <tbody>
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
                    <a href="historique.php?id_trajet=<?php echo $_SESSION['id_agent']; ?>"><button type="button" class="btn btn-primary">Imprimer</button></a> 
                </div>
                <div class="col-md-1">
                    <!-- VIDE -->
                </div>
            </div>     
        </div>
    </section>
</section>

