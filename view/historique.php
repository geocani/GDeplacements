<section id="main-content">
    <section class="wrapper">
        <div class="container center">
            <!-- HISTORIQUE -->
            <div class="titre-page">
                <h2><i class="fa fa-clock-o pad-ico-profil"></i><span>Historique</span><h2>
            </div>
                
            <!---->
            <table class="table table-sm table-bordered table-hover shad">
                <thead>
                    <tr>
                    <th scope="col"><i class="fa fa-hashtag "></i></th>
                    <th scope="col"><i class="fa fa-calendar "></i> Date <i class="fa fa-sort "></i></th>
                    <th scope="col"><i class="fa fa-check "></i> Status <i class="fa fa-sort "></i></th>
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
                        <td>
                            <input type="checkbox">
                        </td>
                        <td>
                           <?php echo $trajet['date_trajet'];?>
                        </td>
                        <td class="hidden-phone">En attente</td>
                        <td>
                            <a href="visualisation.php?id_trajet=<?php echo $trajet['id_trajet']; ?>"> <button class="btn btn-outline-success border" data-toggle="tooltip" data-placement="top" title="Récapitulatif du trajet"><i class="fa fa-eye "></i></button></a>
                            <a href="visualisation.php?id_trajet=<?php echo $trajet['id_trajet']; ?>"> <button class="btn btn-outline-primary border" data-toggle="tooltip" data-placement="top" title="Impression du trajet"><i class="fa fa-print "></i></button></a>
                            <a href="modification_trajet.php?id_trajet=<?php echo $trajet['id_trajet']; ?>"><button class="btn btn-outline-info border" data-toggle="tooltip" data-placement="top" title="Modification du trajet"><i class="fa fa-pencil"></i></button></a>
                            <a href="model/suppression-trajet.php?id_trajet=<?php echo $trajet['id_trajet']; ?>"><button class="btn btn-outline-danger border" data-toggle="tooltip" data-placement="top" title="Suppression du trajet"><i class="fa fa-trash-o "></i></button></a>
                            <a href="#"><button class="btn btn-outline-warning border" data-toggle="tooltip" data-placement="top" title="Soumettre le trajet à la validation"><i class="fa fa-share "></i></button></a>
                        </td>
                    </tr>
                    <?php
                    } // FIN BOUCLE
                        } else {
                            $img_alert = "<img src='assets/img/sports-car.svg' width='200px'>" ;
                            $text_alert = "Vous n'avez éfectué aucun trajet.";
                            $text2_alert = "Pour enregistrer un trajet cliquez sur <span class='bold'>'formulaire'</span> puis sur <span class='bold'>'nouveau trajet'</span>.";
                        }
                ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="1"><a href="#"><button class="btn btn-outline-warning border" data-toggle="tooltip" data-placement="top" title="Soumettre le trajet à la validation"><i class="fa fa-share "></i></button></a></td>
                        <th colspan="3"> <i class="fa fa-check-square-o"></i> Envoyer tout les trajets coché en validation .</td>
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

