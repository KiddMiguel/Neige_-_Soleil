
<section class="sectionTwo sectionLocation">
    <div class="container text-center ">
    <h3 class="pt-5 pb-2">Découvrez tous nos logements</h3>
    <div class="mt-5 w-50 ms-2 justify-content-center">
            <div class="row">
                <div class="col-md-8">
                 
                        <form action="" class="input-group mb-3" method="post">
                            <input type="text" class="form-control input-text " name="mot" placeholder="Recherche...." aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append ms-2">
                                <button class="btn btn-outline-warning btn-lg" type="submit" name="filter"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                
                </div>
            </div>
        </div>
        <div class="row g-2 ">
           <?php
                foreach ($appartements as $appartement){
                    echo '
            <div class="col-lg-4 col-md-4 col-sm-6 col-xm-12 p-3" style="width: 25%; height: 20%;">
                <div class="card">
                <img src="Images/'.$appartement['image_1'].'" class="card-img-top" style="width:100%; height: 15rem;" alt="...">
                    <div class="card-body d-flex">
                        <div class="pt-3 me-3">
                        <a href="index.php?page=appartement&id_appart='.$appartement["id_appart"].'"><i class="fa-solid fa-circle-chevron-right fs-3"></i> </a>
                        </div>

                        <div class="ps-3 text-start border-start">';
                            $description = $appartement['intitule_appart'];
                            if(strlen($appartement['intitule_appart']) > 10){
                              $description = substr($description, 0, 10)."...";
                            }
                            echo'<a class="card-text  text-decoration-none fw-semibold" href="index.php?page=appartement&id_appart='.$appartement["id_appart"].'"><span class="text-secondary">'.$appartement['ville_appart'].' ('.$appartement["cp_appart"].')</span><br> <span class="text-primary ">'.$appartement['prix_appart'].'</span>€ - <span>'.$appartement['superficie_appart'].'</span> m²<br><span class="text-black">'.$appartement['capacite_appart'] .' Pièce(s) . '.$description.' . '; if ($appartement['statut_appart']== "Disponible"){ echo '<span class="bg-success rounded pe-1 ps-1 text-light">';}else{echo '<span class="bg-warning rounded pe-1 ps-1">';} echo ' '.$appartement['statut_appart'].'</span></span> </a>
                            </div>
                    </div>
                </div>
            </div>';
                }
            ?>
            
        </div>
    </div>
    <div class="py-5">
        <nav aria-label="...">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link text-black" href="#">Previous</a>
                </li>
                <li class="page-item "><a class="page-link actives" href="#">1</a></li>
                <li class="page-item " aria-current="page">
                    <a class="page-link " href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link text-black" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</section>