
<?php

if (isset($_POST["update_locataire"])){
    $unController->updateLocataire($_POST);
    session_destroy();
    unset($_SESSION["email_proprio"]);
    header("location: index.php?page=home");

}