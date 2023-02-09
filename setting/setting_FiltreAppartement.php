<?php
// paramétre de bouton filtre

        $lesAppartement = $unControleur->FiltreLocation($mot);

        $lesAppartement = null; 

if ( isset($_POST['filtre']))
    {
        $mot = $_POST['mot'];
        $lesAppartement = $unControleur->FiltreLocation($mot);
    }   
?>