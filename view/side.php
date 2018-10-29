<aside>
    <div id="sidebar" class="nav-collapse">
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <div class="image">
                    <img class="img" src="assets/img/avatar.svg" width="70px" alt="AVATAR">
                    <h5  class="nomprenom">
                        <?php if (isset($_SESSION['prenom'])){ echo $_SESSION['prenom']." ". $_SESSION["nom"]; }else{ echo "-- --"; } ?>
                    </h5>
                </div>
            </li>
            <li ><h5 class="profil">PROFIL:</h5></li>
            <li><p class="text-color"><i class="fa fa-briefcase ico-size"></i><?php if (isset($_SESSION['service'])){ echo $_SESSION['service']; }else{ echo "-- --"; } ?></p></li>
            <li><p class="text-color"><i class="fa fa-drivers-license ico-size"></i><?php if (isset($_SESSION['grade'])){ echo $_SESSION['grade']; }else{ echo "-- --"; } ?></p></li>
            <li><p class="text-color"><i class="fa fa-gear ico-size"></i>Plus...</p></li>
            <!-- OUTILS-->
            <li ><h5 class="">OUTILS:</h5></li>
            <li class="sub-menu">
                <a class="" href="javascript:;" ><i class="fa fa-plus"></i><span>Trajets / Frais</span></a>
                <ul class="sub">
                    <li><a href="historique.php"><i class="fa fa-clock-o pad-ico-profil"></i>Historique</a></li>
                    <li><a href="creation_trajet.php"><i class="fa fa fa-car pad-ico-profil"></i>Nouveau trajet</a></li>
                </ul>
            </li>
            <!-- VALIDATION-->
            <li class="sub-menu">
                <a class="" href="javascript:;"><i class="fa fa-check"></i><span>Validation</span></a>
                    <ul class="sub">
                        <li><a href="#"><i class="fa fa-check pad-ico-profil"></i>Valider un trajet</a></li>
                    </ul>
            </li>
            <!-- DECONNEXION -->
            <li class="mt"> 
                <a class="" href="model/deconnexion.php"><i class="fa fa-power-off"></i><span>DECONNEXION</span></a>
            </li>
        </ul>
    </div>
    <!-- <i class="fa fa-user ico-size"></i> -->
</aside>