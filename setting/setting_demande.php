<?php
$demandes = null;
if (isset($_GET['id_proprietaire'])) {  
    $id_proprietaire = $_GET['id_proprietaire'];
    $demandes = $unController->selectWhereDemande($id_proprietaire);
    $appartementProprio = $unController->selectAppartementProprietaire($id_proprietaire);
    $locataireProprio = $unController->selectWhereLocataireProprietaire($id_proprietaire);
    $action = $_GET['page'];
    switch ($action) {
        case 'delete':
            $unController->deleteDemande($id_user);
            header("location: index.php?page=demande&id_user=".$_SESSION['id_user']."");
            break;
    }
}

