<section class="sectionTwo sectionLocation">
    <div class="container text-center vh-100">
        <h3 class="pt-5 pb-2">Découvrez tous nos logements</h3>
        <div class="mt-5 w-100 justify-content-center">
            <div class="row">
                <div class="col-md-12">

                    <div class="container">
                        <form action="index.php?page=location" class=" d-flex" method="post">
                                <input type="search" class="border border-black rounded p-2 me-3 w-100" style="border:none; outline:none;" name="mot_index" id="" placeholder="Indiquez une addresse, un lieu...">
                                <div class="w-50 me-3">
                                <select id="monselect" class="form-select p-3" name="statut">
                                <optgroup label="Statut appart">
                                    <option value="" >Dispo + Location</option>
                                    <option value="Disponible">Disponible</option>
                                    <option value="En location">En location</option>
                                </optgroup>
                                </select>
                                </div>
                                <input class=" w-50 pe-5  border border-black p-3 rounded" style="border:none; outline:none;" type="text" minlength="0" name="prixMin" id="" placeholder="Budget € min">
                                <input class="pe-5 ms-3 w-50  border border-black p-3 rounded" style="border:none; outline:none;" type="text" minlength="0" name="prixMax" id="" placeholder="Budget € max">
                                <button class="ms-3 w-50 bg-custom border rounded bg-warning" type="submit" name="filtre_index" id="">rechercher</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-2 ">
            <?php
            foreach ($appartements as $appartement) {
                if ($appartement['statut_appart'] != "") {
                    echo '
            <div class="col-lg-4 col-md-4 col-sm-6 col-xm-12 p-3" style="width: 25%; height: 20%;">
                <div class="card">
                <img src="Images/' . $appartement['image'] . '" class="card-img-top" style="width:100%; height: 15rem;" alt="...">
                    <div class="card-body d-flex">
                        <div class="pt-3 me-3">
                        <a href="index.php?page=appartement&id_appart=' . $appartement["id_appart"] . '"><i class="fa-solid fa-circle-chevron-right fs-3"></i> </a>
                        </div>

                        <div class="ps-3 text-start border-start">';
                    $description = $appartement['intitule_appart'];
                    if (strlen($appartement['intitule_appart']) > 10) {
                        $description = substr($description, 0, 10) . "...";
                    }
                    echo '<a class="card-text  text-decoration-none fw-semibold" href="index.php?page=appartement&id_appart=' . $appartement["id_appart"] . '"><span class="text-secondary">' . $appartement['ville_appart'] . ' (' . $appartement["cp_appart"] . ')</span><br> <span class="text-primary ">' . $appartement['prix_appart'] . '</span>€ - <span>' . $appartement['superficie_appart'] . '</span> m²<br><span class="text-black">' . $appartement['nb_piece'] . ' Pièce(s) . ' . $description . ' . ';
                    if($appartement['id_user'] == null){
                        echo '<span class="bg-success rounded pe-1 ps-1 text-light">';
                        if ($appartement['statut_appart'] == "Disponible") {
                            echo '<span class="bg-success rounded pe-1 ps-1 text-light">';
                        }
                    }else{
                        echo '<span class="bg-warning rounded pe-1 ps-1">';

                    }
                    echo ' ' . $appartement['statut_appart'] . '</span></span> </a>
                            </div>
                    </div>
                </div>
            </div>';
                }
            }
            ?>

        </div>
    </div>
    <div class="py-5 my-5">
        <nav aria-label="...">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link text-black" href="#">Précédent</a>
                </li>
                <li class="page-item "><a class="page-link actives" href="#">1</a></li>
                <li class="page-item " aria-current="page">
                    <a class="page-link " href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link text-black" href="#">Suivant</a>
                </li>
            </ul>
        </nav>
    </div>
</section>