<?php

$locataire = null;
if (isset($_GET['id_user'])) {
    $id_user = $_GET['id_user'];
    $locataire = $unController->selectWhereLocataire($id_user);
}