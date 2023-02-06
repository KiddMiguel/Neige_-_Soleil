
<?php

if (isset($_POST["update_locataire"])){
    $unController->updateLocataire($_POST);
    session_destroy();
    unset($_SESSION["email_locataire"]);
    header("location: index.php?page=connexion_locataire");

}

if (isset($_POST["update_proprio"])){
    $unController->updateProprietaire($_POST);
    session_destroy();
    unset($_SESSION["email_proprio"]);
    header("location: index.php?page=connexion_proprietaire");

}