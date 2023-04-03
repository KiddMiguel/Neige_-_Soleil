<?php
if (isset($_GET['id_appart'])) {
    $id_appart = $_GET['id_appart'];
    $_SESSION['id_appart'] = $id_appart;
}
if (isset($_GET['id_user'])) {
    $id_user = $_GET['id_user'];
    $reservations = $unController->selectReservationLocataire($id_user);
    $reservationsAppart = $unController->selectReservationAppartement($id_user);
}

if (isset($_POST["valider_formulaire"])) {
    $unController->insertReservation($_POST);
    if(isset($_GET['id_user'])) {
    $id_user = $_GET['id_user'];
    header("location: index.php?page=paiement");
    }
}

