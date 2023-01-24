<section class="vh-100" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-12 col-xl-10">

                <div class="card">
                    <div class="card-header p-3">
                        <h5 class="mb-0"><i class="fas fa-tasks me-2"></i>Réservations</h5>
                    </div>
                    <div class="card-body" data-mdb-perfect-scrollbar="true" style="position: relative; height: 400px">

                        <table class="table mb-0 w-100">
                            <thead>
                                <tr>
                                    <th scope="col">Intitule</th>
                                    <th scope="col">Nb Personne</th>
                                    <th scope="col">Date Début</th>
                                    <th scope="col">Date Fin</th>
                                    <th scope="col">Statut</th>
                                    <th scope="col">Prix</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach ($reservations as $reservation){

                                   
                                                 
                                echo '
                                <tr class="fw-normal">
                                    <th>
                                     <span class="ms-2">Nom de l\'appartement</span>
                                    </th>
                                    <td class="align-middle">
                                    <span class="btn btn-outline-secondary" disabled="disabled">'.$reservation['nb_personnes'].'</span>
                                    </td>
                                    <td class="align-middle">
                                    <input type="date" class=" border rounded" value="'.$reservation['date_fin_reservation'].'" disabled="disabled">
                                    </td>
                                    <td class="align-middle">
                                       <input type="date" class=" border rounded" value="'.$reservation['date_debut_reservation'].'" disabled="disabled">
                                    </td>
                                    <td class="align-middle">
                                        <h6 class="mb-0"><span class="badge bg-warning">'.$reservation['statut_reservation'].'</span></h6>
                                    </td>
                                    <td class="align-middle">
                                        <button  class=" border rounded">'.$reservation['prix_reservation'].' €/Mois</button>
                                    </td>
                                    <td class="align-middle">
                                        <button  class="btn btn-danger"><a href="#!" class="text-decoration-none text-light" data-mdb-toggle="tooltip" title="Done">Annuler</i></a></button>
                                    </td>
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