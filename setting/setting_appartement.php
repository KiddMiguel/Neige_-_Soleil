<?php

        $appartements = $unController->recupAllAppartement();
        $appartement = null;
        if(isset($_GET['id_appart'])){
            $id_appart = $_GET['id_appart'];
            $appartement = $unController->selectWhereApprtement($id_appart);
        }

    


