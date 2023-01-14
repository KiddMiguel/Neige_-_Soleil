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

    public function verifconnexionLocataire($email, $mdp)
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
    public function insertLocataire($tab){
        if($this->unPDO != null){
            $request = "insert into locataire values (null, :civilite_locataire, :nom_locataire, :prenom_locataire, :email_locataire, :mdp_locataire, :tel_locataire ,:adresse_locataire, :cp_locataire, null, null, null);";
            $donnees = array (
                ":civilite_locataire" => $tab['civilite_locataire'], 
                ":nom_locataire" => $tab['nom_locataire'], 
                ":prenom_locataire" => $tab['prenom_locataire'], 
                ":email_locataire" => $tab['email_locataire'], 
                ":mdp_locataire" => $tab['mdp_locataire'], 
                ":tel_locataire" => $tab['tel_locataire'], 
                ":adresse_locataire" => $tab['adresse_locataire'], 
                ":cp_locataire" => $tab['cp_locataire']
            );
            $insert = $this->unPDO->prepare($request);
            $insert->execute($donnees);
        }
    }

    public function recupImage(){
        if ($this->unPDO != null) {
        $request = "select * from image";
        $select = $this->unPDO->prepare($request);
        $select->execute();
        $images = $select->fetchAll();
        return $images;
        }else  {
            return null;
        }
    } 

}