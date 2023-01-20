<div class="card rounded-3">
    <img src="Images/Logo-noir.png" class="h-50" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem; margin: auto;" alt="Sample photo" width="20%">
    <hr>
    <div class="card-body pe-4 ps-4 pt-0">

        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2 text-center">Formulaire de contact</h3>

        <form class="px-md-2" method="post">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input type="text" class="form-control form-control"   value="<?= $_SESSION["nom_locataire"] ?>" placeholder="Nom" />
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input type="text" id="form3Example1n" class="form-control form-control"  value="<?= $_SESSION["prenom_locataire"] ?>" placeholder="Prenom" />
                    </div>
                </div>
                <div class="col-md-12 mb-4">
                    <div class="form-outline">
                        <input type="text" id="form3Example1n" class="form-control form-control" value="<?= $_SESSION["email_locataire"] ?>" placeholder="Email" />
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input type="text" class="form-control form-control" value="<?= $_SESSION["tel_locataire"] ?>" placeholder="Numéro de téléphone" />
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-outline">
                        <input type="text" id="form3Example1n" class="form-control form-control"  value="<?= $_SESSION["nom_locataire"] ?>"  placeholder="Ville" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-2">
                    <div class="form-outline">
                        <input type="number" class="form-control form-control" name="nb_personnes" placeholder="Nb personne" />
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-outline">
                        <input type="text" id="form3Example1n" class="form-control form-control" name="prix_reservation" value="<?php echo  $appartement['prix_appart']  ?>" placeholder="Prix" />
                        <label class="form-label" for="form3Example1n"></label>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-outline">
                        <input type="date" class="form-control form-control" name="date_debut_reservation" placeholder="Date de début" />
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-outline">
                        <input type="date" id="form3Example1n" class="form-control form-control" name="date_fin_reservation" placeholder="Date de fin" />
                        <label class="form-label" for="form3Example1n"></label>
                    </div>
                </div>
                <!-- Champ masqués -->
                <div class="col-md-6 " style="display: none;" >
                    <div class="form-outline">
                        <input type="text" class="form-control form-control"  value="<?= $_SESSION["id_user"] ?>" name="id_user"  />
                    </div>
                </div>
                <div class="col-md-6"  style="display: none;">
                    <div class="form-outline" >
                        <input type="text" id="form3Example1n" class="form-control form-control"  name="id_appart"   value="<?php echo  $appartement['id_appart']; ?>"  />
                        <label class="form-label" for="form3Example1n"></label>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mb-2">
                <div class="form-outline mb-4">
                    <textarea class="form-control" id="" rows="3" placeholder="Votre message"></textarea>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-6">
                    <div class="form-outline">
                        <button type="submit" name="valider_formulaire" class="btn btn-warning btn-lg mb-1">Envoyer</button>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>