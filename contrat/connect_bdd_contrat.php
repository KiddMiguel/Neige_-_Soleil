<?php
// Connexion à la base de données
$conn = mysqli_connect("localhost", "root", "", "neige_soleil");
if (!$conn) {
    die("Connexion échouée : " . mysqli_connect_error());
}

if(isset($_GET['id_appart'])){
	$id_appart = $_GET['id_appart'];
}


