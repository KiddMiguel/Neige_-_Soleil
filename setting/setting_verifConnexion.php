<?php
/********CONNEXION LOCATAIRE***** */
if (isset($_POST["se_connecter"])) {
    $email = $_POST["email_locataire"];
    $mdp = $_POST["mdp_locataire"];
    $error ="";
    $unUser = $unController->verifconnexionLocataire($email, $mdp);
    if ($unUser == null) { 
        $error ="Mot de passe incorrect !";
    } else {
        $_SESSION["id_user"] = $unUser["id_user"];
        $_SESSION["civilite_locataire"] = $unUser["civilite_locataire"];
        $_SESSION["email_locataire"] = $unUser["email_locataire"];
        $_SESSION["mdp_locataire"] = $unUser["mdp_locataire"];
        $_SESSION["nom_locataire"] = $unUser["nom_locataire"];
        $_SESSION["prenom_locataire"] = $unUser["prenom_locataire"];
        $_SESSION["tel_locataire"] = $unUser["tel_locataire"];
        $_SESSION["adresse_locataire"] = $unUser["adresse_locataire"];
        $_SESSION["cp_locataire"] = $unUser["cp_locataire"];
        $_SESSION["nb_reservations"] = $unUser["nb_reservations"];
        header("location: index.php?page=home&id_user=".$unUser["id_user"]);
    }
}

/*******INSERT NEW LOCATAIRE********** */

if (isset($_POST["valider"])) {
    $unController->insertLocataire($_POST);
    if (isset($_POST["valider"])) {
        $email = $_POST["email_locataire"];
        $mdp = $_POST["mdp_locataire"];
        $unUser = $unController->verifconnexionLocataire($email, $mdp);
        if ($unUser == null) {
            echo'Hell';
        } else {
            $_SESSION["id_user"] = $unUser["id_user"];
            $_SESSION["email_locataire"] = $unUser["email_locataire"];
            $_SESSION["mdp_locataire"] = $unUser["mdp_locataire"];
            $_SESSION["nom_locataire"] = $unUser["nom_locataire"];
            $_SESSION["prenom_locataire"] = $unUser["prenom_locataire"];
            $_SESSION["civilite_locataire"] = $unUser["civilite_locataire"];
            $_SESSION["tel_locataire"] = $unUser["tel_locataire"];
            $_SESSION["adresse_locataire"] = $unUser["adresse_locataire"];
            $_SESSION["cp_locataire"] = $unUser["cp_locataire"];
            $_SESSION["nb_reservations"] = $unUser["nb_reservations"];
            header("location: index.php?page=home&id_user=".$unUser["id_user"]);
        }
    }
}





/************************************************-----------------------PARTIE PROPRIETAIRE---------------------------------------********************** */
/********CONNEXION PROPRIETAIRE***** */
if (isset($_POST["se_connecter_proprio"])) {
$email = $_POST["email_proprio"];
$mdp = $_POST["mdp_proprio"];
$error="";
$unUser = $unController->verifconnexionProprietaire($email, $mdp);
if ($unUser == null) { 
    $error ="Mot de passe incorrect !";
        echo'Error: Error';
} else {
         $_SESSION["id_user"] = $unUser["id_user"];
         $_SESSION["id_proprietaire"] = $unUser["id_proprietaire"];
        $_SESSION["civilite_proprio"] = $unUser["civilite_proprio"];
        $_SESSION["nom_proprio"] = $unUser["nom_proprio"];
        $_SESSION["prenom_proprio"] = $unUser["prenom_proprio"];
        $_SESSION["statut_proprio"] = $unUser["statut_proprio"];
        $_SESSION["email_proprio"] = $unUser["email_proprio"];
        $_SESSION["mdp_proprio"] = $unUser["mdp_proprio"];
        $_SESSION["tel_proprio"] = $unUser["tel_proprio"];
        $_SESSION["adresse_proprio"] = $unUser["adresse_proprio"];
        $_SESSION["cp_proprio"] = $unUser["cp_proprio"];
        $_SESSION["ville_proprio"] = $unUser["ville_proprio"];
        $_SESSION["pays_proprio"] = $unUser["pays_proprio"];
        $_SESSION["code_adherent"] = $unUser["code_adherent"];
        header("location: index.php?page=home&id_user=".$unUser["id_user"]);
}
}



/*******INSERT NEW PROPRIETAIRE********** */

if (isset($_POST["valider_proprio"])) {
$unController->insertProprietaire($_POST);
if (isset($_POST["valider_proprio"])) {
    $email = $_POST["email_proprio"];
    $mdp = $_POST["mdp_proprio"];
    $error="";
    $unUser = $unController->verifconnexionProprietaire($email, $mdp);
    if ($unUser == null) {

    } else {
        $_SESSION["id_user"] = $unUser["id_user"];
        $_SESSION["id_proprietaire"] = $unUser["id_proprietaire"];
        $_SESSION["civilite_proprio"] = $unUser["civilite_proprio"];
        $_SESSION["nom_proprio"] = $unUser["nom_proprio"];
        $_SESSION["prenom_proprio"] = $unUser["prenom_proprio"];
        $_SESSION["statut_proprio"] = $unUser["statut_proprio"];
        $_SESSION["email_proprio"] = $unUser["email_proprio"];
        $_SESSION["mdp_proprio"] = $unUser["mdp_proprio"];
        $_SESSION["tel_proprio"] = $unUser["tel_proprio"];
        $_SESSION["adresse_proprio"] = $unUser["adresse_proprio"];
        $_SESSION["cp_proprio"] = $unUser["cp_proprio"];
        $_SESSION["ville_proprio"] = $unUser["ville_proprio"];
        $_SESSION["pays_proprio"] = $unUser["pays_proprio"];
        $_SESSION["code_adherent"] = $unUser["code_adherent"];
        header("location: index.php?page=home&id_user=".$unUser["id_user"]);
    }
}
}

if(isset($caseStay_locataire)){
    $email_locataire = $_SESSION['email_locataire'];
    $mdp_locataire = $_SESSION['mdp_locataire'];
    $cookie_expire = time() + 60 * 60 * 24 * 30; // durée du cookie (30 jours)
    setcookie($email_locataire, $mdp_locataire, $cookie_expire,"/");
}
if(isset($caseStay_proprio)){
$email_proprio = $_SESSION['email_proprio'];
$mdp_proprio = $_SESSION['mdp_proprio'];
$cookie_expire = time() - 3600;
setcookie($email_locataire, $mdp_locataire, $cookie_expire,"/");
}