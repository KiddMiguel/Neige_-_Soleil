<section style="height: 100vh; padding-top: 5rem;" class="container">
    <h3 class="mb-5">DETAIL NEIGE & SOLEIL</h3>

    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active me-2 text-black" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Statut Connexion </button>
            <button class="nav-link text-black" id="nav-profile-tab text-black" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">All connexion</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
        <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Email</th>
                        <th scope="col">Dernière connexion</th>
                        <th scope="col">Dernière echec connexion</th>
                        <th scope="col">Nb d'echec</th>
                        <th scope="col">Nb total de connexion</th>
                    </tr>
                </thead>
                <tbody>
                <?php
            foreach ($lastUsers as $lastUser){
                if($lastUser['etat_connexion']=="Echec"){
                    $class = 'text-danger';
                }else{
                    $class = 'text-success';
                }
                echo '<tr class='.$class.'>
                        <th>'.$lastUser['nom_locataire'].'</th>
                        <th>'.$lastUser['prenom_locataire'].'</th>
                        <th>'.$lastUser['email_locataire'].'</th>
                        <td>'.$lastUser['last_connexion'].'</td>
                        <td>'.$lastUser['last_failConnexion'].'</td>
                        <td class="text-center">'.$lastUser['nb_failConnexion'].'</td>
                        <td class="text-center">'.$lastUser['nb_connexion'].'</td>
                    </tr>';
            }
            ?>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
        <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Email</th>
                        <th scope="col">Date de connexion</th>
                        <th scope="col">Etat</th>
                    </tr>
                </thead>
                <tbody>
                <?php
            foreach ($users as $user){
                if($user['etat']=="Echec"){
                    $class = 'text-danger';
                }else{
                    $class = 'text-success';
                }

                $etat_good = $user['etat'];
                echo '<tr class='.$class.'>
                        <th>'.$user['nom'].'</th>
                        <td>'.$user['prenom'].'</td>
                        <td>'.$user['email'].'</td>
                        <td>'.$user['date_connexion'].'</td>
                        <td>'.$user['etat'].'</td>
                    </tr>';
            }
            ?>
                </tbody>
            </table>
        </div>
    </div>

</section>