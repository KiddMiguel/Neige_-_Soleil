<?php
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
    <header class="container-fluid">
        <nav class="navbar navbar-expand-lg p-0">
            <div class="container-fluid">
                <a class="navbar-brand text-light" href="#"><img src="Images/logo.png" width="50%" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                       
                            <a class="nav-link" aria-current="page" href="index.php?page=home">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="index.php?page=location">Location</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Connexion</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Inscription
                            </a>
                            <ul class="dropdown-menu">
                                <li class="hover-dropdown"><a class="dropdown-item" href="#">Locataire</a></li>
                                <hr class="dropdown-divider m-0">
                        </li>
                        <li class="hover-dropdown"><a class="dropdown-item" href="#">Propriétaire</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">A propos</a>
                    </li>
                    <button class="btn btn-warning" type="submit">Contactez nous</button>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <!-- Chaque section à l'interieur de notre balise php appel la page mentionner -->
    <?php
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
                <li>LOGO</li>
                <li class="form-text">© 2022 Nom de l’entreprise</li>
                <li class="form-text">6 Impasse des 2 cousins, Paris, France</li>
                <li class="form-text">contact@nomdel’entreprise.com</li>
                <div>
                    <H6>Inscription à la newsletter</H6>
                    <input type="text" name="" class="p-1 me-2" id="" placeholder="Votre e-mail"><button type="button" class="p-1">Je m'inscrit</button>
                </div>
            </ul>
        </div>


    </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>