<header class="container-fluid">
    <nav class="navbar navbar-expand-lg p-0 pb-1">
        <div class="container-fluid ">
            <a class="navbar-brand text-light responsive_img" href="index.php?page=home"><img src="Images/logo.png" class="img_resp"  width="50%" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">

                        <a class="nav-link" aria-current="page" href="index.php?page=home"><i class="fa-solid fa-house  color-light"></i> Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="index.php?page=location&n=1"><i class="fa-solid fa-mountain-sun color-light"></i> Location</a>
                    </li>
                    <?php
                    
                    if (!isset($_SESSION["email_locataire"]) && !isset($_SESSION["email_proprio"])) {
                        echo '
                        <li class="nav-item">
                        <a class="nav-link" href="index.php?page=connexion_locataire"><i class="fa-solid fa-user"></i> Espace locataire</a>
                    </li>
                     <li class="nav-item">
                         <a class="nav-link" href="index.php?page=apropos"><i class="fa-regular fa-newspaper tN"></i> A propos</a>
                     </li>
                     <div class="dropdown">
                        <ul class="dropdown-menu text-small shadow">
                            <li><a class="dropdown-item" href="index.php?page=inscription_proprio">Nouveau membre</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="index.php?page=connexion_proprietaire">Déjà membre</a></li>
                        </ul>
                     </div>
                    <button class="btn btn-outline-warning ropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user-tie"></i>  Propriétaire</li></button>
                    <button class="btn btn-warning ms-2" type="button"><a href="index.php?page=contact" class="text-decoration-none text-black">Contactez Nous</a> </button>  ';
                    } else if(isset($_SESSION["email_locataire"]) || isset($_SESSION["mdp_proprio"])){
                        echo '
                        <li class="nav-item">
                        <a class="nav-link" href="index.php?page=apropos"><i class="fa-regular fa-newspaper tN"></i> A propos</a>
                    </li>
                    <button class="btn btn-warning custom_off" type="button"><a href="index.php?page=contact" class="text-decoration-none text-black">Contactez Nous</a> </button>
                    <div class="dropdown me-5">
                        <ul class="dropdown-menu text-small shadow">';
                        if(isset($_SESSION["email_proprio"])){
                            echo '  <li><a class="dropdown-item" href="index.php?page=profil_prorio&id_user='.$_SESSION['id_user'].'""><i class="bi bi-gear"></i> Profil</a></li>';
                            echo ' <li><a class="dropdown-item" href="index.php?page=reservation&id_user='.$_SESSION['id_user'].'"><i class="bi bi-list-ul"></i> Mes réservations</a></li>';

                            echo '  <li><a class="dropdown-item" href="index.php?page=dashboard&id_user='.$_SESSION['id_user'].'"><i class="bi bi-houses"></i> Dashboard</a></li>';

                        }else{
                            echo '  <li><a class="dropdown-item" href="index.php?page=profil_locataire&id_user='.$_SESSION['id_user'].'"><i class="bi bi-gear"></i> Profil</a></li>
                            <li><a class="dropdown-item" href="index.php?page=reservation&id_user='.$_SESSION['id_user'].'"><i class="bi bi-list-ul"></i> Mes réservations</a></li>';
                        }
                          
                                echo '
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger fw-semibold" href="index.php?page=deconnexion"><i class="bi bi-box-arrow-left text-danger"></i> Déconnexion</a></li>
                        </ul>
                    </div>';
                    if(isset($_SESSION["email_proprio"])){
                    echo '
                    
                    <button class="btn custom_align_profil btn-outline-warning ms-4 ropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user rounded"></i> '.$_SESSION["civilite_proprio"].' '.$_SESSION["nom_proprio"].'</li></button>                    
                    </ul>';}else{
                            $civilite_locataire = $_SESSION['civilite_locataire'];
                            $prenom_locataire = $_SESSION['prenom_locataire'];

                        echo '
                        <button class="btn custom_align_profil btn-outline-warning ms-4 ropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user rounded"></i> '.$_SESSION["civilite_locataire"].' '.$_SESSION["nom_locataire"].'</li></button>                    
                        </ul>';
                    }
                    }

                    ?>
                   
                </ul>
            </div>
        </div>
    </nav>
</header>
<section style="height: 9vh;">
</section>