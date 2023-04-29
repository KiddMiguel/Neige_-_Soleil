-- name : indexaation des element html vers php pour récupèrer la veulr quelle contient
-- <form action="" method="post"> la methode post c''est une méthode d'envoi des données html (leur valeur) dans notre php pour pouvoir l'utiliser plus tard et la renvoyer.
-- Pour récupérer les informations de notre name (ca valeur) on utulise un POST qui fait de cette façon:
       
    if (isset($_POST["se_connecter"])) { 
        $email = $_POST["email_locataire"];
        $mdp = $_POST["mdp_locataire"];
    }
    "COMMENTAIRE" : -- Ce code vérifie si le formulaire a été soumis en cherchant la présence d'une valeur avec la clé "se_connecter" dans la variable superglobale $_POST.
                  -- Si cette valeur existe, cela signifie que le bouton de connexion a été cliqué et que les informations du formulaire ont été envoyées.

                  -- Le code récupère ensuite les valeurs saisies par l''utilisateur pour l'adresse e-mail et le mot de passe et les stocke dans des variables $email et $mdp respectivement. 
                  -- Ces variables peuvent ensuite être utilisées pour effectuer des opérations de connexion ou d'authentification sur la base de données ou le système d'authentification approprié. 