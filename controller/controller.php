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

    public function selectWhereDemande($id_user)
    {
        $demandes = $this->unModele->selectWhereDemande($id_user);
        return $demandes;
    }
    public function selectAppartementLocataire($id_user)
    {
        $appartementProprio = $this->unModele->selectAppartementLocataire($id_user);
        return $appartementProprio;
    }

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

    public function FiltreLocation($mot)
    {
         return $this->unModele->FiltreLocation($mot);
        
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


    /**********************************FILTRE************** */
    public function FiltreLocation($mot) {

        $appartements = $this->unModele->FiltreLocation($mot);
        return $appartements;

    }
    public function FiltreLocation_index($mot,$prixMax,$prixMin){
        $appartements = $this->unModele->FiltreLocation_index($mot,$prixMax,$prixMin);
        return $appartements;
    }


    /*********************DELETE DEMANDE /********* */
    public function deleteDemande($id_user){
        $demandes = $this->unModele->deleteDemande($id_user);
        return $demandes;
    }
}
