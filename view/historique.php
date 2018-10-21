<section id="main-content">
    <section class="wrapper">
        <div class="container center">
            <!-- HISTORIQUE -->
            <div class="titre-page">
                <h2><i class="fa fa-clock-o pad-ico-profil"></i><span>Historique</span><h2>
            </div>
                
            <!---->
            <table class="table table-sm table-bordered table-hover shad">
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
                            0
                        </td>
                        <td>
                           <p><i class="fa fa-calendar "></i> <?php echo $trajet['date_trajet'];?></p> 
                        </td>
                        <td class="hidden-phone">En attente</td>
                        <td>
                            <a href="visualisation.php?id_trajet=<?php echo $trajet['id_trajet']; ?>"> <button class="btn btn-outline-primary border"><i class="fa fa-eye "></i></button></a>
                            <a href="modification_trajet.php?id_trajet=<?php echo $trajet['id_trajet']; ?>"><button class="btn btn-outline-info border"><i class="fa fa-pencil"></i></button></a>
                            <a href="model/suppression-trajet.php?id_trajet=<?php echo $trajet['id_trajet']; ?>"><button class="btn btn-outline-danger border"><i class="fa fa-trash-o "></i></button></a>
                            <a href="#"><button class="btn btn-outline-success border"><i class="fa fa-share "></i></button></a>
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

