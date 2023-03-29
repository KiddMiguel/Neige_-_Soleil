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
    <!-- <link rel="stylesheet" type="text/css" href="https://unpkg.com/js-year-calendar@latest/dist/js-year-calendar.min.css" /> -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.css' rel='stylesheet' />
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
        require_once("setting/setting_verifConnexion.php");
        require_once("include/header.php");

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
            require_once("Templates/home.php");
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
      
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="JavaScript/main.js"></script>
</body>

</html>