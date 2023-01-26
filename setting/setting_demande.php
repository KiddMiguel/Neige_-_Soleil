<?php
$demandes = null;
if (isset($_GET['id_user'])) {  
    $id_user = $_GET['id_user'];
    $demandes = $unController->selectWhereDemande($id_user);
    $appartementProprio = $unController->selectAppartementLocataire($id_user);
    $action = $_GET['page'];
    switch ($action) {
        case 'delete':
            $unController->deleteDemande($id_user);
            header("location: index.php?page=demande&id_user=".$_SESSION['id_user']."");
            break;
    }
}

