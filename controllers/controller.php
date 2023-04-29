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
    public function verifconnexionLocataire($email, $mdp)
    {   
        return $this->unModele->verifconnexionLocataire($email, $mdp);
    }


    public function getConnexionUser()
    {
        $users = $this->unModele->getConnexionUser();
        return $users;
    }
    public function getUserError()
    {
        $lastUsers = $this->unModele->getUserError();
        return $lastUsers;
    }
   
}
