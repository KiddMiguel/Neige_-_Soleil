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
                                <tr class="text-center">
                                    <th scope="col">Intitule</th>
                                    <th scope="col ">Statut</th>
                                    <th scope="col">Date demande</th>    
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                    foreach ($demandes as $demande){
                                        
                                echo '<tr class="fw-normal">
                                    <th class="text-center">
                                     <span class=" ms-2">1</span>
                                    </th>
                                    
                                    <td class="text-center">
                                        <h6 class="mb-0"><span class="text-center badge bg-warning w-75 fs-6">'.$demande['statut_demande'].'</span></h6>
                                    </td>
                                    <td class="text-center">
                                    <input type="date" class="text-center border rounded w-50" value="'.$demande['date_demande'].'" disabled="disabled">
                                    </td>
                              
                                    <td class="text-center">
                                        <button  class="btn btn-danger"><a href="index.php?page=delete&id_user='.$_SESSION['id_user'].'" class="text-decoration-none text-light" data-mdb-toggle="tooltip" title="Done"><i class="bi bi-x-octagon"></i></a></button>
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