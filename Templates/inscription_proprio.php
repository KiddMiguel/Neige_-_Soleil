<section class="sectionInscription" style="background-color: #FFF0CB; ">
    <div class="container w-50 py-5 h-100">
        <form class="row d-flex justify-content-center align-items-center h-100" method="post">
            <div class="col-lg-10 col-xl-10">
                <div class="card rounded-3">
                    <img src="Images/Logo-noir.png" class="h-50" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem; margin: auto;" alt="Sample photo" width="20%">
                    <hr>
                    <div class="position-relative desactive_page" id="back_and_go">
                        <div class="position-absolute top-0 start-0 ms-5">
                            <button type="button" class="border border-white" id="back"><i class="bi bi-arrow-left fs-4"></i></button>
                        </div>
                    </div>
                    <div class="card-body pt-0  m-auto" id="page_1" style="width: 60%;">
                        <h1 class="fs-3">Créez votre compte partenaire</h1>
                        <p class="" style="font-size :0.8rem;">Créez un compte pour répertorier et gérer votre propriété.</p>
                        <div class="form-outline mb-4">
                            <label for="" class="pb-1 fw-semibold">Adresse e-mail</label>
                            <input type="email" id="" name="email_proprio" class="form-control w-100" required placeholder="" /><br>
                            <button type="button" class="btn btn-warning w-100" id="continue_1">Continuer</button>
                            <hr>
                            <p class="text-center " style="font-size :0.8rem;">Vous avez des questions concernant votre établissement ou l'extranet ? Rendez-vous sur le <a href="#" class="text-decoration-none">Centre d'aide aux partenaires</a> pour en savoir plus.</p>
                            <button class="btn btn-outline-warning w-100 text-black"><a class="text-decoration-none  text-black" href="index.php?page=connexion_proprietaire">Se connecter</a></button>
                            <hr>
                            <p class="text-center " style="font-size :0.8rem;">En créant ou en vous connectant à un compte, vous acceptez nos <a href="" class="text-decoration-none">conditions générales</a> et notre charte de <a href="" class="text-decoration-none">confidentialité</a>.</p>
                        </div>
                    </div>

                    <div class="card-body pt-0  m-auto desactive_page" id="page_2" style="width: 60%;">
                        <h1 class="fs-3">Coordonnées</h1>
                        <p class="pb-2" style="font-size :0.8rem;">Veuillez fournir votre nom complet ainsi que votre numéro de téléphone pour garantir la sécurité de votre compte neige&Soliel.com.</p>
                        <div class="form-outline mb-4">
                            <select class="select form-select w-25 mb-2" name="civilite_proprio">
                                <option value="Mme">Mme</option>
                                <option value="Mr">Mr</option>
                                <option value="Autre">Autre</option>
                            </select>
                            <label for="" class=" fw-semibold">Prenom</label>
                            <input type="text" id="" name="prenom_proprio" class="form-control w-100 mb-2" required placeholder="" />

                            <label for="" class=" fw-semibold">Nom</label>
                            <input type="text" id="" name="nom_proprio" class="form-control w-100 mb-2" required placeholder="" />

                            <label for="" class="pb-1 fw-semibold">Numéro de téléphone</label>
                            <input type="number" id="" name="tel_proprio" class="form-control w-100 mb-2" required placeholder="" /><br>

                            <p class="text-center " style="font-size :0.8rem;">Nous enverrons un SMS comportant un code d'authentification à 2 facteurs à ce numéro lorsque vous vous connecterez.</p>
                            <button class="btn btn-warning w-100" type="button" id="continue_2">Continuer</button>
                            <hr>
                            <p class="text-center " style="font-size :0.8rem;">En créant ou en vous connectant à un compte, vous acceptez nos <a href="" class="text-decoration-none">conditions générales</a> et notre charte de <a href="" class="text-decoration-none">confidentialité</a>.</p>
                        </div>
                    </div>
                    <div class="card-body pt-0  m-auto desactive_page" id="page_3" style="width: 60%;">
                        <h1 class="fs-3">Créer un mot de passe</h1>
                        <p class="pb-2" style="font-size :0.8rem;">Il doit comporter au moins 10 caractères, dont 1 majuscule, 1 minuscule et 1 chiffre.</p>
                        <div class="form-outline mb-4">
                            <label for="" class=" fw-semibold">Mot de passe</label>
                            <input type="password" id="" name="mdp_proprio" class="form-control w-100 mb-2" required placeholder="" />

                            <label for="" class=" fw-semibold">Confirmez le mot de passe</label>
                            <input type="password" id="" name="" class="form-control w-100 mb-2" required placeholder="" />
                            <button class="btn btn-warning w-100" type="submit" name="valider_proprio">Créer un compte</button>
                            <hr>
                            <p class="text-center " style="font-size :0.8rem;">En créant ou en vous connectant à un compte, vous acceptez nos <a href="" class="text-decoration-none">conditions générales</a> et notre charte de <a href="" class="text-decoration-none">confidentialité</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>