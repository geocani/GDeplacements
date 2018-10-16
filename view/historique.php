<section id="main-content">
      <section class="wrapper">
          <div class="center">
            <!-- HISTORIQUE -->
            <div class="titre-page">
        <h2><i class="fa fa-clock-o"></i><span>Historique</span><h2>
    </div>
    <?php
        $affiche_trajet = $bdd->query('SELECT * FROM trajets WHERE id_agent=7');
        while($trajet = $affiche_trajet->fetch()){
    ?>
            <table class="table table-striped table-advance table-hover">
                <thead>
                  <tr>
                    <th><i class="fa fa-calendar"></i> Date</th>
                    <th><i class=" fa fa-edit"></i> Status</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Descrition</th>
                    <th class=""><i class="fa fa-wrench"></i> Modification</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <p><?php echo $trajet['date_trajet'];?></p>
                    </td>
                    <td class="hidden-phone">En attente</td>
                    <td><?php echo $trajet['motif'];?> </td>
                    <td>
                      <a href="modification_trajet.php"><button class="btn btn-outline-primary border"><i class="fa fa-pencil"></i></button>
                       <button class="btn btn-outline-danger border"><i class="fa fa-trash-o "></i></button></a>
                    </td>
                  </tr>
                </tbody>
              </table>
              <?php
        }
        ?>
          </div>
      </section>
    </section>