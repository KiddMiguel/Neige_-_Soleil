<?php
require_once("src/model.php");
class Controller
{
    private $unModele;

    public function __construct($server, $bdd, $user, $mdp)
    {
        $this->unModele = new Modele($server, $bdd, $user, $mdp);
    }
    
    public function verifconnexion($email, $mdp){
        return $this->unModele->verifconnexion($email, $mdp);
        
    }

}
