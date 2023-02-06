<section class="SectionProfil pt-5" style="height: 100vh;">
    <div class="container rounded mt-5 mb-5 border divProfil bg-white">
        <div class="row">
            <div class="col-md-3 border-right">
                <?php
                   if(isset($_SESSION["email_proprio"])){
                    echo '
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">' . $_SESSION["nom_proprio"] . ' ' . $_SESSION['prenom_proprio'] . '</span><span class="text-black-50">' . $_SESSION["email_proprio"] . '</span><span> </span></div>
                    ';}
                ?>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Paramètre de profil</h4>
                    </div>
                    <form action="" method="post">
                        <div class="row mt-2">
                            <div class="col-md-12 pt-3"> <select class="select border p-1" name="civilite_proprio">
                                        <option value="Mme">Mme</option>
                                        <option value="Mr">Mr</option>
                                        <option value="Autre">Autre</option>
                                    </select></div>
                            <?php
                                if(isset($_SESSION["email_proprio"])){
                                    echo '<div class="col-md-12 pt-3"><select class="select border p-1" >
                                    <option value="statut_proprio">'.$_SESSION["statut_proprio"].'</option>
                                    <option value="Loueur particulier">Loueur particulier</option>
                                    <option value="Agence immobilière">Agence immobilière</option>
                                    <option value="Société">Société</option>
                                    <option value="Association / Regroupement de propriétaires">Association / Regroupement de propriétaires</option>
                                    <option value="Office de tourisme">Office de tourisme</option>
                                    <option value="Entreprise individuelle / LMP">Entreprise individuelle / LMP</option>
                                    <option value="Autres">Autres</option>
                                </select></div>';
                                }
                            ?>
                            <div class="col-md-6 pt-3"><input type="text" class="form-control" name="nom_proprio" placeholder="Votre nom" value="<?= ((isset($_SESSION["email_proprio"]))) ? $_SESSION['nom_proprio'] : ""  ?>"></div>
                            <div class="col-md-6 pt-3"><input type="text" class="form-control" name="prenom_proprio" placeholder="Votre prenom" value="<?= ((isset($_SESSION["email_proprio"]))) ? $_SESSION['prenom_proprio'] : "" ?>"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12 pt-3"><input type="text" class="form-control" name="tel_proprio" placeholder="Votre numéro de téléphone" value="<?= ((isset($_SESSION["email_proprio"]))) ? $_SESSION['tel_proprio'] : " "?>"></div>
                            <div class="col-md-12 pt-3"><input type="text" class="form-control" name="adresse_proprio" placeholder="Votre adresse" value="<?= ((isset($_SESSION["email_proprio"]))) ? $_SESSION['adresse_proprio'] : "" ?>"></div>
                       
                            <div class="col-md-6 pt-3"><input type="text" class="form-control" name="cp_proprio" placeholder="Votre code postal" value="<?= ((isset($_SESSION["email_proprio"]))) ? $_SESSION['cp_proprio'] : " " ?>"></div>
                            <?php
                                if(isset($_SESSION["email_proprio"])){
                                    echo  '<div class="col-md-6 pt-3 "> <select class="select border pe-5 pt-1 pb-2" name="pays_proprio">
                                    <option value="Afghanistan">'.$_SESSION["pays_proprio"].'</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo, RDC">Congo, RDC</option>
                                    <option value="France">France</option>
                                </select></div> ';
                                    echo  '<div class="col-md-6 pt-3"><input type="text" name="ville_proprio" class="form-control" placeholder="Ville" value="'.$_SESSION["ville_proprio"].'"></div> ';
                                    echo  '<div class="col-md-6 pt-3"><input type="text" name="code_adherent" class="form-control" placeholder="Votre Adhérent" value="'.$_SESSION["code_adherent"].'"></div> ';
                                }
                            ?>
                       </div>
                        <div class="mt-5 text-center"><button class="btn btn-warning profile-button" type="submit" name="update_proprio" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Sauvegarder</button></div>


                        <!-- <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5 text-center" id="exampleModalToggleLabel">Modification du profil</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Les modification ont été effctuées avec success ! <i class="fa-solid fa-circle-check fs-3 text-success"></i>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span class="fw-semibold">Paramètre Confidentialité</span><a class="border px-3 p-1 add-experience text-decoration-none text-black rounded" href="#">Gérer</a></div><br>
                    <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control " disabled="disabled" placeholder="Email" value="<?= ((isset($_SESSION["email_proprio"]))) ? $_SESSION['email_proprio'] : " " ?>"></div> <br>
                    <div class="col-md-12"><label class="labels">Mot de Passe</label><input type="password" class="form-control" disabled="disabled" placeholder="Mot de passe" value="<?= ((isset($_SESSION["email_proprio"]))) ? $_SESSION['mdp_proprio'] : "" ?>"></div>
                </div>
            </div>

        </div>
    </div>
</section>