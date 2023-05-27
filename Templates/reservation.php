<section class="vh-100" style="background-color: #eee;">
    <div class="container py-5 ">
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="col-md-12 col-xl-10">
            <?php  
            // $validation = "";
            // if($locataire['nb_reservations'] >= 5){
            //     $validation .= "Vous bénéficiez d'une rémise de 50% sur votre prochaine réservation.";
            // }
            
            ?>
                <div class="card ">
                    <div class="card-header p-3 d-flex">
                        <h5 class="mb-0 me-auto"><i class="fas fa-tasks me-2"></i>Réservations</h5>
                        <p class="fst-italic">La confirmation de la réservation se fera dans quelques minutes.</p>
                    </div>
                    <!-- <p class=" ms-4 mt-3"><?= ((isset($_SESSION["email_locataire"]))) ? $validation : "" ?></p> -->

                    <div class="card-body d-flex" >
                        <table class="table mb-0 w-25">
                            <thead>
                                <tr>
                                    <th scope="col">Intitule</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($reservationsAppart as $appart) {
                                    
                                        $intitule = $appart['intitule_appart'];
                                        if(strlen($intitule) > 19){
                                            $intitule = substr($intitule, 0, 14)."...";
                                        }
                                        echo '
                                <tr class="fw-normal">
                                    <th>
                                    <a class="card-text  text-decoration-none fw-semibold" href="index.php?page=appartement&id_appart='.$appart["id_appart"].'">
                                     <img src="Images/' . $appart['image'] . '" class="rounded" width="25%"alt="">
                                    <span class="ms-2">' . $intitule . '</span></a>
                                    </th>
                                </tr>';
                                    }
                                ?>
                            </tbody>
                        </table>
                        <table class="table mb-0 w-75">
                            <thead>
                                <tr>
                                    <th scope="col">Personne</th>
                                    <th scope="col">Date Début</th>
                                    <th scope="col">Date Fin</th>
                                    <th scope="col">Statut</th>
                                    <th scope="col">Prix</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($reservations as $reservation) {
                                        echo '
                                <tr class="fw-normal">
                                    <td >
                                    <span class="btn btn-outline-secondary" disabled="disabled">' . $reservation['nb_personnes'] . '</span>
                                    </td>
                                    <td>
                                    <input type="date" class=" border rounded" value="' . $reservation['date_debut_reservation'] . '" disabled="disabled">
                                    </td>
                                    <td>
                                       <input type="date" class=" border rounded" value="' . $reservation['date_fin_reservation'] . '" disabled="disabled">

                                    </td>
                                    <td>';
                                    if($reservation['statut_reservation']=='Réservé'){
                                        echo '<h6 class="mb-0"><span class="badge bg-success">' . $reservation['statut_reservation'] . '</span></h6>';
                                    }else{
                                        echo '<h6 class="mb-0"><span class="badge bg-warning">' . $reservation['statut_reservation'] . '</span></h6>';
                                    }
                                   echo '</td>
                                    <td>
                                        <button  class=" border rounded">' . $reservation['prix_reservation'] . ' €/Mois</button>
                                    </td>
                                    <td>';
                                    if($reservation['statut_reservation'] != 'Réservé'){
                                        echo '<button  class="btn btn-danger"><a href="index.php?page=delete&id_reservation='.$reservation['id_reservation'].'" class="text-decoration-none text-light" data-mdb-toggle="tooltip" title="Done">Annuler</i></a></button>';
                                    }else {
                                        if(isset($_SESSION['email_locataire'])){
                                            echo '<a href="contrat/contrat_locataire.php?id_appart='.$reservation['id_appart'].'" target="blank"> <button class="btn btn-primary"><i class="bi bi-clipboard2-fill fs-6" style="color:#DEE2E6 !important;"></i>Contrat</button> </a>';
                                        }else{
                                            echo '<a href="contrat/contrat_proprietaire.php?id_appart='.$reservation['id_appart'].'" target="blank"> <button class="btn btn-primary"><i class="bi bi-clipboard2-fill fs-6" style="color:#DEE2E6 !important;"></i>Contrat</button> </a>';
                                        }
                                    }
                                     echo'</td>
                                </tr>';
                                    }

                                ?>

                            </tbody>
                        </table>
                        

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>