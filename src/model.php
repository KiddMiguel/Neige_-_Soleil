<?php
class Modele{
    private $unPDO;

    public function __construct($server, $bdd, $user, $mdp){
        $this->unPDO = null;
        try{
            $url = "mysql:host=".$server.";dbname=".$bdd;

            $this->unPDO = new PDO($url, $user, $mdp);
        }
        catch(PDOException $exp){
            echo "<br/>Erreur de connexion à la base de données !";
            echo $exp->getMessage();
        }
    }

    public function verifconnexion($email, $mdp)
    {
        if ($this->unPDO != null) {
            $request = "select * from locataire where email_locataire = :email_locataire and mdp_locataire= :mdp_locataire;"; 
            $donnees = array(":email_locataire" => $email, ":mdp_locataire"=>$mdp );

            $select = $this->unPDO->prepare($request);
            $select->execute($donnees);
            $unUser = $select->fetch();
            return $unUser;
        }else{
            return null;
        }
    }

}