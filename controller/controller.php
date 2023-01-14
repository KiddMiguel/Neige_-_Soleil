<?php
require_once("src/model.php");
class Controller
{
    private $unModele;

    public function __construct($server, $bdd, $user, $mdp)
    {
        $this->unModele = new Modele($server, $bdd, $user, $mdp);
    }
    
    public function verifconnexionLocataire($email, $mdp){
        return $this->unModele->verifconnexionLocataire($email, $mdp);
        
    }

    public function insertLocataire($tab){
        $this->unModele->insertLocataire($tab);
    }

    public function recupImage()
    {
        $images = $this->unModele->recupImage();

        return $images;
    }

}
