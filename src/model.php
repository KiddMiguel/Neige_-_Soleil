<?php
class Modele
{
    private $unPDO;

    public function __construct($server, $bdd, $user, $mdp)
    {
        $this->unPDO = null;
        try {
            $url = "mysql:host=" . $server . ";dbname=" . $bdd; // Lien de connexion syntaxe obligé.

            $this->unPDO = new PDO($url, $user, $mdp);
        } catch (PDOException $exp) {
            echo "<br/>Erreur de connexion à la base de données !";
            echo $exp->getMessage();
        }
    }

    /************CONNEXION ET INSCRIPTION LOCATAIRE */

    public function verifconnexionLocataire($email, $mdp)
    {
        if ($this->unPDO != null) {
            $request = "select * from locataire where email_locataire = :email_locataire and mdp_locataire= :mdp_locataire";
            $donnees = array(":email_locataire" => $email, ":mdp_locataire" => $mdp);

            $select = $this->unPDO->prepare($request);
            $select->execute($donnees);
            $unUser = $select->fetch();
            return $unUser;
        } else {
            return null;
        }
    }

    public function getConnexionUser(){
        if($this->unPDO != null){
            $request = "SELECT * from verif_connexion ORDER BY date_connexion desc ";
            $select = $this->unPDO->prepare($request);
            $select->execute();
            $users = $select->fetchAll();
            return $users;
        }
    }
    public function getUserError(){
        if($this->unPDO != null){
            $request = "SELECT * from locataire WHERE nb_connexion > 0 ORDER BY last_connexion desc";
            $select = $this->unPDO->prepare($request);
            $select->execute();
            $lastUsers = $select->fetchAll();
            return $lastUsers;
        }
    }
   
}
