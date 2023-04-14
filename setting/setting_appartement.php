<?php

$appartements = $unController->recupAllAppartement();
$appartement = null;
$currentPage = null;
$pages = null;

if (isset($_GET['id_appart'])) {
    $id_appart = $_GET['id_appart'];
    $appartement = $unController->selectWhereApprtement($id_appart);
    $images =$unController->selectWhereImage($id_appart);
    $atouts =$unController->selectWhereAtout($id_appart);
}

if (isset($_POST["valider_appartement"])) {
    $unController->insertAppartement($_POST);
    header("location: index.php?page=dashboard&id_user=" . $_SESSION['id_user'] . "");
}

if (isset($_POST["filtre_index"])){
    $mot_index = $_POST["mot_index"];
    $statut= $_POST["statut"];
    $prixMax = $_POST["prixMax"];
    $prixMin= $_POST["prixMin"];
    $appartements = $unController->FiltreLocation_index($mot_index, $statut, $prixMax, $prixMin);
}else{
    $appartements = $unController->recupAllAppartement();
}

if(isset($_POST["filtre_index"])){
// On détermine sur quelle page on se trouve
if (isset($_GET['n']) && is_numeric($_GET['n'])) {
    $currentPage =  $_GET['n'];
}else{
    $currentPage = 1;
}
    // On détermine le nombre d'appart par page
    $parPage = 8;
    // On calcule le nombre de pages total
    $nbAppartement = $unController->recupNombreAppartement();
    $pages = ceil($nbAppartement / $parPage);
    $premier = ($currentPage * $parPage) - $parPage;
    $appartements = $unController->recupPaginationAppartement($premier,$parPage);

}
