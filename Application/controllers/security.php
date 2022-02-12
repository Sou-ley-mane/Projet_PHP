<?php
// LES FONCTIONS POUR LA SECURITÉ
function valide_donnees($donnee){
    //les espaces inutiles
    $donnee=trim($donnee);
    //echappe
    $donnee=stripslashes($donnee);
    // en cas d'injection
    $donnee=htmlspecialchars($donnee);
    return $donnee;

}

//les Expression regulieres
// pour la validation de l'email
function accepte($donnee){
    if (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$donnee)) {
        echo ("Merci de verifier votre email");   
    }

}

//pour la validation des champs nom et prenom
function valide($donnee){
    if (!preg_match("#^[a-zA-Z'-]+$#",$donnee)) {
        echo ("Erreur");
    }

}

 

        // **********************************************************
 
if ($_POST['connex']) {
    session_start();
//Recuperation des valeurs saisies
    $prenom=valide_donnees($_POST['prenom']);
    $nom=valide_donnees($_POST['nom']);
    $mdp=valide_donnees($_POST['mdp']);
    $email=valide_donnees($_POST['email']);
    $role=valide_donnees($_POST['role']);
  
  


    
   
}



?>