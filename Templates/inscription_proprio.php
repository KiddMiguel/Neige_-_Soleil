<section class="h-100 h-custom"  style="background-color: #FFF0CB;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-10 col-xl-10"  >
                <div class="card rounded-3">
                    <img src="Images/Logo-noir.png"
            class="h-50" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem; margin: auto;"
            alt="Sample photo" width="20%">
            <hr>
                    <div class="card-body pe-4 ps-4 pt-0">
                
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>

                        <form class="px-md-2" method="post" id="form">
                            <div class="row">
                                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                                    <select class="select form-select" name="statut_proprio" required>
                                        <option value="" disabled>Vous êtes :</option>
                                        <option value="Loueur particulier">Loueur particulier</option>
                                        <option value="Agence immobilière">Agence immobilière</option>
                                        <option value="Société">Société</option>
                                        <option value="Association / Regroupement de propriétaires">Association / Regroupement de propriétaires</option>
                                        <option value="Office de tourisme">Office de tourisme</option>
                                        <option value="Entreprise individuelle / LMP">Entreprise individuelle / LMP</option>
                                        <option value="Autres">Autres</option>
                                    </select>
                                    <h6 class="mb-0 me-4 ms-5">Civilité: </h6>
                                    <select class="select form-select w-25" name="civilite_proprio" required>
                                        <option value="Mme">Mme</option>
                                        <option value="Mr">Mr</option>
                                        <option value="Autre">Autre</option>
                                    </select>

                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" class="form-control form-control" name="nom_proprio" placeholder="Nom" required/>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" id="form3Example1n" class="form-control form-control" name="prenom_proprio" placeholder="Prenom" required/>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <div class="form-outline">
                                        <input type="text" id="form3Example1n" class="form-control form-control" name="adresse_proprio" placeholder="Adresse" required/>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" class="form-control form-control" name="cp_proprio" placeholder="Code postal" required/>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-outline">
                                        <input type="text" id="form3Example1n" class="form-control form-control" name="ville_proprio" placeholder="Ville" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                                        <h6 class="mb-0 me-4">Pays : </h6>
                                        <select class="select form-select w-25" name="pays_proprio">
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
                                            <option value="France">France</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-outline">
                                        <input type="email" class="form-control form-control" name="email_proprio" placeholder="Email" required/>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-outline">
                                        <input type="text" id="form3Example1n" class="form-control form-control" name="tel_proprio" placeholder="Numéro de téléphone" required/>
                                        <label class="form-label" for="form3Example1n"></label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-outline">
                                        <input type="text" id="form3Example1n" class="form-control form-control" name="code_adherent" placeholder="Code adhérent de votre parrain" />
                                        <label class="form-label" for="form3Example1n"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 mb-2">
                                <div class="form-outline mb-4">
                                    <input type="password" id="password" class="form-control form-control" name="" placeholder="Mot de passe" required/>
                                </div>
                                <div class="form-outline">
                                    <input type="password" id="confirmPassword" class="form-control form-control" name="mdp_proprio" placeholder="Confirmer votre mot de passe" required/>
                              
                                </div>
                            </div>
                            <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                                <div class="col-md-6">
                                    <div class="form-outline mt-5">
                                        <button type="submit" name="valider_proprio" class="btn btn-warning btn-lg mb-1" id="buttonEnvoi">Envoyer</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>