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
    if (!isset($_SESSION["email_locataire"])) {
        echo '
    <header class="container-fluid">
        <nav class="navbar navbar-expand-lg p-0">
            <div class="container-fluid ">
                <a class="navbar-brand text-light" href="#"><img src="Images/logo.png" width="50%" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">

                            <a class="nav-link" aria-current="page" href="index.php?page=home"><i class="fa-solid fa-house  color-light"></i> Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="index.php?page=location"><i class="fa-solid fa-mountain-sun color-light"></i> Location</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="index.php?page=connexion"><i class="fa-solid fa-id-card "></i> Connexion</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-user-plus text-light"></i> Inscription
                            </a>
                            <ul class="dropdown-menu">
                                <li class="hover-dropdown"><a class="dropdown-item" href="#"><i class="fa-solid fa-user text-black"></i> Locataire</a></li>
                                <hr class="dropdown-divider m-0">
                        </li>
                        <li class="hover-dropdown"><a class="dropdown-item" href="#"><i class="fa-solid fa-user-tie text-black"></i> Propriétaire</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-regular fa-newspaper tN"></i> A propos</a>
                    </li>
                    <button class="btn btn-warning" type="submit"><a href="index.php?page=contact" class="text-decoration-none text-black">Contactez Nous</a> </button>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section style="height: 9vh;">
    </section>';

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
            case "contact":
                require_once("Templates/contact.php");
                break;
            default:
                require_once("erreur.php");
        }
    }

    if (isset($_SESSION["email_locataire"])){
        echo '
        <header class="container-fluid">
            <nav class="navbar navbar-expand-lg p-0">
                <div class="container-fluid ">
                    <a class="navbar-brand text-light" href="#"><img src="Images/logo.png" width="50%" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
    
                                <a class="nav-link" aria-current="page" href="index.php?page=home"><i class="fa-solid fa-house  color-light"></i> Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="index.php?page=location"><i class="fa-solid fa-mountain-sun color-light"></i> Location</a>
                            </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-regular fa-newspaper tN"></i> A propos</a>
                        </li>
                        <button class="btn btn-warning" type="button"><a href="index.php?page=contact" class="text-decoration-none text-black">Contactez Nous</a> </button>
                        <div class="dropdown">
     
                        <ul class="dropdown-menu text-small shadow">
                            <li><a class="dropdown-item" href="#">Profil</a></li>
                          <li><a class="dropdown-item" href="#">Mes réservations</a></li>
                          <li><a class="dropdown-item" href="#">Gérer Compte</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="index.php?page=deconnexion">Déconnexion</a></li>
                        </ul>
                      </div>
                        <button class="btn btn-outline-warning ms-4 ropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user rounded"></i> '.$_SESSION["civilite_locataire"].' '.$_SESSION["nom_locataire"].'</li></button>
                       

                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <section style="height: 9vh;">
        </section>';
    
        
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
            case "contact":
                require_once("Templates/contact.php");
                break;
                case "deconnexion":
                    session_destroy();
                    unset($_SESSION["email_locataire"]);
                    header("location: index.php?page=home");
                    break;
            default:
                require_once("erreur.php");
        }
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