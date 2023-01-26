<?php

$appartements = $unController->recupAllAppartement();
$appartement = null;

if (isset($_GET['id_appart'])) {
    $id_appart = $_GET['id_appart'];
    $appartement = $unController->selectWhereApprtement($id_appart);
}

if (isset($_POST["valider_appartement"])) {
    $unController->insertAppartement($_POST);

    header("location: index.php?page=demande&id_user=" . $_SESSION['id_user'] . "");
}
if (isset($_POST["filtre"])){
    $mot = $_POST["mot"];
    $appartements = $unController->FiltreLocation($mot);
}else{
    $appartements = $unController->recupAllAppartement();
}