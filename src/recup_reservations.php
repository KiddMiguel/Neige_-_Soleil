<?php

// Connexion à la base de données
$conn = mysqli_connect("localhost", "root", "", "neige_soleil");
if (!$conn) {
    die("Connexion échouée : " . mysqli_connect_error());
}

//Récupération de la variable $id_appart depuis la fiche setting_reservation grace à un $_GET
session_start();
$id_appart = $_SESSION['id_appart'];

$sql = "SELECT id_reservation, date_debut_reservation, date_fin_reservation, statut_reservation FROM reservation where id_appart = $id_appart";
$result = mysqli_query($conn, $sql);
$events = [];

// Parcours des résultats de la requête
foreach ($result as $row) {
    // Transformation de chaque réservation en un événement
    $event = [
        'id' => $row['id_reservation'],
        'title' => $row['statut_reservation'],
        'start' => $row['date_debut_reservation'],
        'end' => $row['date_fin_reservation']
    ];

    // Ajout de l'événement au tableau
    $events[] = $event;
}

// Encodage du tableau en JSON pour l'affichage dans FullCalendar
echo json_encode($events);
unset($_SESSION['id_appart']);
