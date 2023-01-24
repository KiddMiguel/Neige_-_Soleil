<?php

        $appartements = $unController->recupAllAppartement();
        $appartement = null;
        if(isset($_GET['id_appart'])){
            $id_appart = $_GET['id_appart'];
            $appartement = $unController->selectWhereApprtement($id_appart);
        }
        if (isset($_POST["valider_appartement"])) {
            $unController->insertAppartement($_POST);
        
            // header("location: index.php?page=home");
        }
    


