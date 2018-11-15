
<?php

    // $affiche_agent = $bdd->prepare('SELECT * FROM agents WHERE id_agent = ?');
    // $affiche_agent->execute(array($_SESSION['id_agent']));
    // while ($agent = $affiche_agent->fetch()){
    //     $id = $agent['id_agent'];
    //     $nom = $agent['nom'];
    //     $prenom = $agent['prenom'];
    //     $email = $agent['email'];
    //     $service = $agent['service'];
    //     $grade = $agent['grade'];
    //     $immatriculation = $agent['immatriculation'];
    //     $login = $agent['login'];
    //     $mdp = $agent['mdp'];
    // }

    // if (isset($_POST['edit-profil'])){
    //     if(isset($_POST["edit-nom"])){
    //         $modif_agent = $bdd->prepare("UPDATE agents SET nom = ? WHERE id_agent = ? ");
    //         $modif_agent->execute(array($_POST['edit-nom'], $_SESSION['id_agent']));
    //     }
    // }

    $affiche_agent = $bdd->prepare('SELECT * FROM agents WHERE id_agent = ?');
    $affiche_agent->execute(array($_SESSION['id_agent']));
    while ($agent = $affiche_agent->fetch()){
        $nom = $agent['nom'];
        $prenom = $agent['prenom'];
    }


    if (isset($_POST['edit-profil'])){
        if(isset($_POST['edit-nom'])){
            $newnom = $_POST['edit-nom'];
            $modif_agent = $bdd->prepare('UPDATE agents SET nom = ? WHERE id_agent = ?');
            $modif_agent->execute(array($newnom, $_SESSION['id_agent']));
        }
    }
?>



        <style>
            .edition{
                margin-top: 200px;
            }
        </style>



<section class="page" id="main-content">
    <section class="wrapper-debug">
        <!-- FORM -->
        <form class="edition" action="" method="POST">

        <!--nom-->
        <label for="">nom</label>
        <input type="text" name="edit-nom" id=""><br>
        <!--prenom-->
        <label for="">prenom</label>
        <input type="text" name="edit-prenom"><br>

        <input type="submit" name="edit-profil" id="" value="Envoyer">
        <?php if(isset($nom)) { echo $nom;} ?>
        <?php if(isset($prenom)) { echo $prenom;} ?>
        <?php if(isset($newnom)) { echo $newnom;} ?>
        </form>
    </section>
</section>
        