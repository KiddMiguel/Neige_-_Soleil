<?php
// Connexion à la base de données
$conn = mysqli_connect("localhost", "root", "", "neige_soleil");

// Vérification de la connexion
if (!$conn) {
    die("Connexion échouée : " . mysqli_connect_error());
}else{
    echo 'connection good';
}

// Requête SELECT pour récupérer les réservations
$sql = "SELECT id_reservation, date_debut_reservation, date_fin_reservation, statut_reservation FROM reservation";

// Exécution de la requête
$result = mysqli_query($conn, $sql);

// Création d'un tableau pour stocker les événements
$events = [];

// Parcours des résultats de la requête
while ($row = mysqli_fetch_assoc($result)) {
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
echo json_encode($event);
echo 'Hello wolrd';


