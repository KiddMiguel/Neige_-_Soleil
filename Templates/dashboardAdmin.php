<?php require_once("setting/setting_dashbord.php"); ?>
<section class="sectionFive py-5" style="background-color:#DEE2E6;">
    <div class="container-fluid">
        <div>
            <h1 class="fs-3 ms-2 fw-bolder">Mon dashbord</h1>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 row ">

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 p-3 text-white">
                        <div class="rounded m-1 pb-3" style="background-color:#2469CE;height: 17rem;">
                            <p class="fs-2 fw-bold pt-3 ps-4 m-0 pb-1"><?php echo $contrats?> <span class="fs-5 fw-lighter">Contrat(s)</span></p>
                            <p class="ps-4 fw-semibold">Dernier contrat active (<?php echo $mois ?>)</p>
                            <div class="d-flex">
                                <div class="mt-5 pt-5 me-auto ps-4">
                                    <p><?php echo $factures_wait ?> Facture(s) en attente</p>
                                </div>
                                <!--<p class="mt-5 pt-5 pe-4">72%</p>-->
                            </div>
                            <div class="progress ms-4" style="height: 6px; width: 75%;" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-success" style="width: 100%;"></div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 p-3 text-black">
                        <div class="rounded bg-light m-1 pb-3" style="height: 17rem;">
                            <p class="fs-2 fw-bold pt-3 ps-4 m-0"><?php echo $revenu ?>  € <span class="badge text-bg-success fw-semibold fs-6 ms-5"><i class="bi bi-arrow-up-short"></i>0.0%</span></p>
                            <p class="ps-4 ">Revenue du mois</p>
                            <div class="d-flex">
                                <div class="mt-3 pt-4 me-auto ps-4">
                                    <p><i class="bi bi-align-start text-success"></i> Locataires</p>
                                    <p><i class="bi bi-align-start text-warning"></i> Appartements</p>
                                </div>
                                <div class="mt-3 pt-4 pe-4">
                                    <p><i class="bi bi-arrow-up-short text-success"></i></p>
                                    <p><i class="bi bi-arrow-up-short text-success"></i></p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 p-3">
                        <div class="rounded bg-light m-1" style="height: 17rem;">
                            <p class="fs-5 fw-bold pt-3 ps-4 m-0 pb-5">Highlights</p>

                            <div class="d-flex">
                                <div class="mt-3 pt-4 me-auto ps-4">
                                    <p><i class="bi bi-align-start text-success"></i> Locataire(s)</p>
                                    <p><i class="bi bi-align-start text-warning"></i> Appartement(s)</p>
                                    <p style="font-size: 10px;"><i class="bi bi-align-start text-danger " ></i> Le nombre de vos locatires et d'appartements</p>
                                </div>
                                <div class="mt-3 pt-4 pe-4">
                                    <p><i class="bi bi-arrow-up-short text-success"></i> <?php echo $nbLocataire ?></p>
                                    <p><i class="bi bi-arrow-up-short text-success"></i> <?php echo $nbAppart?></p>
                                    
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 p-3 text-light">
                        <div class="rounded m-1" style="background-color:#2469CE;height: 17rem;">
                            <p class="fs-2 fw-bold pt-3 ps-4 m-0"><span class="fs-5 fw-lighter">Total </span><?php echo $revenus ?> €</p>
                            <p class="ps-4">La somme total de votre revenu</p>
                            <div class="d-flex">
                                <p class="mt-5 pt-5 me-auto ps-4">Plafond</p>
                                <p class="mt-5 pt-5 pe-4">100%</p>
                            </div>
                            <div class="progress ms-4" style="height: 6px; width: 85%;" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-warning" style="width: 100%;"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 p-3">
                    <div class="rounded m-1 text-black bg-white" style="height: 36.5rem;">
                        <div class="container ps-4 pe-4">
                            <div class="d-flex">
                                <div class="me-auto">
                                    <h4 class="m-0 pt-3">Réalisation d'auteur</h4>
                                    <p>Avg. 69.34% Conv. Rate</p>
                                </div>
                                <div class=" me-2 pt-3">
                                <button type="button" class="btn btn-success mb-0 ms-auto"> <a href="index.php?page=formulaire_appartement" class="text-decoration-none text-light"><i class="bi bi-plus-circle"></i> </a></button>
                                </div>
                          
                            </div>

                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item  me-4 " role="presentation ">
                                    <button class=" bg-white rounded p-2 active border fw-semibold" id="pills-locataires-tab" data-bs-toggle="pill" data-bs-target="#pills-locataires" type="button" role="tab" aria-controls="pills-locataires" aria-selected="true"> <i class="bi bi-people fs-4 text-muted "></i><br>Locataires</button>
                                </li>
                                <li class="nav-item me-4" role="presentation">
                                    <button class="bg-white rounded p-2 border fw-semibold" id="pills-appartement-tab" data-bs-toggle="pill" data-bs-target="#pills-appartement" type="button" role="tab" aria-controls="pills-appartement" aria-selected="false"><i class="bi bi-houses fs-4 text-muted"></i><br>Appartements</button>
                                </li>
                                <li class="nav-item me-4" role="presentation">
                                    <button class="bg-white rounded p-2 border fw-semibold" id="pills-demandes-tab" data-bs-toggle="pill" data-bs-target="#pills-demandes" type="button" role="tab" aria-controls="pills-demandes" aria-selected="false"><i class="bi bi-list-task fs-4 text-muted"></i><br>Demandes</button>
                                </li>
                                <li class="nav-item me-4" role="presentation">
                                    <button class="bg-white rounded p-2 border fw-semibold" id="pills-contrats-tab" data-bs-toggle="pill" data-bs-target="#pills-contrats" type="button" role="tab" aria-controls="pills-contrats" aria-selected="false"><i class="bi bi-file-earmark-text fs-4 text-muted"></i><br>Contrats</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active " style="border: none !important" id="pills-locataires" role="tabpanel" aria-labelledby="pills-locataires-tab" tabindex="0">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="color: #646477 !important;">USER</th>
                                                <th scope="col" style="color: #646477 !important;">CONTRAT</th>
                                                <th scope="col" style="color: #646477 !important;">APPARTEMENT</th>
                                                <th scope="col" style="color: #646477 !important;">PRIX</th>
                                                <th scope="col" style="color: #646477 !important;">DATE FIN</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                <th scope="row ">
                                                    <div class="d-flex"><i class="bi bi-person-circle fs-1 "></i>
                                                        <p class="mt-3 ps-2">Miguel</p>
                                                    </div>
                                                </th>
                                            
                                                <td class="m-auto pt-4 text-muted fw-semibold"><span class="bg-warning p-2 rounded text-light">En cours</span></td>
                                                <td class="m-auto pt-4 text-muted fw-semibold pe-0" style="text-align: justify;">Bel appartement en centre-ville...</td>
                                                <td class="m-auto pt-4 text-muted fw-semibold">1 500€</td>
                                                <td class="m-auto pt-4 text-muted fw-semibold">2023-06-04</td>
                                            </tr>
                                   
                                    
                                            <tr>
                                                <th scope="row ">
                                                    <div class="d-flex"><i class="bi bi-person-circle fs-1 "></i>
                                                        <p class="mt-3 ps-2">John Fil</p>
                                                    </div>
                                                </th>
                                                <td class="m-auto pt-4 text-muted fw-semibold"><span class="bg-danger p-2 rounded text-light">Terminer</span></td>
                                                <td class="m-auto pt-4 text-muted fw-semibold pe-0" style="text-align: justify;">Studio au calme dans quartier ...</td>
                                                <td class="m-auto pt-4 text-muted fw-semibold">1 900€</td>
                                                <td class="m-auto pt-4 text-muted fw-semibold">2023-06-10</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" style="border: none !important" id="pills-appartement" role="tabpanel" aria-labelledby="pills-appartement-tab" tabindex="0">
                                <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="color: #646477 !important;">INTITULE</th>
                                                <th scope="col" style="color: #646477 !important;">STATUT</th>
                                                <th scope="col" style="color: #646477 !important;">PRIX</th>
                                                <th scope="col" style="color: #646477 !important;">VILLE</th>
                                                <th scope="col" style="color: #646477 !important;">CP</th>
                                                <th scope="col" style="color: #646477 !important;">TYPE</th>
                                                <th scope="col" style="color: #646477 !important;">PIECES</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        foreach ($appartementProprio as $appartement){
                                            $nb_piece = $appartement['nb_salon'] + $appartement['nb_cuisine'] + $appartement['nb_chambre'] + $appartement['nb_salle_bain'];
                                            $intitule = $appartement['intitule_appart'];
                                            if(strlen($appartement['intitule_appart']) > 10){
                                              $intitule = substr($intitule, 0, 10)."...";
                                            }
                                            echo '
                                            <tr>
                                                <th scope="row ">
                                                    <a href="index.php?page=appartement&id_appart='.$appartement["id_appart"].'" class="d-flex text-decoration-none text-dark">
                                                        <img src="Images/'.$appartement['image'].'" alt="" class="rounded" sizes="150" srcset="" width="70">
                                                        <p class="mt-3 ps-2"  style="text-align: justify;">'.$intitule.'</p>
                                                    </a>
                                                </th>';
                                                if($appartement['statut_appart'] == 'Vendu'){
                                                    echo'  <td class="m-auto pt-4 text-muted fw-semibold"><span class="bg-warning p-2 rounded text-light">'.$appartement['statut_appart'] .'</span></td>';
                                                }elseif($appartement['statut_appart'] == 'Disponible'){
                                                    echo'  <td class="m-auto pt-4 text-muted fw-semibold"><span class="bg-success p-2 rounded text-light">'.$appartement['statut_appart'] .'</span></td>';
                                                }elseif($appartement['statut_appart'] == ''){
                                                    echo'  <td class="m-auto pt-4 text-muted fw-semibold"><span class="p-2 rounded text-light">'.$appartement['statut_appart'] .'</span></td>';
                                                }
                                                echo '
                                                <td class="m-auto pt-4 text-muted fw-semibold pe-0">1 500€</td>
                                                <td class="m-auto pt-4 text-muted fw-semibold">' . $appartement['ville_appart'] . '</td>
                                                <td class="m-auto pt-4 text-muted fw-semibold">' . $appartement['cp_appart'] . '</td>
                                                <td class="m-auto pt-4 text-muted fw-semibold">' . $appartement['type_appart'] . '</td>
                                                <td class="m-auto pt-4 text-muted fw-semibold">' . $nb_piece . '</td>
                                            </tr>';
                                        }
                                        ?>
                                     
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" style="border: none !important" id="pills-demandes" role="tabpanel" aria-labelledby="pills-demandes-tab" tabindex="0">
                                <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="color: #646477 !important;">INTITULE</th>
                                                <th scope="col" style="color: #646477 !important;">STATUT</th>
                                                <th scope="col" style="color: #646477 !important;">DATE</th>
                                                <th scope="col" style="color: #646477 !important;">ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                  foreach ($demandes as $demande){
                                                    echo '
                                                <tr>
                                                <th scope="m-auto"><p class="pt-2">Demande</p></th>';
                                                    
                                                if($demande['statut_demande'] != "Valider"){
                                              echo' <td class="m-auto pt-4 text-muted fw-semibold"><span class="bg-warning p-2 rounded text-light">'.$demande['statut_demande'].'</span></td>';
                                            }else{
                                               echo' <td class="m-auto pt-4 text-muted fw-semibold"><span class="bg-success p-2 rounded text-light">'.$demande['statut_demande'].'</span></td>';
                                            }
                                             echo'  <td class="m-auto pt-4 text-muted fw-semibold pe-0" style="text-align: justify;">'.$demande['date_demande'].'</td>
                                                <td class="m-auto pt-4 text-muted fw-semibold"><button class="btn btn-danger"><i class="bi bi-trash3 fs-6" style="color:#DEE2E6 !important;"></i></button></td>
                                            </tr>';
                                                  }
                                            ?>
                                   
                                    

                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" style="border: none !important" id="pills-contrats" role="tabpanel" aria-labelledby="pills-contrats-tab" tabindex="0">
                                <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="color: #646477 !important;">DAET DEBUT</th>
                                                <th scope="col" style="color: #646477 !important;">STATUT</th>
                                                <th scope="col" style="color: #646477 !important;">DATE FIN</th>
                                                <th scope="col" style="color: #646477 !important;">DATE SIGN</th>
                                                <th scope="col" style="color: #646477 !important;">APPARTEMENT</th>
                                                <th scope="col" style="color: #646477 !important;">ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                <td class="m-auto pt-4 text-muted fw-semibold">2023-06-04</td>
                                                <td class="m-auto pt-4 text-muted fw-semibold"><span class="bg-warning p-2 rounded text-light">En cours</span></td>
                                                <td class="m-auto pt-4 text-muted fw-semibold">2023-06-04</td>
                                                <td class="m-auto pt-4 text-muted fw-semibold">2023-06-04</td>
                                                <td class="m-auto text-muted fw-semibold pe-0" style="text-align: justify;"><a  class="d-flex text-decoration-none text-dark">
                                                        <img src="Images/A-1.jpg" alt="" class="rounded" sizes="150" srcset="" width="70">
                                                    </a></td>
                                                <td class="m-auto text-muted fw-semibold"> <a href="contrat/contrat_locataire.php"> <button class="btn btn-primary"><i class="bi bi-clipboard2-fill fs-6" style="color:#DEE2E6 !important;"></i></button> </a> </td>
                                            </tr>
                                   
                                    
                                          

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>