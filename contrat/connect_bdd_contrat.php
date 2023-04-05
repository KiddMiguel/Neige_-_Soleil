<?php
// Connexion à la base de données
$conn = mysqli_connect("localhost", "root", "", "neige_soleil");
if (!$conn) {
    die("Connexion échouée : " . mysqli_connect_error());
}

if(isset($_GET['id_appart'])){
	$id_appart = $_GET['id_appart'];
}

//-------------------------------------------REQUESTES POUR RECUPERER LES INFOS POUR LE LOCATAIRE
$sql_appart = "select * from appartement WHERE id_user = ".$_SESSION['id_user']." And id_appart= ".$id_appart.";";
$sql_reserv = "select * from reservation WHERE id_user = ".$_SESSION['id_user']." And id_appart= ".$id_appart.";";
$result_appart = mysqli_query($conn, $sql_appart);
$appartement = mysqli_fetch_assoc($result_appart);

$result_reserv = mysqli_query($conn, $sql_reserv);
$reservation = mysqli_fetch_assoc($result_reserv);


$date_debut_reservation = $reservation['date_debut_reservation'];
$date_fin_reservation = $reservation['date_fin_reservation'];

function format_date_fr($date) {
    $date_obj = new DateTime($date);
    $date_fr = $date_obj->format('j F Y');
    $date_fr = strtr($date_fr, [
        'January' => 'janvier',
        'February' => 'février',
        'March' => 'mars',
        'April' => 'avril',
        'May' => 'mai',
        'June' => 'juin',
        'July' => 'juillet',
        'August' => 'août',
        'September' => 'septembre',
        'October' => 'octobre',
        'November' => 'novembre',
        'December' => 'décembre',
    ]);
    return $date_fr;
}

$date_debut_fr = format_date_fr($date_debut_reservation);
$date_fin_fr = format_date_fr($date_fin_reservation);

// Prix mensuel de l'appartement
$prix_mensuel = $reservation['prix_reservation'];

// Calcul du nombre de jours de la réservation
$duree_en_jours = (strtotime($date_fin_reservation) - strtotime($date_debut_reservation)) / (60 * 60 * 24);

// Calcul du nombre de mois complets de la réservation
$duree_en_mois = floor($duree_en_jours / 30);

// Calcul du prix total de la réservation
$prix_total = $duree_en_mois * $prix_mensuel;

// Ajout du dernier mois si la réservation est incomplète
if ($duree_en_jours % 30 != 0) {
    $prix_total += $prix_mensuel;
}

//-------------------------------- REQUESTES POUR RECUPERER LES INFOS POUR LE PROPRIETAIRE