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
                    <?php if (!isset($_SESSION["email_locataire"])) {
                        echo '
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
                            ';
                    }else{
                        echo '
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
                    </div>';
                    }
                    ?>
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
</section>;