<?php
$demandes = null;
if (isset($_GET['id_user'])) {
    $id_user = $_GET['id_user'];
    $demandes = $unController->selectWhereDemande($id_user);
    $appartementProprio = $unController->selectAppartementLocataire($id_user);
}
