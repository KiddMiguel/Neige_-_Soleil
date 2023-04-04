<?php
class Modele
{
    private $unPDO;

    public function __construct($server, $bdd, $user, $mdp)
    {
        $this->unPDO = null;
        try {
            $url = "mysql:host=" . $server . ";dbname=" . $bdd;

            $this->unPDO = new PDO($url, $user, $mdp);
        } catch (PDOException $exp) {
            echo "<br/>Erreur de connexion à la base de données !";
            echo $exp->getMessage();
        }
    }


    /************CONNEXION ET INSCRIPTION LOCATAIRE */

    public function verifconnexionLocataire($email, $mdp)
    {
        if ($this->unPDO != null) {
            $request = "select * from locataire where email_locataire = :email_locataire and mdp_locataire= :mdp_locataire;";
            $donnees = array(":email_locataire" => $email, ":mdp_locataire" => $mdp);

            $select = $this->unPDO->prepare($request);
            $select->execute($donnees);
            $unUser = $select->fetch();
            return $unUser;
        } else {
            return null;
        }
    }
    public function insertLocataire($tab)
    {
        if ($this->unPDO != null) {
            $request = "insert into locataire values (null, :civilite_locataire, :nom_locataire, :prenom_locataire, :email_locataire, :mdp_locataire, null, null, null, null, null, null, null)";
            $donnees = array(
                ":civilite_locataire" => $tab['civilite_locataire'],
                ":nom_locataire" => $tab['nom_locataire'],
                ":prenom_locataire" => $tab['prenom_locataire'],
                ":email_locataire" => $tab['email_locataire'],
                ":mdp_locataire" => $tab['mdp_locataire']
            );
            $insert = $this->unPDO->prepare($request);
            $insert->execute($donnees);
        }
    }

    public function updateLocataire($tab)
    {
        if ($this->unPDO != null) {
            $id_user = $_GET["id_user"];
            $request = "update locataire set nom_locataire=:nom_locataire, prenom_locataire=:prenom_locataire, tel_locataire=:tel_locataire ,adresse_locataire=:adresse_locataire, cp_locataire=:cp_locataire where locataire.id_user=$id_user";
            $donnees = array(
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
            $donnees = array(":email_proprio" => $email, ":mdp_proprio" => $mdp);

            $select = $this->unPDO->prepare($request);
            $select->execute($donnees);
            $unUser = $select->fetch();
            return $unUser;
        } else {
            return null;
        }
    }
    public function insertProprietaire($tab)
    {
        if ($this->unPDO != null) {
            $request = "insert into proprietaire values (null,null, :civilite_proprio, :nom_proprio, :prenom_proprio, null, :email_proprio, :mdp_proprio, :tel_proprio ,null, null, null, null, null, null, null);";
            $donnees = array(
                ":civilite_proprio" => $tab['civilite_proprio'],
                ":nom_proprio" => $tab['nom_proprio'],
                ":prenom_proprio" => $tab['prenom_proprio'],
                ":email_proprio" => $tab['email_proprio'],
                ":mdp_proprio" => $tab['mdp_proprio'],
                ":tel_proprio" => $tab['tel_proprio']
            );
            $insert = $this->unPDO->prepare($request);
            $insert->execute($donnees);
        }
    }

    public function updateProprietaire($tab)
    {
        if ($this->unPDO != null) {
            $id_user = $_GET["id_user"];
            $request = "update proprietaire set civilite_proprio=:civilite_proprio, nom_proprio=:nom_proprio, prenom_proprio=:prenom_proprio ,statut_proprio=:statut_proprio, tel_proprio=:tel_proprio, adresse_proprio=:adresse_proprio, cp_proprio=:cp_proprio, ville_proprio=:ville_proprio, pays_proprio=:pays_proprio, code_adherent=:code_adherent where proprietaire.id_user=$id_user";
            $donnees = array(
                ":civilite_proprio" => $tab['civilite_proprio'],
                ":nom_proprio" => $tab['nom_proprio'],
                ":prenom_proprio" => $tab['prenom_proprio'],
                ":statut_proprio" => $tab['statut_proprio'],
                ":tel_proprio" => $tab['tel_proprio'],
                ":adresse_proprio" => $tab['adresse_proprio'],
                ":cp_proprio" => $tab['cp_proprio'],
                ":ville_proprio" => $tab['ville_proprio'],
                ":pays_proprio" => $tab['pays_proprio'],
                ":code_adherent" => $tab['code_adherent']
            );
            $update = $this->unPDO->prepare($request);
            $update->execute($donnees);
        }
    }
    public function updateProprietaireEmailMdp($tab)
    {
        if ($this->unPDO != null) {
            $id_user = $_GET["id_user"];
            $request = "update proprietaire set email_proprio=:email_proprio, mdp_proprio=:mdp_proprio where proprietaire.id_user=$id_user";
            $donnees = array(
                ":email_proprio" => $tab['email_proprio'],
                ":mdp_proprio" => $tab['mdp_proprio']
            );
            $update = $this->unPDO->prepare($request);
            $update->execute($donnees);
        }
    }
    public function updateLocataireEmailMdp($tab)
    {
        if ($this->unPDO != null) {
            $id_user = $_GET["id_user"];
            $request = "update locataire set email_locataire=:email_locataire, mdp_locataire=:mdp_locataire where id_user=$id_user";
            $donnees = array(
                ":email_locataire" => $tab['email_locataire'],
                ":mdp_locataire" => $tab['mdp_locataire']
            );
            $update = $this->unPDO->prepare($request);
            $update->execute($donnees);
        }
    }


    public function selectWhereProprietaire($id_user)
    {
        if ($this->unPDO != null) {
            $request = "select * from proprietaire where id_user =:id_user ";
            $select = $this->unPDO->prepare($request);
            $select->bindValue(':id_user', $id_user, PDO::PARAM_INT);
            $select->execute();
            $proprietaire = $select->fetch();
            return $proprietaire;
        }
    }
    public function selectWhereLocataireProprietaire($id_proprietaire)
    {
        if ($this->unPDO != null) {
            $request = "select * from locataire where id_proprietaire =:id_proprietaire ";
            $select = $this->unPDO->prepare($request);
            $select->bindValue(':id_proprietaire', $id_proprietaire, PDO::PARAM_INT);
            $select->execute();
            $locataireProprio = $select->fetchAll();
            return $locataireProprio;
        }
    }


    /*********************************************APPARTEMENT ************************************** */
    public function recupAllAppartement()
    {
        if ($this->unPDO != null) {
            $request = "select * from appartement";
            $select = $this->unPDO->prepare($request);
            $select->execute();
            $appartements = $select->fetchAll();
            return $appartements;
        } else {
            return null;
        }
    }

    public function selectWhereApprtement($id_appart)
    {
        if ($this->unPDO != null) {
            $request = "select * from appartement where id_appart = :id_appart";
            $donnees = array(":id_appart" => $id_appart);

            $select = $this->unPDO->prepare($request);
            $select->execute($donnees);
            $appartement = $select->fetch();
            return $appartement;
        }
    }

    /*********VALIDATION DU FORMUALIRE DE LA DEMANDE D'INSERT DE L'APPART */
    public function insertAppartement($tab)
    {
        if ($this->unPDO != null) {
            $request = "insert into appartement values (null, 'Disponible', :prix_appart, :intitule_appart, :ville_appart, :cp_appart, :adresse_appart, :description_appart, :type_appart, :superficie_appart,'Default.png', :nb_chambre , :nb_cuisine, :nb_salon, :nb_salle_bain, :nb_piece,null, null, :id_user)";
            $donnees = array(
                ":prix_appart" => $tab['prix_appart'],
                ":intitule_appart" => $tab['intitule_appart'],
                ":ville_appart" => $tab['ville_appart'],
                ":cp_appart" => $tab['cp_appart'],
                ":adresse_appart" => $tab['adresse_appart'],
                ":description_appart" => $tab['description_appart'],
                ":type_appart" => $tab['type_appart'],
                ":superficie_appart" => $tab['superficie_appart'],
                ":nb_chambre" => $tab['nb_chambre'],
                ":nb_cuisine" => $tab['nb_cuisine'],
                ":nb_salon" => $tab['nb_salon'],
                ":nb_salle_bain" => $tab['nb_salle_bain'],
                ":nb_piece" => $tab['nb_piece'],
                ":id_user" => $tab['id_user']
            );
            $insert = $this->unPDO->prepare($request);
            $insert->execute($donnees);
        }
    }
    public function selectWhereLocataire($id_user)
    {
        if ($this->unPDO != null) {
            $request = "select * from locataire where id_user =:id_user ";
            $select = $this->unPDO->prepare($request);
            $select->bindValue(':id_user', $id_user, PDO::PARAM_INT);
            $select->execute();
            $locataire = $select->fetch();
            return $locataire;
        }
    }


    public function selectWhereDemande($id_user)
    {
        if ($this->unPDO != null) {
            $request = "select * from demande where id_user = :id_user";
            $donnees = array(":id_user" => $id_user);

            $select = $this->unPDO->prepare($request);
            $select->execute($donnees);
            $demandes = $select->fetchAll();
            return $demandes;
        }
    }


    public function selectAppartementProprietaire($id_user)
    {
        if ($this->unPDO != null) {
            $request = "select * from appartement where id_user = :id_user";
            $donnees = array(":id_user" => $id_user);

            $select = $this->unPDO->prepare($request);
            $select->execute($donnees);
            $appartementProprio = $select->fetchAll();
            return $appartementProprio;
        }
    }
    public function selectAppartementLocataire($id_user)
    {
        if ($this->unPDO != null) {
            $request = "select * from appartement where id_user = :id_user";
            $donnees = array(":id_user" => $id_user);

            $select = $this->unPDO->prepare($request);
            $select->execute($donnees);
            $appartementLocataire = $select->fetchAll();
            return $appartementLocataire;
        }
    }


    /********************SUPRESSION DES DEMANDES***************** */

    public function deleteDemande($id_user)
    {
        if ($this->unPDO != null) {
            $request = "Delete from demande where id_user = :id_user";
            $donnees = array(":id_user" => $id_user);

            $delete = $this->unPDO->prepare($request);
            $delete->execute($donnees);
            $demandes = $delete->fetch();
            return $demandes;
        }
    }

    /***************************RECUP RESERVATION*********************************** */
    public function insertReservation($tab)
    {
        if ($this->unPDO != null) {
            $request = "insert into reservation values (null, 'En cours', :date_debut_reservation, :date_fin_reservation, :prix_reservation, :nb_personnes, :id_user, :id_appart)";
            $donnees = array(
                ":date_debut_reservation" => $tab['date_debut_reservation'],
                ":date_fin_reservation" => $tab['date_fin_reservation'],
                ":prix_reservation" => $tab['prix_reservation'],
                ":nb_personnes" => $tab['nb_personnes'],
                ":id_user" => $tab['id_user'],
                ":id_appart" => $tab['id_appart']
            );
            $insert = $this->unPDO->prepare($request);
            $insert->execute($donnees);
        }
    }

    public function FiltreLocation($mot)
    {
        if ($this->unPDO != null) {
            $requete = "select * from appartement where ville_appart like :mot or statut_appart like :mot or prix_appart like :mot";
            $donnees = array(":mot" => "%" . $mot . "%");
            $select = $this->unPDO->prepare($requete);
            $select->execute($donnees);
            $appartements = $select->fetchAll();
            return $appartements;
        } else {
            return null;
        }
    }
    public function FiltreLocation_index($mot_index, $statut, $prixMax, $prixMin)
    {
        if ($this->unPDO != null) {
            $requete = "SELECT * from appartement where ville_appart like :mot_index and statut_appart like :statut OR (prix_appart BETWEEN :prixMin and :prixMax)";
            $donnees = array(
                ":mot_index" => "%" . $mot_index . "%",
                ":statut" => "%" . $statut . "%",
                ":prixMax" => $prixMax,
                ":prixMin" => $prixMin
            );
            $select = $this->unPDO->prepare($requete);
            $select->execute($donnees);
            $appartements = $select->fetchAll();
            return $appartements;
        } else {
            return null;
        }
    }
    public function selectReservationLocataire($id_user)
    {
        if ($this->unPDO != null) {
            $request = "select * from reservation where id_user = :id_user";
            $donnees = array(":id_user" => $id_user);

            $select = $this->unPDO->prepare($request);
            $select->execute($donnees);
            $reservations = $select->fetchAll();
            return $reservations;
        }
    }

    public function deleteReservation($id_reservation)
    {
        if ($this->unPDO != null) {
            $request = "DELETE from reservation where id_reservation = :id_reservation";
            $donnees = array(":id_reservation" => $id_reservation);

            $select = $this->unPDO->prepare($request);
            $select->execute($donnees);
            $delete = $select->fetch();
            return $delete;
        }
    }

    public function selectReservationAppartement($id_user)
    {
        if ($this->unPDO != null) {
            $request = "select * from appartement as a LEFT JOIN reservation as r ON a.id_appart = r.id_appart WHERE r.id_user =:id_user";
            $donnees = array(":id_user" => $id_user);

            $select = $this->unPDO->prepare($request);
            $select->execute($donnees);
            $appartement = $select->fetchAll();
            return $appartement;
        }
    }
    public function selectWhereImage($id_appart)
    {
        if ($this->unPDO != null) {
            $request = "select * from images where id_appart =:id_appart ";
            $select = $this->unPDO->prepare($request);
            $select->bindValue(':id_appart', $id_appart, PDO::PARAM_INT);
            $select->execute();
            $image = $select->fetchAll();
            return $image;
        }
    }

    public function selectWhereAtout($id_appart)
    {
        if ($this->unPDO != null) {
            $request = "select * from atouts where id_appart =:id_appart ";
            $select = $this->unPDO->prepare($request);
            $select->bindValue(':id_appart', $id_appart, PDO::PARAM_INT);
            $select->execute();
            $atouts = $select->fetchAll();
            return $atouts;
        }
    }


    /*-----------------DASHBORD-------------------------- */
    //On fais une fonction qui récupère le nombre total des contrats pour un propriétaire
    public function dashBordContrat($id_user)
    {
        if ($this->unPDO != null) {
            $request = "select count(id_contrat) from contrat WHERE id_user = :id_user";
            $select = $this->unPDO->prepare($request);
            $select->bindValue(':id_user', $id_user, PDO::PARAM_INT);
            $select->execute();
            $contrats = $select->fetchColumn();
            return $contrats;
        } else {
            return null;
        }
    }
    //On fait une fonction qui trouve le moi exacte du dernier contrat en cours
    public function dashBordContrat_last($id_user)
    {
        if ($this->unPDO != null) {
            $request = "SELECT MONTH(date_sign_contrat) FROM contrat WHERE id_user =:id_user AND date_sign_contrat = (SELECT MAX(date_sign_contrat)  FROM contrat  WHERE id_user =:id_user)";
            $select = $this->unPDO->prepare($request);
            $select->bindValue(':id_user', $id_user, PDO::PARAM_INT);
            $select->execute();
            $mois = $select->fetchColumn();
            return $mois;
        } else {
            return null;
        }
    }
    /*Affiche les factures en attentes*/
    public function dashBordFacture_wait()
    {
        if ($this->unPDO != null) {
            $request = "select count(id_facture) from facture Inner join contrat on facture.id_facture= contrat.id_contrat where facture.statut_facture ='En attente'";
            $select = $this->unPDO->prepare($request);
            $select->execute();
            $factures_wait = $select->fetchColumn();
            return $factures_wait;
        } else {
            return null;
        }
    }

    /*Afficher le revenue par mois */
    public function dashBordRevenu_month($id_user)
    {
        if ($this->unPDO != null) {
            $request = "CALL afficher_montant_factures_par_mois(:id_user)";
            $select = $this->unPDO->prepare($request);
            $select->bindValue(':id_user', $id_user, PDO::PARAM_INT);
            $select->execute();
            $revenu = $select->fetchColumn(1);
            return $revenu;
        } else {
            return null;
        }
    }
    /*Afficher le revenue */
    public function dashBordRevenu($id_user)
    {
        if ($this->unPDO != null) {
            $request = "CALL afficher_montant_factures(:id_user)";
            $select = $this->unPDO->prepare($request);
            $select->bindValue(':id_user', $id_user, PDO::PARAM_INT);
            $select->execute();
            $revenus = $select->fetchColumn(1);
            return $revenus;
        } else {
            return null;
        }
    }
    /*Afficher le nombre de locataire */
    // public function dashBordNbLocataire($id_user)
    // {
    //     if ($this->unPDO != null) {
    //         $request = "CALL total_locataire(:id_user);";
    //         $select = $this->unPDO->prepare($request);
    //         $select->bindValue(':id_user', $id_user, PDO::PARAM_INT);
    //         $select->execute();
    //         $nbLocataire = $select->fetch();
    //         return $nbLocataire;
    //     } else {
    //         return null;
    //     }
    // }

    /*Afficher le nombre de appartements */
    public function dashBordNbAppartement($id_user)
    {
        if ($this->unPDO != null) {
            $request = "CALL total_appartement(:id_user);";
            $select = $this->unPDO->prepare($request);
            $select->bindValue(':id_user', $id_user, PDO::PARAM_INT);
            $select->execute();
            $nbAppartement = $select->fetchColumn();
            return $nbAppartement;
        } else {
            return null;
        }
    }


    /*********************AUTOMATIME LOCATAIRE */
    
}
