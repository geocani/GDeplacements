<section id="main-content">
    <section class="wrapper">






    
        <div class="container center">
            <!-- HISTORIQUE -->
            <div class="titre-page">
                <h2><i class="fa fa-clock-o"></i><span>Historique</span><h2>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th><i class="fa fa-calendar"></i> Date</th>
                        <th><i class=" fa fa-edit"></i> Status</th>
                        <th class=""><i class="fa fa-wrench"></i> Modification</th>
                    </tr>
                </thead>
            </table>
            <!-- PHP -->
            <?php

                $affiche_trajet = $bdd->prepare("SELECT * FROM trajets WHERE id_agent = ?");
                $affiche_trajet->execute(array($_SESSION['id_agent']));
                while($trajet = $affiche_trajet->fetch()){
            ?>
            <!---->
            <table class="table table-striped table-hover">
                <tbody>
                    <tr>
                        <td>
                            <?php echo $trajet['date_trajet'];?>
                        </td>
                        <td class="hidden-phone">En attente</td>
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


