
<?php
if (isset($_POST['log'])){
    if (!empty($_POST['login']) AND !empty($_POST['pass'])){

        $login = $_POST['login'];
        $pass = $_POST['pass'];

        $req = $bdd->prepare("SELECT * FROM agents WHERE login = ? AND mdp = ?");
        $req->execute(array($login, $pass));
        $req_ok = $req->rowCount();

            if ($req_ok == 1){
                $agent_info = $req->fetch();
                $_SESSION['id_agent'] = $agent_info['id_agent'];
                $_SESSION['nom'] = $agent_info['nom'];
                $_SESSION['prenom'] = $agent_info['prenom'];
                $_SESSION['service'] = $agent_info['service'];
                $_SESSION['grade'] = $agent_info['grade'];
                $_SESSION['login'] = $agent_info['login'];
                header("location: historique.php?id=".$_SESSION['id_agent']);
            }else{
                $erreur =  "*Le nom d’utilisateur ou le mot de passe que vous avez entré n’est pas valide. Réessayez.";
            }
    }else{
        $erreur =  "*Le nom d’utilisateur ou le mot de passe que vous avez entré n’est pas valide. Réessayez.";
    }
}
?>