<section class=" sectionInscription" style="height: 100vh;">
    <div class="container py-5 w-50 h-100 ">
        <div class="row d-flex justify-content-center align-items-center h-100" method="post">
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
                        <h1 class="fs-3 mb-5">Connectez-vous à votre compte</h1>
                        <div class=" mb-4">
                            <form action="" method="post">
                                <input type="email" id="" name="email_locataire" class="form-control w-100" required placeholder="E-mail" /><br>
                                <input type="password" id="" name="mdp_locataire" class="form-control w-100 mb-3" required placeholder="Mot de passe" />
                                <div class="d-flex mb-2">
                                    <input type="checkbox" name="" id="" class="me-auto">
                                    <a href="#" class="text-text-decoration-none">Mot de passe oublié ?</a>
                                </div>
                                <button type="submit" class="btn btn-warning w-100" name="se_connecter">Se connecter</button>
                                <hr>
                                <button class="btn btn-outline-warning w-100 text-black" type="button" id="continue_1"><a class="text-decoration-none  text-black">S'inscrire</a></button>
                                <hr>
                                <p class="text-center " style="font-size :0.8rem;">En créant ou en vous connectant à un compte, vous acceptez nos <a href="" class="text-decoration-none">conditions générales</a> et notre charte de <a href="" class="text-decoration-none">confidentialité</a>.</p>
                            </form>
                        </div>
                    </div>

                    <div class="card-body pt-0  m-auto desactive_page" id="page_2" style="width: 60%;">
                        <h1 class="fs-3 mb-3">Créer un compte</h1>
                        <div class=" mb-4">
                            <form action="" method="post">
                                <select class="select form-select w-25 mb-2" name="civilite_locataire">
                                    <option value="Mme">Mr</option>
                                    <option value="Mr">Mme</option>
                                    <option value="Autre">Autre</option>
                                </select>
                                <input type="text" id="" name="prenom_locataire" class="form-control w-100 mb-2" required placeholder="Prénom" />

                                <input type="text" id="" name="nom_locataire" class="form-control w-100 mb-2" required placeholder="Nom" />

                                <input type="email" id="" name="email_locataire" class="form-control w-100" required placeholder="E-mail" /><br>

                                <input type="password" id="" name="mdp_locataire" class="form-control w-100 mb-2" required placeholder="Mot de passe" />
                                <input type="password" id="" name="" class="form-control w-100 mb-2" required placeholder="Confirmation du mot de passe" />
                                <p class="pb-2" style="font-size :0.8rem;">Il doit comporter au moins 10 caractères, dont 1 majuscule, 1 minuscule et 1 chiffre.</p>
                                <button class="btn btn-warning w-100" type="submit" name="valider">Créer un compte</button>
                                <hr>
                                <p class="text-center " style="font-size :0.8rem;">En créant ou en vous connectant à un compte, vous acceptez nos <a href="" class="text-decoration-none">conditions générales</a> et notre charte de <a href="" class="text-decoration-none">confidentialité</a>.</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>