<section class="vh-100" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-12 col-xl-10 w-100">

                <div class="card">
                    <div class="card-header p-3 d-flex">
                        <h5 class="mb-0"><i class="fas fa-tasks me-2"></i>Mes Demandes</h5>
                        <button type="button" class="btn btn-success mb-0 ms-auto"> <a href="index.php?page=formulaire_appartement" class="text-decoration-none text-light"><i class="bi bi-plus-circle"></i> Ajouter</a></button>
                    </div>
                    <div class="card-body" data-mdb-perfect-scrollbar="true" style="position: relative; height: 400px">

                        <table class="table mb-0 ">
                            <thead>
                                <tr>
                                    <th scope="col">Intitule</th>
                                    <th scope="col">Nb Pièces</th>
                                    <th scope="col">Nb Personne</th>
                                    <th scope="col">Nb Chambre</th>
                                    <th scope="col">Nb Lit</th>
                                    <th scope="col">Nb Salle de bain</th>
                                    <th scope="col">Date demande</th>
                 
                                    <th scope="col">Statut</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                <tr class="fw-normal">
                                    <th>
                                     <span class="ms-2">Nom de l\'appartement</span>
                                    </th>
                                    <td class="align-middle">
                                    <span class="btn btn-outline-secondary" disabled="disabled"></span>
                                    </td>
                                    <td class="align-middle">
                                    <span class="btn btn-outline-secondary" disabled="disabled"></span>
                                    </td>
                                    <td class="align-middle">
                                    <span class="btn btn-outline-secondary" disabled="disabled"></span>
                                    </td>
                                    <td class="align-middle">
                                    <span class="btn btn-outline-secondary" disabled="disabled"></span>
                                    </td>
                                    <td class="align-middle">
                                    <span class="btn btn-outline-secondary" disabled="disabled"></span>
                                    </td>
                                    <td class="align-middle">
                                    <input type="date" class="btn btn-outline-secondary w-75" value="" disabled="disabled">
                                    </td>
                              
                                    <td class="align-middle">
                                        <h6 class="mb-0"><span class="badge bg-warning">En cours</span></h6>
                                    </td>
                                    <td class="align-middle">
                                        <button  class="btn btn-danger"><a href="#!" class="text-decoration-none text-light" data-mdb-toggle="tooltip" title="Done"><i class="bi bi-x-octagon"></i></a></button>
                                   </td>
                                </tr>
                       

                             
                                
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>