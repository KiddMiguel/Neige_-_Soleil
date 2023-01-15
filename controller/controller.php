<?php
require_once("src/model.php");
class Controller
{
    private $unModele;

    public function __construct($server, $bdd, $user, $mdp)
    {
        $this->unModele = new Modele($server, $bdd, $user, $mdp);
    }
    /****************CONTROLLER LOCATAIRE********** */
    public function verifconnexionLocataire($email, $mdp){
        return $this->unModele->verifconnexionLocataire($email, $mdp);
        
    }

    public function insertLocataire($tab){
        $this->unModele->insertLocataire($tab);
    }

    public function updateLocataire($tab){
        $this->unModele->updateLocataire($tab);
    }


    /*********************CONTROLLER PROPRIETAIRE************* */
    public function verifconnexionProprietaire($email, $mdp){
        return $this->unModele->verifconnexionProprietaire($email, $mdp);
        
    }

    public function insertProprietaire($tab){
        $this->unModele->insertProprietaire($tab);
    }

    public function updateProprietaire($tab){
        $this->unModele->updateProprietaire($tab);
    }

    public function recupImage()
    {
        $images = $this->unModele->recupImage();

        return $images;
    }



}
