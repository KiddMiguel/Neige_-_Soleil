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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
   <?php
require_once ("include/header.php");
        //Chaque section à l'interieur de notre balise php appel la page mentionner -->


        if (isset($_POST["se_connecter"])) {
            $email = $_POST["email_locataire"];
            $mdp = $_POST["mdp_locataire"];
            $unUser = $unController->verifconnexion($email, $mdp);
            if ($unUser == null) {
                echo "Mot de passe incorrect";
            } else {
                $_SESSION["email_locataire"] = $unUser["email_locataire"];
                $_SESSION["mdp_locataire"] = $unUser["mdp_locataire"];
                $_SESSION["nom_locataire"] = $unUser["nom_locataire"];
                $_SESSION["prenom_locataire"] = $unUser["prenom_locataire"];
                $_SESSION["civilite_locataire"] = $unUser["civilite_locataire"];
                header("location: index.php?page=home");
            }
        }


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
            case "connexion":
                require_once("Templates/connexion.php");
                break;
            case "deconnexion":
                    session_destroy();
                    unset($_SESSION["email_locataire"]);
                    header("location: index.php?page=home");
                    break;
            case "contact":
                require_once("Templates/contact.php");
                break;
            default:
                require_once("erreur.php");
        }

    ?>
    <footer class="container-fluid">
        <div class="container text-light pb-5">

            <ul class="container-fluid d-flex justify-content-around pt-5">
                <li class="nav-item">Lien utiles -></li>
                <li>Lorem</li>
                <li>Lorem</li>
                <li>Lorem</li>
                <li>Lorem</li>
                <li>Lorem</li>
                <li>Lorem</li>
            </ul>
            <hr>
            <ul class="d-flex justify-content-around pt-5">
                <li><img src="Images/logo.png" width="50%" alt=""></li>
                <li class="form-text">© 2022 Nom de l’entreprise</li>
                <li class="form-text">6 Impasse des 2 cousins, Paris, France</li>
                <li class="form-text">contact@nomdel’entreprise.com</li>
                <div>
                    <H6>Inscription à la newsletter</H6>
                    <input type="text" name="" class="p-1 me-2 rounded-2" id="" placeholder="Votre e-mail"><button type="button" class="p-1 rounded-2">Je m'inscrit</button>
                </div>
            </ul>
        </div>


    </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>