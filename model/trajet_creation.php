<?php
    if (isset($_POST['send-trajet'])){
        // Nomination variable POST
        $date_trajet = $_POST['date-trajet'];
        $heure_administrative = $_POST['heure-administrative'];
        $heure_domicile = $_POST['heure-domicile'];
        $nom_commune = $_POST['nom-commune'];
        $heure_arrivee = $_POST['heure-arrivee'];
        $heure_depart = $_POST['heure-depart'];
        $fin_mission = $_POST['fin-mission'];
        $km_aglomeration = $_POST['km-aglomeration'];
        $km_hors = $_POST['km-hors'];
        $transport = $_POST['transport'];
        $motif = $_POST['motif'];


        // SANITISATION

            // Verificatation
            if(!empty($date_trajet)){
                if(!empty($heure_administrative) OR !empty($heure_domicile)){
                    if(!empty($nom_commune)){
                        if(!empty($heure_arrivee)){
                            if(!empty($heure_depart)){
                                if(!empty($fin_mission)){
                                    if(!empty($km_aglomeration)){
                                        if(!empty($km_hors)){
                                            if(!empty($motif)){
                                                if(!empty($_POST['cert1']) AND !empty($_POST['cert2'])){
                                                    // Ecrire dans la BDD
                                                    $insert_trajet = $bdd->prepare("INSERT INTO trajets(id_agent, date_trajet, heure_administrative, heure_domicile, nom_commune, heure_arrivee, heure_depart, fin_mission, km_aglomeration, km_hors, transport, motif, status_trajet) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                                                    $insert_trajet->execute(array($_SESSION['id_agent'], $date_trajet, $heure_administrative, $heure_domicile, $nom_commune, $heure_arrivee, $heure_depart, $fin_mission, $km_aglomeration, $km_hors, $transport, $motif, "En cours"));
                                                    // Redirection
                                                    header("location: historique.php?id=".$_SESSION['id_agent']);
                                                }else{
                                                    $erreur_cert = "erreur certif";
                                                }
                                            }else{
                                                $erreur_motif = "erreur motif";
                                            }
                                        }else{
                                            $erreur_hors = "erreur hors";
                                        }
                                    }else{
                                        $erreur_aglo = "erreur aglo";
                                    }
                                }else{
                                    $erreur_mission = "erreur MISSION";
                                }
                            }else{
                                $erreur_depart = "ERREUR DEPART";
                            }
                        }else{
                            $erreur_arrivee = "ERREUR ARRIVEE";
                        }
                    }else{
                        $erreur_commune = "* Entrez le nom de la commune visitée";
                    }
                }else{
                    $erreur_heure = "* Veuillez entrer une heure de départ";
                }
            }else{
                $erreur = "* Ce champ est obligatoire";
            }
    }
?>
