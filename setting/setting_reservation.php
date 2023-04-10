<?php
if (isset($_GET['id_appart'])) {
    $id_appart = $_GET['id_appart'];
}

if (isset($_GET['id_user'])) {
    if ($_GET['id_user'] == $_SESSION['id_user']) {
        $id_user = $_GET['id_user'];
        $reservations = $unController->selectReservationLocataire($id_user);
        $reservationsAppart = $unController->selectReservationAppartement($id_user);
    } else {
        header("location: index.php?page=home");
    }
}

if (isset($_POST["valider_formulaire"])) {
    $unController->insertReservation($_POST);
    header("location: index.php?page=reservation&id_user=".$_SESSION['id_user']."");
}
if (isset($_POST["supprimer_reserv"])) {
    if (isset($_GET['id_reservation'])) {
        $id_reservation = $_GET['id_reservation'];
        $unController->deleteReservation($id_reservation);
        header("location: index.php?page=reservation&id_user=".$_SESSION['id_user']."");
    }
}
