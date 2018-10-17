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
                while($trajet = $affiche_trajet->fetch()){
            ?>
            <!---->
            <table class="table table-sm table-bordered table-hover shad">
                <tbody>
                    <tr>
                        <td>
                            <?php echo $trajet['date_trajet'];?>
                        </td>
                        <td class="hidden-phone">En attente</td>
                        <td>
                            <a href="suppression-trajet-poo.php"><button class="btn btn-outline-primary border"><i class="fa fa-pencil"></i></button>
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


