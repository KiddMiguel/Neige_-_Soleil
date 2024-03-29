<div class="card rounded-3">
    <img src="Images/Logo-noir.png" class="h-50" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem; margin: auto;" alt="Sample photo" width="20%">
    <hr>
    <div class="card-body pe-4 ps-4 pt-0">

        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2 text-center">Formulaire de contact</h3>

        <form class="px-md-2" method="post" >
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input type="text" class="form-control form-control" required  value="<?= ((isset($_SESSION["email_locataire"]))) ? $_SESSION['nom_locataire'] : $_SESSION['nom_proprio'] ?>" placeholder="Nom" />
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input type="text" id="form3Example1n" class="form-control form-control" required  value="<?= ((isset($_SESSION["email_locataire"]))) ? $_SESSION["prenom_locataire"] : $_SESSION['prenom_proprio'] ?>" placeholder="Prenom" />
                    </div>
                </div>
                <div class="col-md-12 mb-4">
                    <div class="form-outline">
                        <input type="text" id="form3Example1n" class="form-control form-control" required   value="<?= ((isset($_SESSION["email_locataire"]))) ? $_SESSION["email_locataire"] : $_SESSION['email_proprio']  ?>" placeholder="Email" />
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input type="text" class="form-control form-control" required value="<?= ((isset($_SESSION["email_locataire"]))) ? $_SESSION["tel_locataire"] :  $_SESSION['tel_proprio'] ?>" placeholder="Numéro de téléphone" />
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-outline">
                        <input type="text" id="" class="form-control form-control" required  value="<?= ((isset($_SESSION["email_locataire"]))) ? $_SESSION["cp_locataire"] : $_SESSION['cp_proprio']  ?>"  placeholder="Code Postal" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-2">
                    <div class="form-outline">
                        <input type="number" class="form-control form-control" required name="nb_personnes" placeholder="Nb personne" />
                    </div>
                </div>
                <div class="col-md-6 mb-2" style="display: none;">
                    <div class="form-outline">
                        <input type="text" id="form3Example1n" class="form-control form-control" name="prix_reservation" value="<?php echo  $appartement['prix_appart']  ?>" placeholder="Prix" />
                        <label class="form-label" for="form3Example1n"></label>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-outline">
                        <input type="date" id="dateStart_form"  readonly class="form-control form-control" name="date_debut_reservation"  />
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-outline">
                        <input type="date" readonly id="dateEnd_form"  class="form-control form-control" name="date_fin_reservation"  />
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
                    <textarea class="form-control" id="" rows="3" placeholder="Votre message" ></textarea>
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