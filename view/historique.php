<section id="main-content">
    <section class="wrapper">
        <div class="container pd-top">
            <!-- HISTORIQUE -->
            <div class="titre-page-recap">
            <h2><i class="fa fa-clock-o pad-ico-profil"></i><span > Historique</span><h2>
            <!-- <p>ATTENTION! <span> <a href="test/mail.php?id_trajet=<?php echo $id_trajet; ?>">Zone dangereuse.</a> </span> </p> -->
        </div>
            <div class="btn-fix">
                <a href="creation_trajet.php">
                    <img src="assets/img/add2.svg" alt="IMG">
                </a>
            </div>
            <!---->
            <table class="table table-sm table-bordered table-hover shad">
                <thead>
                    <tr>
                        <th class="hidden-phone" scope="col"><i class="fa fa-hashtag"></i></th>
                        <th scope="col"><i class="fa fa-calendar "></i> Date <i class="fa fa-sort "></i></th>
                        <th scope="col"><i class="fa fa-check hidden-phone"></i> Status <i class="fa fa-sort "></i></th>
                        <th scope="col"><i class="fa fa-wrench "></i> Outils</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $affiche_trajet = $bdd->prepare("SELECT * FROM trajets WHERE id_agent = ? ORDER BY date_trajet DESC");
                    $affiche_trajet->execute(array($_SESSION['id_agent']));
                    $affiche_trajet_ok = $affiche_trajet->rowCount();

                    if ($affiche_trajet_ok > 0){
                        while($trajet = $affiche_trajet->fetch()){
                            $trajet['id_trajet'];
                ?>
                    <tr>
                        <td class="hidden-phone">
                            <input type="checkbox" >
                        </td>
                        <td>
                           <?php echo $trajet['date_trajet'];?>
                        </td>
                        <td>En attente</td>
                        <td>
                            <a href="visualisation.php?id_trajet=<?php echo $trajet['id_trajet']; ?>"> <button class="btn btn-outline-success border" data-toggle="tooltip" data-placement="top" title="Récapitulatif du trajet"><i class="fa fa-eye "></i></button></a>
                            <a href="fpdf/impression.php?id_trajet=<?php echo $trajet['id_trajet']; ?>" class="hidden-phone"> <button class="btn btn-outline-primary border" data-toggle="tooltip" data-placement="top" title="Impression du trajet"><i class="fa fa-print "></i></button></a>
                            <a href="modification_trajet.php?id_trajet=<?php echo $trajet['id_trajet']; ?>" class="hidden-phone"><button class="btn btn-outline-info border" data-toggle="tooltip" data-placement="top" title="Modification du trajet"><i class="fa fa-pencil"></i></button></a>
                            <a href="model/suppression-trajet.php?id_trajet=<?php echo $trajet['id_trajet']; ?>" class=""><button class="btn btn-outline-danger border" data-toggle="tooltip" data-placement="top" title="Suppression du trajet"><i class="fa fa-trash-o "></i></button></a>
                            <!-- <a href="#" class=""><button class="btn btn-outline-danger border" data-toggle="modal" data-target="#AlertSupp" title="Suppression du trajet"><i class="fa fa-trash-o "></i></button></a> -->
                            <a href="#" class="hidden-phone"><button class="btn btn-outline-warning border" data-toggle="tooltip" data-placement="top" title="Soumettre le trajet à la validation"><i class="fa fa-share "></i></button></a>
                        </td>
                    </tr>
<!-------------------------------------ALERTE----------------------------------------->
<div class="test-alert">
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AlertSupp">BOUTON</button> -->
    <!-- Modal -->
    <div class="modal fade" id="AlertSupp" tabindex="-1" role="dialog" aria-labelledby="AlertSuppLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="AlertSuppLabel">ATTENTION !</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
            <div class="modal-body">
                Etes-vous certain de vouloir supprimer ce trajet? <?php ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger"><a href="model/suppression-trajet.php?id_trajet=<?php echo $trajet['id_trajet']; ?>">OK</a></button>
            </div>
        </div>
    </div>
</div>
<!------------------------------------------------------------------------------------>
                    <?php
                    } // FIN BOUCLE
                        } else {
                            $img_alert = "<img src='assets/img/sports-car.svg' width='200px'>" ;
                            $text_alert = "Vous n'avez éfectué aucun trajet.";
                            $text2_alert = "Pour enregistrer un trajet cliquez sur <span class='bold'>'Trajet/Frais'</span> puis sur <span class='bold'>'nouveau trajet'</span>.";
                        }
                ?>
                </tbody>
                <tfoot class="hidden-phone">
                    <tr>
                        <th colspan="1"><a href="#"><button class="btn btn-outline-warning border" data-toggle="tooltip" data-placement="top" title="Soumettre le trajet à la validation"><i class="fa fa-share "></i></button></a></td>
                        <th colspan="3"> <input class="pad-check"type="checkbox"> Envoyer tout les trajets non envoyé en validation .</td>
                    </tr>
                </tfoot>
            </table>


        </div>
        <div class="no-trajet">
            <h1 class="deb flou"> 
                <?php if (isset($img_alert)){ 
                    echo $img_alert; 
                }
                ?>
            </h1>
            <p class="deb">
                <?php if (isset($text_alert)){ 
                    echo $text_alert; 
                }
                ?>
            </p>
            <p class="deb">
                <?php if (isset($text2_alert)){ 
                    echo $text2_alert; 
                }
                ?>
            </p>
        </div>
    </section>
</section>
