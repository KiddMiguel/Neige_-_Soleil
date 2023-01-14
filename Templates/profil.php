<section class="SectionProfil pt-5">
    <div class="container rounded mt-5 mb-5 border divProfil bg-white">
        <div class="row">
            <div class="col-md-3 border-right">
                <?php
                echo' 
      <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">'.$_SESSION["nom_locataire"].'</span><span class="text-black-50">'.$_SESSION["email_locataire"].'</span><span> </span></div>
      ';
                ?>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Paramètre de profil</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Nom</label><input type="text" class="form-control" placeholder="Votre nom" value="<?=$_SESSION['nom_locataire']?>"></div>
                        <div class="col-md-6"><label class="labels">Prenom</label><input type="text" class="form-control" placeholder="Votre prenom" value="<?=$_SESSION['prenom_locataire']?>"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Numéro de téléphone</label><input type="text" class="form-control" placeholder="Votre numéro de téléphone" value="<?=$_SESSION['tel_locataire']?>"></div>
                        <div class="col-md-12"><label class="labels">Adresse</label><input type="text" class="form-control" placeholder="Votre adresse" value="<?=$_SESSION['adresse_locataire']?>"></div>
                        <div class="col-md-12"><label class="labels">Code Postal</label><input type="text" class="form-control" placeholder="Votre code postal" value="<?=$_SESSION['cp_locataire']?>"></div>
                   </div>
                    <div class="mt-5 text-center"><button class="btn btn-warning profile-button" type="button">Sauvegarder</button></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span class="fw-semibold">Paramètre Confidentialité</span><a class="border px-3 p-1 add-experience text-decoration-none text-black rounded" href="#">Gérer</a></div><br>
                    <div class="col-md-12"><label class="labels">Email</label><input type="text"  class="form-control " disabled="disabled" placeholder="Email" value="<?=$_SESSION['email_locataire']?>"></div> <br>
                    <div class="col-md-12"><label class="labels">Mot de Passe</label><input type="password" class="form-control" disabled="disabled" placeholder="Mot de passe" value="<?=$_SESSION['mdp_locataire']?>"></div>
                </div>
            </div>
        </div>
    </div>
</section>