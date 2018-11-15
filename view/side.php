<?php
    $affiche_agent = $bdd->prepare('SELECT * FROM agents WHERE id_agent = ?');
    $affiche_agent->execute(array($_SESSION['id_agent']));
    while ($agent = $affiche_agent->fetch()){
        $id = $agent['id_agent'];
        $avatar = $agent['avatar'];
        $nom = $agent['nom'];
        $prenom = $agent['prenom'];
        $email = $agent['email'];
        $service = $agent['service'];
        $grade = $agent['grade'];
        $immatriculation = $agent['immatriculation'];
        $login = $agent['login'];
        $mdp = $agent['mdp'];
    }
?>
<aside>
    <div id="sidebar" class="sidebar shad">
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <div class="avatar">
                    <?php 
                        if (empty($avatar)){
                            echo "<img class='img_avatar' src='assets/img/membres/avatar/avatar.svg' alt='AVATAR'>";
                        }else{
                            echo "<img class='img_avatar' src='assets/img/membres/avatar/".$avatar."' alt='AVATAR'>" ;
                        }
                    ?>
                    <h5>
                        <?php if (isset($_SESSION['prenom'])){ echo $_SESSION['prenom']." ". $_SESSION["nom"]; }else{ echo "-- --"; } ?>
                    </h5>
                </div>
            </li>
            <div class="cont-menu">
                <li ><h5>PROFIL:</h5></li>
                <li><p><i class="fa fa-briefcase"></i><?php if (isset($_SESSION['service'])){ echo $_SESSION['service']; }else{ echo "-- --"; } ?></p></li>
                <li><p><i class="fa fa-drivers-license"></i><?php if (isset($_SESSION['grade'])){ echo $_SESSION['grade']; }else{ echo "-- --"; } ?></p></li>
                <li><a href="edition-profil.php?id_agent=<?php echo $_SESSION['id_agent']; ?>"><p><i class="fa fa-gear"></i>Plus...</p></a></li>
                <!-- OUTILS-->
                <li ><h5 class="">OUTILS:</h5></li>
                <li class="sub-menu">
                    <a a class="col" href="" ><i class="fa fa-plus"></i><span>Trajets / Frais</span></a>
                    <ul class="sub tes">
                        <li class="tes"><a  href="historique.php"><i class="fa fa-clock-o"></i>Historique</a></li>
                        <li><a href="creation_trajet.php"><i class="fa fa-car"></i>Nouveau trajet</a></li>
                    </ul>
                </li>
                <div class="br"></div>
                <!-- VALIDATION-->
                <li class="sub-menu">
                    <a class="" href=""><i class="fa fa-check"></i><span>Validation</span></a>
                    <ul class="sub">
                        <li><a href="#"><i class="fa fa-check"></i>Valider un trajet</a></li>
                    </ul>
                </li>
                <div class="br"></div>
                <!-- DECONNEXION -->
                <li> 
                    <a class="" href="model/deconnexion.php"><i class="fa fa-power-off"></i><span>Deconnexion</span></a>
                </li>
            </div>
        </ul>
    </div>
</aside>