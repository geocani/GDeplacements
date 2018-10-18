<section id="main-content">
    <section class="wrapper">






    
        <div class="container center">
            <!-- HISTORIQUE -->
            <div class="titre-page">
                <h2><i class="fa fa-clock-o"></i><span>Historique</span><h2>
            </div>
            <!-- <table class="table table-sm table-bordered">
                <thead>
                    <tr>
                        <th><i class="fa fa-calendar"></i> Date</th>
                        <th><i class=" fa fa-edit"></i> Status</th>
                        <th class=""><i class="fa fa-wrench"></i> Modification</th>
                    </tr>
                </thead>
            </table> -->
            <!-- PHP -->
            <?php










            
                $affiche_trajet = $bdd->prepare("SELECT * FROM trajets WHERE id_agent = ? ORDER BY date_trajet DESC");
                $affiche_trajet->execute(array($_SESSION['id_agent']));
                $affiche_trajet_ok = $affiche_trajet->rowCount();
                if ($affiche_trajet_ok > 0){
                while($trajet = $affiche_trajet->fetch()){
                    $trajet['id_trajet'];
            ?>
            <!---->
            <table class="table table-sm table-bordered table-hover shad">
                <tbody>
                    <tr>
                        <td>
                           <p><i class="fa fa-calendar "></i> <?php echo $trajet['date_trajet'];?></p> 
                            
                        </td>
                        <td class="hidden-phone">En attente</td>
                        <td>
                            
                            <a href="visualisation.php?id_trajet=<?php echo $trajet['id_trajet']; ?>"> <button class="btn btn-outline-success border"><i class="fa fa-eye "></i></button></a>
                            <a href="modification_trajet.php?id_trajet=<?php echo $trajet['id_trajet']; ?>"><button class="btn btn-outline-primary border"><i class="fa fa-pencil"></i></button></a>
                            <a href="suppression-trajet-poo.php?id_trajet=<?php echo $trajet['id_trajet']; ?>"><button class="btn btn-outline-danger border"><i class="fa fa-trash-o "></i></button></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <?php
                } // FIN BOUCLE
            } else {



                echo " 
                
                
                
                ";
            }
            ?>
        </div>

<!-- <a href="suppression-trajet-poo.php?id_trajet=<?php //echo $trajet['id_trajet']; ?>" -->


    </section>
</section>


  <!-- Modal -->
  <!-- <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header bg-danger">
          <h4 class="modal-title">Attention</h4>
        </div>
        <div class="modal-body">
          <p>Etes-vous certain de vouloir éffacer ce trajet?</p>
          <a href="suppression-trajet-poo.php?id_trajet=<?php echo $trajet['id_trajet']; ?>"><button class="btn btn-outline-danger border"><i class="fa fa-trash-o "></i></button></a>
        </div>
        <div class="modal-footer">
        <a href="suppression-trajet-poo.php?id_trajet=<?php echo $trajet['id_trajet']; ?>"><button class="btn btn-outline-danger border"><i class="fa fa-trash-o "></i></button></a>
        <a href="suppression-trajet-poo.php?id_trajet=<?php echo $trajet['id_trajet']; ?>"><button type="button" class="btn btn-default">OUI</button></a>
          <button type="button" class="btn btn-default" data-dismiss="modal">NON</button>
        </div>
      </div>
    </div>
  </div> -->
