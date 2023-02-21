<?php
session_start();
require_once("controller/config_database.php");
require_once("controller/controller.php");
$unController = new Controller($server, $bdd, $user, $mdp);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="Css/style.css" class="css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!--Integration du css boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/js-year-calendar@latest/dist/js-year-calendar.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
    <?php
        require_once("setting/setting_appartement.php");
        require_once("setting/setting_reservation.php");
        require_once("setting/setting_demande.php");
        require_once("setting/setting_update.php");
        require_once("setting/setting_locataire_proprio.php");
        require_once("include/header.php");

    //Chaque section à l'interieur de notre balise php appel la page mentionner -->
/************************************************-----------------------PARTIE LOCATAIRE---------------------------------------********************** */
/********CONNEXION LOCATAIRE***** */
    if (isset($_POST["se_connecter"])) {
        $email = $_POST["email_locataire"];
        $mdp = $_POST["mdp_locataire"];

        $unUser = $unController->verifconnexionLocataire($email, $mdp);
        if ($unUser == null) { 
                
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
                header("location: index.php?page=home&&id_user=".$unUser["id_user"]);
            }
        }
    }



    

    /************************************************-----------------------PARTIE PROPRIETAIRE---------------------------------------********************** */
/********CONNEXION PROPRIETAIRE***** */
if (isset($_POST["se_connecter_proprio"])) {
    $email = $_POST["email_proprio"];
    $mdp = $_POST["mdp_proprio"];
    $unUser = $unController->verifconnexionProprietaire($email, $mdp);
    if ($unUser == null) { 
            echo'Error: Error';
    } else {
             $_SESSION["id_user"] = $unUser["id_user"];
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
        $unUser = $unController->verifconnexionProprietaire($email, $mdp);
        if ($unUser == null) {
            echo"Inscription okay";
        } else {
            $_SESSION["id_user"] = $unUser["id_user"];
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


/******************************************RESERVATION ********************* */

    if (isset($_GET["page"])) {
        $page = $_GET["page"];
    } else {
        $page = "home";
    }

    switch ($page) {
        case "home":
            require_once("Templates/home.php");
            break;
        case "location":
            require_once("Templates/location.php");
            break;
            break;
        case "appartement":
            require_once("Templates/appartement.php");
            break;
        case "connexion_proprietaire":
            require_once("Templates/connexion_proprietaire.php");
            break;
        case "connexion_locataire":
            require_once("Templates/connexion_locataire.php");
            break;
        case "inscription_proprio":
            require_once("Templates/inscription_proprio.php");
            break;
        case "profil_locataire":
            require_once("Templates/profil_locataire.php");
            break;
        case "profil_prorio":
            require_once("Templates/profil_proprio.php");
            break;
        case "reservation":
            require_once("Templates/reservation.php");
            break;
        case "demande":
            require_once("Templates/demande_proprio.php");
            break;
        case "appartement_proprio":
            require_once("Templates/appartement_proprio.php");
            break;
        case "formulaire_appartement":
            require_once("Templates/formulaire_appartement.php");
            break;
        case "contrat_proprio":
            require_once("Templates/contrat_proprio.php");
            break;
        case "apropos":
            require_once("Templates/apropos.php");
            break;
        case "dashboard":
            require_once("Templates/dashboardAdmin.php");
            break;
        case "deconnexion":
            session_destroy();
            unset($_SESSION["email_locataire"]);
            unset($_SESSION["email_proprio"]);
            header("location: index.php?page=home");
            break;
        case "contact":
            require_once("Templates/contact.php");
            break;
        default:
            require_once("erreur.php");
    }
 


/******Calling footer****/
    require_once("include/footer.php");
    ?>
      
    <!-- JavaScript Bundle with Popper -->
    <script src="https://unpkg.com/js-year-calendar@latest/dist/js-year-calendar.min.js"></script>
    <script src="https://unpkg.com/js-year-calendar@next/dist/js-year-calendar.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="JavaScript/main.js"></script>
</body>

</html>