<section class="SectionProfil pt-5" style="height: 100vh;">
    <div class="container rounded mt-5 mb-5 border divProfil bg-white">
        <div class="row">
            <div class="col-md-3 border-right">
                <form action="" method="post" enctype="multipart/form-data">
                    <?php
                    if (isset($_SESSION["email_locataire"])) {
                        echo '
                      <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                      <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                      <span class="font-weight-bold">' . $locataire['nom_locataire'] . ' ' . $locataire['prenom_locataire'] . '
                      </span><span class="text-black-50">' . $_SESSION["email_locataire"] . '</span><span> </span>';
                    }
                    ?>
                    <!-- <div class="btn btn-warning btn-rounded">
                        <label class="form-label text-white m-1" for="customFile">Choisir une photo</label>
                        <input type="file" class="form-control d-none" id="customFile" />
                    </div> -->
            </div>

        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Paramètre de profil</h4>
                </div>

                <div class="row mt-2">
                    <div class="col-md-12 pt-3"> <select class="select border p-1" name="civilite_locataire">
                            <optgroup label="Civilité">
                                <option value=""><?= ((isset($_SESSION["email_locataire"]))) ? $locataire['civilite_locataire'] : "" ?></option>
                                <option name="civilite_locataire" value="Mme">Mme</option>
                                <option name="civilite_locataire" value="Mr">Mr</option>
                                <option name="civilite_locataire" value="Autre">Autre</option>
                            </optgroup>
                        </select></div>
                    <div class="col-md-6 pt-3"><input type="text" class="form-control" name="nom_locataire" placeholder="Votre nom" value="<?= ((isset($_SESSION["email_locataire"]))) ? $locataire['nom_locataire'] : "" ?>"></div>
                    <div class="col-md-6 pt-3"><input type="text" class="form-control" name="prenom_locataire" placeholder="Votre prenom" value="<?= ((isset($_SESSION["email_locataire"]))) ? $locataire['prenom_locataire'] : "" ?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12 pt-3"><input type="text" class="form-control" name="tel_locataire" placeholder="Votre numéro de téléphone" value="<?= ((isset($_SESSION["email_locataire"]))) ? $locataire['tel_locataire'] : "" ?>"></div>
                    <div class="col-md-12 pt-3"><input type="text" class="form-control" name="adresse_locataire" placeholder="Votre adresse" value="<?= ((isset($_SESSION["email_locataire"]))) ? $locataire['adresse_locataire'] : "" ?>"></div>
                    <div class="col-md-6 pt-3"><input type="text" class="form-control" placeholder="Votre code postal" name="cp_locataire" value="<?= ((isset($_SESSION["email_locataire"]))) ? $locataire['cp_locataire'] : " " ?>"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-warning profile-button" type="submit" name="update_locataire" data-bs-toggle="modal" data-bs-target="#exampleModal">Sauvegarder</button>
                    <p class="py-2" style="font-size: xx-small;"><span></span> <i>Merci de vous déconnecter puis vous réconnecter lors la modification de vos informations</i></p>
                </div>
                     <p class="text-success text-center" >
                    <?php
                        if (isset($_POST["update_locataire"])) {
                            echo $success.'<br> <img src="Images/checkmark.gif" alt="Gif validé" loop="false" class="" width="10%" height="50%"/>';                            
                        }
                        ?>
                    </p>

            </div>
        </div>
        </form>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span class="fw-semibold">Paramètre Confidentialité</span><a class="border px-3 p-1 add-experience text-decoration-none text-black rounded" data-bs-toggle="modal" data-bs-target="#modalGerer" href="#">Gérer</a></div><br>
                <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control " disabled="disabled" placeholder="Email" value="<?= ((isset($_SESSION["email_locataire"]))) ? $locataire['email_locataire'] : "" ?>"></div> <br>
                <div class="col-md-12"><label class="labels">Mot de Passe</label><input type="password" class="form-control" disabled="disabled" placeholder="Mot de passe" value="..............."></div>
                <div>
                    <p class="text-danger py-2">
                        <?php
                        if (isset($_POST["modif_locataireMdp"])) {
                            if ($errorOldMpd != null) {
                                echo '' . $errorOldMpd . ' <i class="bi text-danger bi-exclamation-triangle"></i>';
                            } elseif ($error != null) {
                                echo '' . $error . ' <i class="bi text-danger bi-exclamation-triangle"></i>';
                            } elseif ($errorIdentique != null) {
                                echo '' . $errorIdentique . ' <i class="bi text-danger bi-exclamation-triangle"></i>';
                            }
                        }
                        ?>
                    </p>
                </div>
                <div class="modal fade" id="modalGerer" tabindex="-1" aria-labelledby="modalGerer" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="modalGerer">Confidentialité</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="" method="post">
                                <div class="modal-body">
                                    <div class="col-md-12"><label class="labels">Email</label><input type="email" class="form-control " name="email_locataire" required placeholder="Email" value="<?= ((isset($_SESSION["email_locataire"]))) ? $locataire['email_locataire'] : " " ?>"></div> <br>
                                    <div class="col-md-12 py-2">

                                        <input type="password" class="form-control" id="old_mdp" name="old_mdp" required placeholder="Ancien mot de passe" value="">
                                    </div>
                                    <div class="col-md-12 py-2">
                                        <label for="mdp" class="fst-italic">Au moins 8 caractères, une lettre majuscule, une lettre minuscule et un chiffre.</label>
                                        <input type="password" id="mdp" class="form-control" name="new_mdp" placeholder="Nouveau mot de passe" value="">
                                    </div>
                                    <div class="col-md-12 py-2"><input type="password" class="form-control" name="mdp_locataire" placeholder="Confirmer mot de passe" value=""></div>

                                </div>
                                <div class="modal-footer d-flex">
                                    <a href="https://www.motdepasse.xyz/" target="blank" class="me-auto text-decoration-none text-primary bg-white">Générateur de mot de passe</a>
                                    <button type="submit" class="btn btn-warning" name="modif_locataireMdp">Modifier</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
</section>