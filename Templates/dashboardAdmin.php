<?php require_once("setting/setting_dashbord.php"); ?>
<section class="sectionFive py-5" style="background-color:#DEE2E6;">
    <div class="container-fluid">
        <div>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 row ">

                    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 p-3 text-white">
                        <div class="rounded m-1 pb-3" style="background-color:#2469CE;height: 17rem;">
                            
                        </div>

                    </div>
                    
        
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-3 text-light">
                        <div class="rounded m-1" style="background-color:#2469CE;height: 17rem;">
                            
                        </div>
                    </div>

                </div>
                <div class="col-lg-10 col-md-10 col-sm-6 col-xs-12 p-3">
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
                                <li class="nav-item me-4" role="presentation">
                                    <button class="bg-white rounded p-2 active border fw-semibold" id="pills-appartement-tab" data-bs-toggle="pill" data-bs-target="#pills-appartement" type="button" role="tab" aria-controls="pills-appartement" aria-selected="true"><i class="bi bi-houses fs-4 text-muted"></i><br>Appartements</button>
                                </li>
                                <li class="nav-item me-4" role="presentation">
                                    <button class="bg-white rounded p-2 border fw-semibold" id="pills-demandes-tab" data-bs-toggle="pill" data-bs-target="#pills-demandes" type="button" role="tab" aria-controls="pills-demandes" aria-selected="false"><i class="bi bi-list-task fs-4 text-muted"></i><br>Demandes</button>
                                </li>
                                <li class="nav-item me-4" role="presentation">
                                    <button class="bg-white rounded p-2 border fw-semibold" id="pills-contrats-tab" data-bs-toggle="pill" data-bs-target="#pills-contrats" type="button" role="tab" aria-controls="pills-contrats" aria-selected="false"><i class="bi bi-file-earmark-text fs-4 text-muted"></i><br>Contrats</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" style="border: none !important" id="pills-appartement" role="tabpanel" aria-labelledby="pills-appartement-tab" tabindex="0">
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
                                                <!-- <th scope="col" style="color: #646477 !important;">N APPART</th> -->
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
                                                if($appartement['statut_appart'] == 'En location'){
                                                    echo'  <td class="m-auto pt-4 text-muted fw-semibold"><span class="bg-success p-2 rounded text-light">'.$appartement['statut_appart'] .'</span></td>';
                                                }elseif($appartement['statut_appart'] == 'En attente'){
                                                    echo'  <td class="m-auto pt-4 text-muted fw-semibold"><span class="bg-warning p-2 rounded text-light">'.$appartement['statut_appart'] .'</span></td>';
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
                                             echo'  <td class="m-auto pt-4 text-muted fw-semibold pe-0" style="text-align: justify;">'.$demande['date_demande'].'</td>';
                                             if($demande['statut_demande'] != "Valider"){
                                                echo'<td class="m-auto pt-4 text-muted fw-semibold"><button class="btn btn-danger"><i class="bi bi-trash3 fs-6" style="color:#DEE2E6 !important;"></i></button></td>';
                                             }else{
                                                echo'<td class="m-auto pt-4 text-muted fw-semibold"><a href="contrat/contrat_proprietaire.php" target="blank"> <button class="btn btn-primary"><i class="bi bi-clipboard2-fill fs-6" style="color:#DEE2E6 !important;"></i></button> </a> </td>';
                                             }
                                            echo'</tr>';
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
                                                <th scope="col" style="color: #646477 !important;">ACTION</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        foreach($lesContrats as $contrats){
                                        echo'
                                        <tbody>
                                                <tr>
                                                <td class="m-auto pt-4 text-muted fw-semibold">'.$contrats['date_debut_contrat'].'</td>';
                                                if($contrats['statut_contrat'] == 'En cours'){
                                                    echo'<td class="m-auto pt-4 text-muted fw-semibold"><span class="bg-success p-2 rounded text-light">'.$contrats['statut_contrat'].'</span></td>';
                                                }else{
                                                    echo'<td class="m-auto pt-4 text-muted fw-semibold"><span class="bg-warning p-2 rounded text-light">'.$contrats['statut_contrat'].'</span></td>';
                                                }
                                                echo'
                                                <td class="m-auto pt-4 text-muted fw-semibold">'.$contrats['date_fin_contrat'].'</td>
                                                <td class="m-auto pt-4 text-muted fw-semibold">'.$contrats['date_sign_contrat'].'</td>';
                                                if($contrats['statut_contrat'] == 'En cours'){
                                                    echo'<td class="m-auto text-muted fw-semibold"> <a href="contrat/contrat_proprietaire.php?id_appart='.$contrats['id_appart'].'" target="blank"> <button class="btn btn-primary"><i class="bi bi-clipboard2-fill fs-6" style="color:#DEE2E6 !important;"></i></button> </a> </td>';
                                                }else{
                                                    echo'<td class="m-auto text-muted fw-semibold"> <a href="contrat/contrat_proprietaire.php?id_appart='.$contrats['id_appart'].'" target="blank"> <button class="btn btn-primary"><i class="bi bi-clipboard2-fill fs-6" style="color:#DEE2E6 !important;"></i></button> </a> ';
                                                    echo'<a href="" target="blank"> <button class="btn btn-success"><i class="bi bi-file-earmark-plus-fill fs-6" style="color:#DEE2E6 !important;"></i></button> </a> </td>';
                                                }
                                                echo'
                                            </tr>
                                        </tbody>';}
                                        ?>
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