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
        <div class="titre-page-recap">
            <h2><i class="fa fa-clock-o pad-ico-profil"></i><span > Récapitulatif du 11/12/2018</span><h2>
            <!-- <p>ATTENTION! <span> <a href="test/mail.php?id_trajet=<?php echo $id_trajet; ?>">Zone dangereuse.</a> </span> </p> -->
        </div>
            <table class="table table-striped shad">
                <tbody>
                    <tr>
                        <td class="strip-recap bold">ID-Trajet:</td>
                        <td class="strip-recap"><?php echo $id_trajet; ?></td>
                    </tr>
                    <tr>
                        <td class="bold">Status:</td>
                        <td><?php echo $status_trajet; ?></td>
                    </tr>
                    <tr>
                        <td class="strip-recap bold">Date:</td>
                        <td class="strip-recap"><?php echo $date_trajet; ?></td>
                    </tr>
                    <tr>
                        <td class="bold">Départ administratif:</td>
                        <td><?php echo $heure_administrative; ?></td>
                    </tr>
                    <tr class="no-bord">
                        <td class="bold no-bord">Départ domicile:</td>
                        <td class=""><?php echo $heure_domicile; ?></td>
                    </tr>
                    <tr>
                        <td class="strip-recap bold">Commune visitée:</td>
                        <td class="strip-recap"><?php echo $nom_commune; ?></td>
                    </tr>
                    <tr>
                        <td class="bold">Heure d'arrivés:</td>
                        <td><?php echo $heure_arrivee; ?></td>
                    </tr>
                    <tr>
                        <td class="strip-recap bold">Heure de départ:</td>
                        <td class="strip-recap"><?php echo $heure_depart; ?></td>
                    </tr>
                    <tr>
                        <td class="bold">Fin de mission:</td>
                        <td><?php echo $fin_mission; ?></td>
                    </tr>
                    <tr>
                        <td class="strip-recap bold">Km dans aglomération:</td>
                        <td class="strip-recap"><?php echo $km_aglomeration; ?> Km</td>
                    </tr>
                    <tr>
                        <td class="bold">Km hors aglomération:</td>
                        <td><?php echo $km_hors; ?> km</td>
                    </tr>
                    <tr>
                        <td class="strip-recap bold">Transport:</td>
                        <td class="strip-recap"><?php echo $transport; ?> €</td>
                    </tr>
                    <tr>
                        <td class="bold">Motif:</td>
                        <td><?php echo $motif; ?></td>
                    </tr>
                </tbody>
            </table>
            <a href="historique.php?id_trajet=<?php echo $_SESSION['id_agent']; ?>"><button type="button" class="btn btn-style">Retour</button></a>
            <a href="modification_trajet.php?id_trajet=<?php echo $id_trajet; ?>"><button type="button" class="btn btn-style">Modifier</button></a>  
            <a class="hidden-phone" href="historique.php?id_trajet=<?php echo $_SESSION['id_agent']; ?>"><button type="button" class="btn btn-style">Imprimer</button></a>
        </div>
    </section>
</section>

