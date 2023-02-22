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

    public function updateLocataire($id_user)
    {
        return $this->unModele->updateLocataire($id_user);
    }


    public function selectWhereLocataire($id_user)
    {
        $locataire = $this->unModele->selectWhereLocataire($id_user);
        return $locataire;
    }
    public function updateLocataireEmailMdp($id_user)
    {
        return $this->unModele->updateLocataireEmailMdp($id_user);
    }



    /*********************CONTROLLER PROPRIETAIRE************* */

    public function selectWhereProprietaire($id_user)
    {
        $proprietaire = $this->unModele->selectWhereProprietaire($id_user);
        return $proprietaire;
    }
    public function verifconnexionProprietaire($email, $mdp)
    {
        return $this->unModele->verifconnexionProprietaire($email, $mdp);
    }

    public function insertProprietaire($id_user)
    {
        $this->unModele->insertProprietaire($id_user);
    }

    public function updateProprietaire($id_user)
    {
        return $this->unModele->updateProprietaire($id_user);
    }

    public function updateProprietaireEmailMdp($id_user)
    {
        return $this->unModele->updateProprietaireEmailMdp($id_user);
    }

    public function selectWhereDemande($id_user)
    {
        $demandes = $this->unModele->selectWhereDemande($id_user);
        return $demandes;
    }
    public function selectAppartementProprietaire($id_proprietaire)
    {
        $appartementProprio = $this->unModele->selectAppartementProprietaire($id_proprietaire);
        return $appartementProprio;
    }
    public function selectWhereLocataireProprietaire($id_proprietaire)
    {
        $locataireProprio = $this->unModele->selectWhereLocataireProprietaire($id_proprietaire);
        return $locataireProprio;
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


    public function selectWhereImage($id_appart)
    {
        $imagesAppart = $this->unModele->selectWhereImage($id_appart);
        return $imagesAppart;
    }
    public function selectWhereAtout($id_appart)
    {
        $atouts = $this->unModele->selectWhereAtout($id_appart);
        return $atouts;
    }


    /**********************************FILTRE************** */
    public function FiltreLocation($mot)
    {

        $appartements = $this->unModele->FiltreLocation($mot);
        return $appartements;
    }
    public function FiltreLocation_index($mot, $prixMax, $prixMin)
    {
        $appartements = $this->unModele->FiltreLocation_index($mot, $prixMax, $prixMin);
        return $appartements;
    }


    /*********************DELETE DEMANDE /********* */
    public function deleteDemande($id_user)
    {
        $demandes = $this->unModele->deleteDemande($id_user);
        return $demandes;
    }
}
