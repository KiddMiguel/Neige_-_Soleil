<section class="container-fluid p-5" style="background-color: rgba(2, 60, 135, 0.363);">
    <div class="container">
        <div class="card rounded-3  m-5 bg-light w-70 shadow-lg ">
            <img src="Images/Logo-noir.png" class="h-50" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem; margin: auto;" alt="Sample photo" width="20%">
            <p class="text-center fst-italic pe-4 ps-4" style="font-size: 0.8rem;">Remplissez votre formualire pour nous faire une demande location de votre appartement Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam hic odio consequatur unde ducimus. Molestiae corrupti alias id sit voluptatem quidem ex aperiam inventore! Praesentium harum eos iusto itaque nulla.</p>
            <hr>
            <div class="card-body pe-4 ps-4 pt-0">

                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2 text-center">Formulaire de contact</h3>

                <form class="px-md-2" method="post">
                    <div class="row border rounded pe-5 ps-5 pb-4 m-5">
                        <h6 class="col-md-12 text-center pb-3 pt-3">Informations personnelles</h6>
                        <div class="col-md-4 mb-4">
                            <div class="form-outline">
                                <input type="text" class="form-control form-control" value="<?= $_SESSION["nom_proprio"] ?>" placeholder="Nom" />
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="form-outline">
                                <input type="text" id="form3Example1n" class="form-control form-control" value="<?= $_SESSION["prenom_proprio"] ?>" placeholder="Prenom" />
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="form-outline">
                                <input type="text" id="form3Example1n" class="form-control form-control" value="<?= $_SESSION["email_proprio"] ?>" placeholder="Email" />
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="form-outline">
                                <input type="text" class="form-control form-control" value="<?= $_SESSION["tel_proprio"] ?>" placeholder="Numéro de téléphone" />
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="form-outline">
                                <input type="text" id="form3Example1n" class="form-control form-control" value="<?= $_SESSION["code_adherent"] ?>" placeholder="Code adhérent" />
                            </div>
                        </div>
                    </div>

                    <div class="row border rounded pe-5 ps-5 pb-4 m-5">
                        <h6 class="col-md-12 text-center pb-3 pt-3">Informations appartement</h6>
                        <div class="col-md-2 mb-2">
                            <div class="form-outline">
                                <input type="number" class="form-control form-control" name="capacite_appart" placeholder="Nb pièce(s)" />
                            </div>
                        </div>
                        <div class="col-md-2 mb-2">
                            <div class="form-outline">
                                <input type="number" id="form3Example1n" class="form-control form-control" name="nb_chambres" value="" placeholder="Nb chambre(s)" />
                            </div>
                        </div>
                        <div class="col-md-2 mb-2">
                            <div class="form-outline">
                                <input type="number" id="form3Example1n" class="form-control form-control" name="nb_lits" value="" placeholder="Nb lit(s)" />
                            </div>
                        </div>
                        <div class="col-md-2 mb-2">
                            <div class="form-outline">
                                <input type="number" id="form3Example1n" class="form-control form-control" name="nb_salles_bain" value="" placeholder="Nb salle de bain(s)" />
                            </div>
                        </div>
                        <div class="col-md-2 mb-2">
                            <div class="form-outline">
                                <input type="number" id="form3Example1n" class="form-control form-control" name="superficie_appart" value="" placeholder="Superficie (m²)" />
                            </div>
                        </div>
                        <div class="col-md-2 mb-2">
                            <div class="form-outline">
                                <input type="text" id="form3Example1n" class="form-control form-control" name="type_appart" value="" placeholder="Type (T3, T3, ..)" />
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="form-outline">
                                <input type="text" id="form3Example1n" class="form-control form-control" name="atout_appart1" value="" placeholder="Atout 1" />
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="form-outline">
                                <input type="text" id="form3Example1n" class="form-control form-control" name="atout_appart2" value="" placeholder="Atout 2" />
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="form-outline">
                                <input type="text" id="form3Example1n" class="form-control form-control" name="atout_appart3" value="" placeholder="Atout 3" />
                            </div>
                        </div>
                        <!-- Champ placement -->
                        <div class="col-md-4 mb-2">
                            <div class="form-outline">
                                <input type="text" class="form-control form-control" name="ville_appart" placeholder="Ville appart" />
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="form-outline">
                                <input type="text" id="form3Example1n" class="form-control form-control" name="adresse_appart" placeholder="Adresse appart" />
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="form-outline">
                                <input type="text" id="form3Example1n" class="form-control form-control" name="cp_appart" placeholder="Code postal" />
                            </div>
                        </div>
                        <!-- Champ masqués -->
                        <div class="col-md-6 " style="display: none;">
                            <div class="form-outline">
                                <input type="text" class="form-control form-control" value="<?= $_SESSION["id_user"] ?>" name="id_user" />
                            </div>
                        </div>
                  
                    </div>

                    <div class="row border rounded pe-5 ps-5 pb-4 m-5">
                        <h6 class="col-md-12 text-center pb-3 pt-3">Informations appartement</h6>

                        <div class="col-md-6 ">
                            <div class="form-outline">
                                <input type="text" class="form-control form-control" value="" name="intitule_appart" placeholder="Intitule de l'appart" />
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-outline">
                                <input type="text" class="form-control form-control" value="" name="prix_appart" placeholder="Prix appartement" />
                            </div>
                        </div>
                        <div class="col-md-12 p-3">
                            <div class="form-outline">
                                <textarea name="description_appart" id="" cols="10" rows="7" class="form-control" placeholder="Description de votre appartement"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-2">
                        <h6 class="col-md-12 text-start pb-3 pt-3">Votre message personnel</h6>
                        <div class="form-outline mb-4">
                            <textarea class="form-control" id="" rows="3" placeholder="Votre message"></textarea>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-md-6">
                            <div class="form-outline">
                                <button type="submit" name="valider_appartement" class="btn btn-warning btn-lg mb-1">Envoyer</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>