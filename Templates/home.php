    <section class="sectionOne position-relative">
        <div class="overlay position-absolute top-0 w-100">
            <div class="mt-custom container-fluid ms-5 ps-5 text-light">
                <h1 class="sizing-menu">Appartements de<br> Particuliers</h1>
                <h4>Séjour chaleureux au coeur des montagnes</h4>
 
                <div class="row container bg-white mt-5">
                    <form action="index.php?page=location" method="post">
                    <div class="col- lg-12 col-md-12 col-sm-12 col-xm-12  pb-2 pt-3">
                        <input type="search" class="w-100 border border-light p-2" name="mot_index" id="" placeholder="Indiquez une addresse, un lieu...">
                    </div>
                    <div class="d-flex justify-content-between pb-3">
                        <input class="pe-5 w-100 border border-light p-3" type="text" minlength="0" name="prixMin" id="" placeholder="Budget € min">
                        <input class="pe-5 ms-3 w-100 border border-light p-3" type="text" minlength="0" name="prixMax" id="" placeholder="Budget € max">
                            <button class=" ms-3 w-100 bg-custom border border-light p-3" type="submit" name="filtre_index" id="" >rechercher</button>
                       
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <section class="sectionTwo container">
        <h3 class="text-center py-5">Nos logements à la une</h3>
        <div class="container text-center">
        <div class="row g-2">
            <?php
  
                $counter = 0;
                foreach ($appartements as $appartement){
                    if($counter == 6){
                        break;
                    }

                    echo '
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xm-12 p-3">
                    <div class="card">
                        <img src="Images/'.$appartement['image_1'].'" class="card-img-top fixed-size" alt="...">
                        <div class="card-body d-flex">
                            <div class="pt-3 me-3">
                                <a href="index.php?page=appartement&id_appart='.$appartement["id_appart"].'"><i class="fa-solid fa-circle-chevron-right fs-3"></i> </a>
                            </div>

                            <div class="ps-3 text-start border-start">';
                            $description = $appartement['intitule_appart'];
                            if(strlen($appartement['intitule_appart']) > 6){
                              $description = substr($description, 0, 6)."...";
                            }
                            echo'<a class="card-text  text-decoration-none fw-semibold" href="index.php?page=appartement&id_appart='.$appartement["id_appart"].'"><span class="text-secondary">'.$appartement['ville_appart'].' ('.$appartement["cp_appart"].')</span><br> <span class="text-primary ">'.$appartement['prix_appart'].'</span>€ - <span>'.$appartement['superficie_appart'].'</span> m²<br><span class="text-black">'.$appartement['capacite_appart'] .' Pièce(s) . '.$description.' . '; if ($appartement['statut_appart']== "Disponible"){ echo '<span class="bg-success rounded pe-1 ps-1 text-light">';}else{echo '<span class="bg-warning rounded pe-1 ps-1">';} echo ' '.$appartement['statut_appart'].'</span></span> </a>
                            </div>
                        </div>
                    </div>
                </div> ';
       
                $counter++;
                }


            ?>  
       
                
                
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
        <h3 class="text-center py-5">Ce que nos clients disent de nous:</h3>
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
    
