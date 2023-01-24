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

    public function insertLocataire($tab)
    {
        $this->unModele->insertLocataire($tab);
    }

    public function updateLocataire($tab)
    {
        $this->unModele->updateLocataire($tab);
    }


    /*********************CONTROLLER PROPRIETAIRE************* */
    public function verifconnexionProprietaire($email, $mdp)
    {
        return $this->unModele->verifconnexionProprietaire($email, $mdp);
    }

    public function insertProprietaire($tab)
    {
        $this->unModele->insertProprietaire($tab);
    }

    // public function updateProprietaire($tab)
    // {
    //     $this->unModele->updateProprietaire($tab);
    // }



    /**************************************APPARTEMENT ******************************** */
    public function recupAllAppartement()
    {
        $appartements = $this->unModele->recupAllAppartement();
        return $appartements;
    }

    public function selectWhereApprtement($id_appart)
    {
        return $this->unModele->selectWhereApprtement($id_appart);
    }

    public function insertAppartement($tab)
    {
        $this->unModele->insertAppartement($tab);
    }


    /*********************************RESERVATION************************ */
    public function selectReservationLocataire($id_user)
    {
        $reservations = $this->unModele->selectReservationLocataire($id_user);
        return $reservations;
    }

    public function selectReservationAppartement($id_reservation)
    {
        $reservationsAppart = $this->unModele->selectReservationAppartement($id_reservation);
        return $reservationsAppart;
    }

    public function insertReservation($tab)
    {
        $this->unModele->insertReservation($tab);
    }
 
    public function recupAllReservation()
    {
        $reservations = $this->unModele->recupAllReservation();
        return $reservations;
    }

    /*************************IMAGES********************** */

    public function recupImages()
    {
        $images = $this->unModele->recupImages();
        return $images;
    }

    public function selectWhereImage($id_appart)
    {
        $imagesAppart = $this->unModele->selectReservationLocataire($id_appart);
        return $imagesAppart;
    }
}
