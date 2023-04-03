<?php
$contrats = $unController->dashBordContrat($id_user);
$mois = $unController->dashBordContrat_last($id_user);
$factures_wait = $unController->dashBordFacture_wait();
$revenu = $unController->dashBordRevenu_month($id_user);
$revenus = $unController->dashBordRevenu($id_user);
// x$nbAppart = $unController->dashBordNbAppartement($id_user);

//on crèe crée un tableau associatif avec les noms de mois correspondants aux numéros de mois.
$mois_noms = [
    1 => 'Janvier',
    2 => 'Fevrier',
    3 => 'Mars',
    4 => 'Avril',
    5 => 'Mai',
    6 => 'Juin',
    7 => 'Juillet',
    8 => 'Août',
    9 => 'Septembre',
    10 => 'Octobre',
    11 => 'Novembre',
    12 => 'Décembre',
];
//La condition isset($mois_noms[$mois]) vérifie si le mois donné est présent dans le tableau.
if (isset($mois_noms[$mois])) {
    $mois = $mois_noms[$mois];
} 