<?php
// $reservations = $unController->recupAllReservation();
$reservations = null;
if(isset($_GET['id_user'])){
    $id_user = $_GET['id_user'];
    $reservations = $unController->selectReservationLocataire($id_user);
}


    if (isset($_POST["valider_form"])) {
        $unController->insertReseravation($_POST);
        header("location: index.php?page=home");
    }
