
<?php
if (isset($_POST["update_locataire"])){
    $unController->updateLocataire($_POST);
    // session_destroy();
    // unset($_SESSION["email_locataire"]);
    // header("location: index.php?page=connexion_locataire");

}

if (isset($_POST["update_proprio"])){
    $unController->updateProprietaire($_POST);
    // session_reset();
    // session_destroy();
    // // unset($_SESSION["email_proprio"]);
    // header("location: index.php?page=home");

}
if(isset($_POST["modif_prorioMdp"])){
    $unController->updateProprietaireEmailMdp($_POST);
echo '  <div class="position-absolute top-50 start-50 translate-middle w-100" style="height:100vh; background: #6C6969; opacity: 0.8;">
        <div class="text-white position-absolute top-50 start-50 translate-middle border-1">
        <div class="card text-center bg-warning" >
  <div class="card-header text-black" >
    Averissement
  </div>
  <div class="card-body">
    <h5 class="card-title text-black">Information modifié</h5>
    <p class="card-text text-bg-dark">Merci de vous déconnecter puis vous réconnecter afin que les modifications puissent être visibles.</p>
    <a href="index.php?page=deconnexion" class="btn btn-primary">Se déconneter</a>
  </div>
  <div class="card-footer">
  <a href="index.php?page=home" class="text-decoration-none text-bg-warning">Plus tard</a>
  </div>
</div>
        </div>
</div>';
}