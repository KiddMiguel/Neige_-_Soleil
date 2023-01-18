
<section class="sectionTwo sectionLocation">
    <div class="container text-center ">
        <h3 class="pt-5 pb-2">Découvrez tous nos logements</h3>
        <div class="row g-2 ">
           <?php
                foreach ($appartements as $appartement){
                    echo '
            <div class="col-lg-4 col-md-4 col-sm-6 col-xm-12 p-3" style="width: 25%; height: 20%;">
                <div class="card">
                    <img src="images/image.png" class="card-img-top" alt="..." style="width: 100%;">
                    <div class="card-body d-flex">
                        <div class="pt-3 me-3">
                        <a href="index.php?page=appartement&id_appart='.$appartement["id_appart"].'"><i class="fa-solid fa-circle-chevron-right fs-3"></i> </a>
                        </div>

                        <div class="ps-3 text-start border-start">
                        <a class="card-text  text-decoration-none fw-semibold" href="index.php?page=appartement&id_appart='.$appartement["id_appart"].'"><span class="text-secondary">'.$appartement['ville_appart'].'('.$appartement["cp_appart"].')</span><br> <span class="text-primary ">'.$appartement['prix_appart'].'</span>€ - <span>'.$appartement['superficie_appart'].'</span> m²<br><span class="text-black">'.$appartement['capacite_appart'] .' Pièce(s) . '.$appartement["intitule_appart"].' . '.$appartement['statut_appart'].'</span> </a>
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