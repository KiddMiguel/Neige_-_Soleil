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


    /************CONNEXION ET INSCRIPTION LOCATAIRE */

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

    public function updateLocataire($tab){
        if($this->unPDO != null){

            $request = "update locataire set nom_locataire=:nom_locataire, prenom_locataire=:prenom_locataire, tel_locataire=:tel_locataire ,adresse_locataire=:adresse_locataire, cp_locataire=:cp_locataire where locataire.id_user=2";
            $donnees = array (
                ":nom_locataire" => $tab['nom_locataire'], 
                ":prenom_locataire" => $tab['prenom_locataire'], 
                ":tel_locataire" => $tab['tel_locataire'], 
                ":adresse_locataire" => $tab['adresse_locataire'], 
                ":cp_locataire" => $tab['cp_locataire'],
                            );
            $update = $this->unPDO->prepare($request);
            $update->execute($donnees);
        }
    }

    /************CONNEXION ET INSCRIPTION PROPRIETAIRE */

    public function verifconnexionProprietaire($email, $mdp)
    {
        if ($this->unPDO != null) {
            $request = "select * from proprietaire where email_proprio = :email_proprio and mdp_proprio= :mdp_proprio;"; 
            $donnees = array(":email_proprio" => $email, ":mdp_proprio"=>$mdp );

            $select = $this->unPDO->prepare($request);
            $select->execute($donnees);
            $unUser = $select->fetch();
            return $unUser;
        }else{
            return null;
        }
    }
    public function insertProprietaire($tab){
        if($this->unPDO != null){
            $request = "insert into proprietaire values (null, :civilite_proprio, :nom_proprio, :prenom_proprio, :statut_proprio, :email_proprio, :mdp_proprio, :tel_proprio ,:adresse_proprio, :cp_proprio, :ville_proprio, :pays_proprio, :code_adherent, null, null);";
            $donnees = array (
                ":civilite_proprio" => $tab['civilite_proprio'], 
                ":nom_proprio" => $tab['nom_proprio'], 
                ":prenom_proprio" => $tab['prenom_proprio'], 
                ":statut_proprio" => $tab['statut_proprio'], 
                ":email_proprio" => $tab['email_proprio'], 
                ":mdp_proprio" => $tab['mdp_proprio'], 
                ":tel_proprio" => $tab['tel_proprio'], 
                ":adresse_proprio" => $tab['adresse_proprio'], 
                ":cp_proprio" => $tab['cp_proprio'],
                ":ville_proprio" => $tab['ville_proprio'],
                ":pays_proprio" => $tab['pays_proprio'],
                ":code_adherent" => $tab['code_adherent']
            );
            $insert = $this->unPDO->prepare($request);
            $insert->execute($donnees);
        }
    }

    // public function updateProprietaire($tab){
    //     if($this->unPDO != null){
    //         $request = "update locataire set nom_locataire=:nom_locataire, prenom_locataire=:prenom_locataire, tel_locataire=:tel_locataire ,adresse_locataire=:adresse_locataire, cp_locataire=:cp_locataire where id_user=:id_user;";
    //         $donnees = array (
    //             ":nom_locataire" => $tab['nom_locataire'], 
    //             ":prenom_locataire" => $tab['prenom_locataire'], 
    //             ":tel_locataire" => $tab['tel_locataire'], 
    //             ":adresse_locataire" => $tab['adresse_locataire'], 
    //             ":cp_locataire" => $tab['cp_locataire'],
    //             ":id_user" => $tab['id_user']
    //         );
    //         $update = $this->unPDO->prepare($request);
    //         $update->execute($donnees);
    //     }
    // }


    /*********************************************APPARTEMENT ************************************** */
    public function recupAllAppartement(){
        if($this->unPDO != null){
            $request = "select * from appartement";
            $select = $this->unPDO->prepare($request);
            $select->execute();
            $appartements = $select->fetchAll();
            return $appartements;
        }else{
            return null;
        }
    }
    
    public function selectWhereApprtement($id_appart)
    {
        if ($this->unPDO != null) {
            $request = "select * from appartement where id_appart = :id_appart"; 
            $donnees = array(":id_appart" => $id_appart );

            $select = $this->unPDO->prepare($request);
            $select->execute($donnees);
            $appartement = $select->fetch();
            return $appartement;
        }
    }

    /*********VALIDATION DU FORMUALIRE DE LA DEMANDE D'INSERT DE L'APPART */
    public function insertAppartement($tab){
        if($this->unPDO != null){
            $request = "insert into appartement values (null, 'En cours de traitement', :prix_appart, :intitule_appart, :ville_appart, :cp_appart, :adresse_appart, :description_appart, :type_appart, :superficie_appart, :nb_chambres, :nb_lits, :nb_salles_bain, :capacite_appart, :atout_appart1 , :atout_appart2, :atout_appart3, 'Default.png', 'Default.png', 'Default.png', 'Default.png', 'Default.png', null, null, :id_user, null)";
            $donnees = array (
                ":prix_appart" => $tab['prix_appart'], 
                ":intitule_appart" => $tab['intitule_appart'], 
                ":ville_appart" => $tab['ville_appart'], 
                ":cp_appart" => $tab['cp_appart'],
                ":adresse_appart" => $tab['adresse_appart'], 
                ":description_appart" => $tab['description_appart'],
                ":type_appart" => $tab['type_appart'],
                ":superficie_appart" => $tab['superficie_appart'],
                ":nb_chambres" => $tab['nb_chambres'],
                ":nb_lits" => $tab['nb_lits'],
                ":nb_salles_bain" => $tab['nb_salles_bain'],
                ":capacite_appart" => $tab['capacite_appart'],
                ":atout_appart1" => $tab['atout_appart1'],
                ":atout_appart2" => $tab['atout_appart2'],
                ":atout_appart3" => $tab['atout_appart3'],
                ":id_user" => $tab['id_user']
            );
            $insert = $this->unPDO->prepare($request);
            $insert->execute($donnees);
        }
    }


    public function selectWhereDemande($id_user)
    {
        if ($this->unPDO != null) {
            $request = "select * from demande where id_user = :id_user"; 
            $donnees = array(":id_user" => $id_user );

            $select = $this->unPDO->prepare($request);
            $select->execute($donnees);
            $demandes = $select->fetchAll();
            return $demandes;
        }
    }

    
    public function selectAppartementLocataire($id_user)
    {
        if ($this->unPDO != null) {
            $request = "select * from appartement where id_user = :id_user"; 
            $donnees = array(":id_user" => $id_user );

            $select = $this->unPDO->prepare($request);
            $select->execute($donnees);
            $appartementProprio = $select->fetchAll();
            return $appartementProprio;
        }
    }


    /********************SUPRESSION DES DEMANDES***************** */
    
    public function deleteDemande($id_user)
    {
        if ($this->unPDO != null) {
            $request = "Delete from demande where id_user = :id_user"; 
            $donnees = array(":id_user" => $id_user );

            $delete = $this->unPDO->prepare($request);
            $delete->execute($donnees);
            $demandes = $delete->fetch();
            return $demandes;
        }
    }

    /***************************RECUP RESERVATION*********************************** */
    public function insertReservation($tab){
        if($this->unPDO != null){
            $request = "insert into reservation values (null, 'En cours réservation', :date_debut_reservation, :date_fin_reservation, :prix_reservation, :nb_personnes, :id_user, :id_appart, null)";
            $donnees = array (
                ":date_debut_reservation" => $tab['date_debut_reservation'], 
                ":date_fin_reservation" => $tab['date_fin_reservation'], 
                ":prix_reservation" => $tab['prix_reservation'], 
                ":nb_personnes" => $tab['nb_personnes'],
                ":id_user" => $tab['id_user'], 
                ":id_appart" => $tab['id_appart']);
            $insert = $this->unPDO->prepare($request);
            $insert->execute($donnees);
        }
    }

    public function FiltreLocation($mot)
    {
        if ($this->unPDO != null){
            $requete ="select * from appartement where ville_appart like :mot or statut_appart like :mot or prix_appart like :mot";
            $donnees = array (":mot"=>"%".$mot."%");
            $select =$this->unPDO->prepare ($requete);
            $select->execute($donnees);
            $appartements = $select->fetchAll();
            return $appartements;
        }else{
            return null; 
        }
    }
    public function FiltreLocation_index($mot,$prixMax,$prixMin)
    {
        if ($this->unPDO != null){

            $requete ="select * from appartement where ville_appart like :mot or statut_appart like :mot and prix_appart  BETWEEN :prixMin AND :prixMax";
            $donnees = array (
                // if $mot == null ":mot"=>% 
                ":mot"=>"%".$mot."%" ,
                               ":prixMax" =>"%".$prixMax."%",
                               ":prixMin" =>"%".$prixMin."%"
                             );
            $select =$this->unPDO->prepare ($requete);
            $select->execute($donnees);
            $appartements = $select->fetchAll();
            return $appartements;
        }else{
            return null; 
        }
    }
    public function selectReservationLocataire($id_user)
    {
        if ($this->unPDO != null) {
            $request = "select * from reservation where id_user = :id_user"; 
            $donnees = array(":id_user" => $id_user );

            $select = $this->unPDO->prepare($request);
            $select->execute($donnees);
            $reservations = $select->fetchAll();
            return $reservations;
        }
    }

    public function selectReservationAppartement($id_reservation)
    {
        if ($this->unPDO != null) {
            $request = "select * from appartement where id_reservation = :id_reservation"; 
            $donnees = array(":id_reservation" => $id_reservation );

            $select = $this->unPDO->prepare($request);
            $select->execute($donnees);
            $appartement = $select->fetch();
            return $appartement;
        }
    }

    public function recupAllReservation(){
        if($this->unPDO != null){
            $request = "select * from reservation";
            $select = $this->unPDO->prepare($request);
            $select->execute();
            $reservations = $select->fetchAll();
            return $reservations;
        }else{
            return null;
        }
    }

    // public function recupImages(){
    //     if ($this->unPDO != null) {
    //     $request = "select * from image";
    //     $select = $this->unPDO->prepare($request);
    //     $select->execute();
    //     $images = $select->fetchAll();
    //     return $images;
    //     }else  {
    //         return null;
    //     }
    // } 

    public function selectWhereImage($id_appart)
    {
        if ($this->unPDO != null) {
            $request = "select * from images where id_appart = :id_appart"; 
            $donnees = array(":id_appart" => $id_appart );

            $select = $this->unPDO->prepare($request);
            $select->execute($donnees);
            $imagesAppart = $select->fetchAll();

            return $imagesAppart;
        }
    }


}