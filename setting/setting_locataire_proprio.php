<?php

$locataire = null;
if (isset($_GET['id_user'])) {
    if ($_GET['id_user'] == $_SESSION['id_user']) {
        $id_user = $_GET['id_user'];
        $locataire = $unController->selectWhereLocataire($id_user);
    } else {
        header("location: index.php?page=home");
    }
}

$proprietaire = null;
if (isset($_GET['id_user'])) {

    if ($_GET['id_user'] == $_SESSION['id_user']) {
        $id_user = $_GET['id_user'];
        $proprietaire = $unController->selectWhereProprietaire($id_user);
    } else {
        header("location: index.php?page=home");
    }
}
