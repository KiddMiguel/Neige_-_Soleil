<?php
if(isset($_POST['submit']))
    {
        $error = "";
        $name = $_POST['name'];
        $login = $_POST['login'];
        $firstname = $_POST['firstname'];
        $DateNaiss = $_POST['dateNaiss'];
        $email = $_POST['email'];
        $Tel = $_POST['tel'];
        $mdp = ($_POST['mdp']);//crypte le mdp
        $avatar = $_FILES['avatar']; //recuperation de l'avatar

        if(!preg_match("#^[a-zA-Z0-9@]+$#",$login))
        {
            $error .= "Le login n'est pas conforme";
        }

        if(!preg_match("#^[A-Z -]+$#", $name))
        {
            $error .= "Ecrire en majuscule";
        }

        if(!preg_match("#^[A-Z][a-z -]+$#", $firstname))
        {
            $error .= "Le prenom n'est pas conforme";
        }

        if(!preg_match("#^0[1-9]|1[0-9]|2[0-9]|3[0-1]/0[1-9]|1[0-2]/[0-9]{4}$#", $dateNaiss))
        {
            $error .= "Date de Naissance invalide";
        }

        if(!preg_match("#^[a-z0-9.-] +@[a-z0-9._-]+.[a-z]{2-6}$#", $email))
        {
            $error .="Adresse email invalide";
        }
        if(!preg_match("#^0[1-9]([ .-]?[0-9]{2}) {4}$#",$Tel))
        {
            $error .= "Le numero de telephone invalide";
        }

        if(!preg_match("#^[a-zA-Z0-9.&][6,12]$#", $mdp))
        {
            $error .= "Mot de passe invalide";
        }

    }