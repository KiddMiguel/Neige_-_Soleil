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
    <header class="container-fluid position-absolute">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand text-light" href="#">LOGO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Location</a>
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
                    <li class="nav-item">
                        <a class="nav-link " href="#">Contactez Nous</a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="sectionOne position-relative">
        <div class="overlay position-absolute top-0 w-100">
            <div class="mt-custom container-fluid ms-5 ps-5 text-light">
                <h1 class="sizing-menu">Appartements de<br> Particuliers</h1>
                <h4>Séjour chaleureux au coeur des montagnes</h4>

                <div class="row container bg-white mt-5">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12  pb-2 pt-3">
                        <input type="search" class="w-100 border border-light p-2" name="" id="" placeholder="Indiquez une addresse, un lieu...">
                    </div>
                    <div class="d-flex justify-content-between pb-3">
                        <input class="pe-5 w-100 border border-light p-3" type="number" name="" id="" placeholder="Budget € max">
                        <input class="pe-5 ms-3 w-100 border border-light p-3" type="number" name="" id="" placeholder="Surface m² min">
                        <input class=" ms-3 w-100 bg-custom border border-light p-3" type="submit" name="" id="" value="Rechercher">
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="sectionTwo container">
        <h3 class="text-center py-5">Nos logements à la une</h3>
        <div class="container text-center">
            <div class="row g-2">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xm-12 p-3">
                    <div class="card">
                        <img src="images/image.png" class="card-img-top" alt="...">
                        <div class="card-body d-flex">
                            <div class="pt-3 me-3">
                                <a href="#"><i class="fa-solid fa-circle-chevron-right fs-3"></i> </a>
                            </div>

                            <div class="ps-3 text-start border-start">
                                <a class="card-text  text-decoration-none fw-semibold" href=""><span class="text-secondary">PARIS(75017)</span><br> <span class="text-primary ">1 300.2</span>€ - <span>53.0</span> m²<br><span class="text-black">2pièces . Meublé . Rez-de-chaussée</span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sectionThree container pb-5">
        <hr>
        <h3 class="text-center pt-5">Comment ça marche</h3>
        <h5 class="text-secondary text-center pb-5">Locataire / Propriétaire</h5>
        <div class=" row">
            <div class="feature col-lg-3 col-md-3 col-sm-6 col-xm-12">
                <div class=" text-center mb-3">
                    <i class="fa-solid fa-user logo_how_make"></i>
                </div>
                <h5 class="text-center">Fiche locative</h5>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            </div>
            <div class="feature col-lg-3 col-md-3 col-sm-6 col-xm-12">
                <div class=" text-center mb-3">
                    <i class="fa-solid fa-folder logo_how_make"></i>
                </div>
                <h5 class="text-center">Dossier sécurisé</h5>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            </div>
            <div class="feature col-lg-3 col-md-3 col-sm-6 col-xm-122">
                <div class=" text-center mb-3">
                    <i class="fa-solid fa-pen logo_how_make"></i>
                </div>
                <h5 class="text-center">Signature</h5>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>

            </div>
            <div class="feature col-lg-3 col-md-3 col-sm-6 col-xm-12">
                <div class=" text-center mb-3">
                    <i class=" fa-solid fa-house logo_how_make"></i>
                </div>
                <h5 class="text-center">Logement</h5>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            </div>
        </div>
    </section>

    <hr>

    <section class="sectionFour container-fluid">

        <div id="myCarousel" class="carousel slide comments" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <div class=" row">
                                <div class="album py-5 bg-light">
                                    <div class="container">

                                        <div class="row g-2">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xm-12 p-5">
                                                <div class="card border-start border-bottom shadow ">
                                                    <div class="text-center">
                                                        <i class="fa-solid fa-user fs-1 text-black"></i>
                                                        <p class="fs-6 fw-semibold text-black pt-1 mb-0">Samuel Samoah</p>
                                                    </div>
                                                    <div class="card-body">
                                                        <p class="card-text text-black">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                                                        <div class="d-flex">
                                                            <small class="text-muted">9 mins</small>
                                                            <small class="text-muted ms-auto">
                                                                <i class="fa-solid fa-star text-warning"></i>
                                                                <i class="fa-solid fa-star text-warning"></i>
                                                                <i class="fa-solid fa-star text-warning"></i>
                                                                <i class="fa-solid fa-star text-warning"></i>
                                                                <i class="fa-solid fa-star text-warning"></i>
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <i class="fa-solid fa-chevron-left text-black fs-1"></i>
                    <span class=" text-primary"></span>
                </button>
                <button class="carousel-control-next " type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <i class="fa-solid fa-chevron-right text-black fs-1"></i>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="help pt-5 mt-5 mb-5 container d-flex justify-content-center align-self-center ">
            <div class="m-auto ">
                <h4 class="fs-3">Avez-vous besoin d'aide ?</h4>
                <p>Entrez votre numéro de téléphone portable pour obtenir de l'aide</p>
                <div class="sendHelp bg-white">
                    <select name="pets" id="pet-select" class="ms-2">
                        <option value="dog">FR</option>
                        <option value="cat">ANG</option>
                    </select><input class="mt-2 mb-2 ps-2" type="text" name="" id=""><button class="bouton ms-2">Envoyer</button>
                </div>

            </div>

        </div>
    </section>
<footer class="container-fluid">
    <div class="container text-light pb-5">

    <ul class="d-flex justify-content-around pt-5">
        <li class="nav-item">Lien utiles -></li>
        <li >Lorem</li>
        <li>Lorem</li>
        <li>Lorem</li>
        <li>Lorem</li>
        <li>Lorem</li>
        <li>Lorem</li>
    </ul>
    <hr>
    <ul  class="d-flex justify-content-around pt-5">
        <li>LOGO</li>
        <li class="form-text">© 2022 Nom de l’entreprise</li>
        <li class="form-text">6 Impasse des 2 cousins, Paris, France</li>
        <li class="form-text">contact@nomdel’entreprise.com</li>
        <div>
            <H6>Inscription à la newsletter</H6>
            <input type="text" name="" class="p-1 me-2" id=""><button type="button" class="p-1">Je m'inscrit</button>
        </div>
    </ul>
    </div>


</footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>