<?php
$reservations = $unController->recupAllReservation();

$reservation = null;
if(isset($_GET['id_user'])){
    $id_user = $_GET['id_user'];
    $reservations = $unController->selectReservationLocataire($id_user);
}