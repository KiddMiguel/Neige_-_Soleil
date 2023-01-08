drop database if exists neige_soleil;
create database neige_soleil;
use neige_soleil;

create table user (
    id_user int(5) NOT NULL auto_increment, 
   CONSTRAINT PRODUIT_PK PRIMARY KEY (id_user)
);

create table locataire (
    id_user int(5) NOT NULL auto_increment, 
    civilite_locataire enum ("Mr", "Mme"),
    nom_locataire varchar(50),
    prenom_locataire varchar(50), 
    email_locataire varchar(100),
    mdp_locataire varchar(100),
    tel_locataire varchar(50),
    adresse_locataire varchar(50),
    cp_locataire varchar(50),
    nb_reservations int(5),
    id_appart int(5),
    id_reservation int(5),
    FOREIGN key (id_reservation) REFERENCES reservation(id_reservation),
    FOREIGN key (id_appart) REFERENCES appartement(id_appart),
    CONSTRAINT locataire_id PRIMARY KEY (id_user),
    FOREIGN KEY (id_user) REFERENCES user ON DELETE CASCADE
    
);

create table proprietaire (
    id_user int(5) NOT NULL auto_increment, 
    civilite_proprio enum ("Mr", "Mme"),
    nom_proprio varchar(50) not null,
    prenom_proprio varchar(50) not null,
    email_proprio varchar(50) not null,
    mdp_proprio varchar(50),
    tel_proprio varchar(50),
    adresse_proprio varchar(50),
    cp_proprio varchar(50),
    id_contrat int (5),
    id_appart int(5),
    foreign key (id_contrat) references contrat(id_contrat),
    FOREIGN key (id_appart) REFERENCES appartement(id_appart),
    CONSTRAINT proprio_id PRIMARY KEY (id_user),
    FOREIGN KEY (id_user) REFERENCES user ON DELETE CASCADE
);

create table contrat (
    id_contrat int(5) not null auto_increment,
    statut_contrat varchar(50),
    date_debut_contrat date,
    date_fin_contrat date,
    date_sign_contrat date,
    id_user int(5), 
    id_appart int(5),
    primary key (id_contrat),
    FOREIGN key (id_appart) REFERENCES appartement(id_appart),
    foreign key (id_user) references proprietaire(id_user)
); 

CREATE Table materiel_proprio (
    id_materiel_proprio int(5) not null AUTO_INCREMENT,
    intitule_materiel_proprio VARCHAR (50), 
    nb_materiel_proprio INT(5),
    prix_materiel_proprio VARCHAR(50),
    type_materiel_proprio VARCHAR (50),
    staut_materiel_proprio VARCHAR (50),
    id_user int(5),
    id_appart int(5),
    primary key (id_materiel_proprio), 
    FOREIGN key (id_appart) REFERENCES appartement(id_appart),
    FOREIGN key (id_user) REFERENCES proprietaire(id_user)
); 

CREATE table reservation (
    id_reservation int (5) not null AUTO_INCREMENT,
    statut_reservation int(5),
    date_reservation date,
    date_debut_reservation date,
    prix_reservation VARCHAR (50),
    nb_personnes int(5),
    id_user int(5), 
    id_materiel_proprio int(5),
    id_appart int(5),
    primary key (id_reservation),
    FOREIGN key (id_user) REFERENCES locataire(id_user), 
    FOREIGN key (id_materiel_proprio) REFERENCES materiel_proprio (id_materiel_proprio),
    FOREIGN key (id_appart) REFERENCES appartement(id_appart)
);

CREATE table appartement (
    id_appart int(5) not null AUTO_INCREMENT,
    intitule_appart VARCHAR(100),
    adresse_appart VARCHAR (50),
    cp_appart VARCHAR (50),
    adresse_appart varchar (255),
    description_appart VARCHAR(255),
    photo_appart varchar(255),
    type_appart VARCHAR (50),
    statut VARCHAR(50),
    surface_appart VARCHAR (50),
    atout_appart VARCHAR (50),
    image_appart VARCHAR (50),
    id_reservation INT(5),
    id_contrat int(5),
    id_user INT(5),
    id_materiel_proprio int(5),
    PRIMARY key (id_appart),
    FOREIGN key (id_reservation) REFERENCES reservation(id_reservation),
    FOREIGN key (id_contrat) REFERENCES contrat(id_contrat),
    FOREIGN key (id_user) REFERENCES user(idt_user),
    FOREIGN key (id_materiel_proprio) REFERENCES materiel_proprio(id_materiel_proprio)
);

CREATE TABLE equipement_appart (
    id_equip_appart int(5) not null AUTO_INCREMENT,
    intitule_equip_appart VARCHAR(50),
    nb_equi_appart INT(5),
    prix_equip_appart int(50),
    type_equip_appart VARCHAR(50),
    statut_equip_appart VARCHAR(50),
    id_appart int(5),
    primary key(id_equip_appart),
    FOREIGN key (id_appart) REFERENCES appartement(id_appart)
    );
CREATE Table agence(
    id_agence INT(10) NOT NULL AUTO_INCREMENT,
    intitule_agence VARCHAR(50),
    adresse_agence varchar(50),
    cp_agence VARCHAR(50),
    email_agence VARCHAR(50),
    tel_agence VARCHAR(50),
    id_contrat INT(5),
    id_appart int(5),
    PRIMARY key (id_agence),
    FOREIGN key (id_contrat) REFERENCES contrat(id_agence),
    FOREIGN key (id_appart) REFERENCES appartement(id_appart)
);

CREATE TABLE employe (
    id_employe INT(5) NOT NULL AUTO_INCREMENT,
    civilite_employe enum ("Mr", "Mme"),
    nom_employe VARCHAR(50),
    prenom_employe VARCHAR(50),
    poste_employe VARCHAR(50),
    email_employe VARCHAR(50),
    id_agence int(5),
    tel VARCHAR(50),
    PRIMARY key (id_employe),
    FOREIGN key (id_agence) REFERENCES agence (id_agence)
);
=======

/*On va  créer un trigger qui insert automatiquement l'id dans la table user lors de ll'insertion dans une table enfant.*/
drop trigger if exists insert_user_locataire;
delimiter //
CREATE trigger insert_user_locataire
after insert on locataire
for each ROW
BEGIN
    insert into user (id_user) values (new.id_user);

    end //
delimiter ;


drop trigger if exists insert_user_proprio;
delimiter //
CREATE trigger insert_user_proprio
after insert on proprietaire
for each ROW
BEGIN
    insert into user (id_user) values (new.id_user);

    end //
delimiter ;

/*Creer unn trigger qui supprime */

drop trigger if exists delete_user;
delimiter //
create trigger delete_user
after delete on USER
for each row 
BEGIN
    DELETE from locataire where id_user = old.id_user;
    DELETE from proprietaire where id_user = old.id_user;
end //
delimiter ;


/*Insertion*/
/*
INSERT INTO user (id_user) VALUES (1), (2), (3);
*/

INSERT INTO locataire (id_locataire, id_user, civilite_locataire, nom_locataire, prenom_locataire, email_locataire, mdp_locataire, tel_locataire, adresse_locataire, cp_locataire, nb_reservations, id_appart, id_reservation) 
VALUES 
(1, 1, 'Mme', 'Dupont', 'Marie', 'marie.dupont@gmail.com', 'motdepasse', '0612345678', '1 rue de la Paix', '75000', 0, 1, 1),
(2, 2, 'Mme', 'Durand', 'Sophie', 'sophie.durand@gmail.com', 'motdepasse', '0698765432', '2 rue de la Liberté', '75000', 0, 2, 2),
(3, 3, 'Mr', 'Martin', 'Luc', 'luc.martin@gmail.com', 'motdepasse', '0698765432', '3 rue de l Egalité', '75000', 0, 3, 3);



INSERT INTO proprietaire (id_proprio, id_user, civilite_proprio, nom_proprio, prenom_proprio, email_proprio, mdp_proprio, tel_proprio, adresse_proprio, cp_proprio, id_contrat, id_appart) 
VALUES
(4, 4, 'Mme', 'Lefebvre', 'Anne', 'anne.lefebvre@gmail.com', 'motdepasse', '0612345678', '4 rue des Fleurs', '75000', 1, 1),
(5, 5, 'Mme', 'Garcia', 'Emilie', 'emilie.garcia@gmail.com', 'motdepasse', '0698765432', '5 rue des Arbres', '75000', 2, 2),
(6, 6, 'Mr', 'Dupuis', 'Thomas', 'thomas.dupuis@gmail.com', 'motdepasse', '0698765432', '6 rue des Oiseaux', '75000', 3, 3);

INSERT INTO contrat (id_contrat, statut_contrat, date_debut_contrat, date_fin_contrat, date_sign_contrat, id_user, id_appart) 
VALUES
(1, 'actif', '2022-01-01', '2022-12-31', '2022-01-15', 1, 1),
(2, 'actif', '2022-01-01', '2022-12-31', '2022-01-15', 2, 2),
(3, 'actif', '2022-01-01', '2022-12-31', '2022-01-15', 3, 3);

INSERT INTO materiel_proprio (id_materiel_proprio, intitule_materiel_proprio, nb_materiel_proprio, prix_materiel_proprio, type_materiel_proprio, staut_materiel_proprio, id_user, id_appart)
VALUES
(1, 'Poussette', 2, '30€/jour', 'poussette', 'disponible', 1, 1),
(2, 'Lit parapluie', 3, '15€/jour', 'lit parapluie', 'disponible', 2, 2),
(3, 'Chaise haute', 2, '10€/jour', 'chaise haute', 'disponible', 3, 3);

INSERT INTO reservation (id_reservation, statut_reservation, date_reservation, date_debut_reservation, prix_reservation, nb_personnes, id_user, id_appart) 
VALUES
(1, "Réservé", '2022-01-01', '2022-01-15', '500€', 2, 1, 1),
(2, "Non réservé", '2022-01-01', '2022-01-15', '700€', 4, 2, 2),
(3, "En cours", '2022-01-01', '2022-01-15', '600€', 3, 3, 3);

INSERT INTO appartement (id_appart, statut_appart, prix_appart, intitule_appart, ville_appart, cp_appart, adresse_appart, description_appart, photo_appart, type_appart, superficie_appart, nb_chambres, nb_lits, nb_salles_bain, capacite_appart, id_proprio)
VALUES
(1, "disponible", "800€/semaine","Villa lourde", "Paris", "75000", "7 rue de la Plage", "Appartement en bord de mer avec vue imprenable sur l'océan", "photo1.jpg", "T2", 50, 1, 2, 1, 4, 1),
(2, "disponible", "1000€/semaine","Maison tortue", "Lyon", "69000", "8 rue de la Montagne", "Chalet au pied des pistes de ski avec sauna et Jacuzzi", "photo2.jpg", "T3", 70, 2, 4, 2, 6, 2),
(3, "disponible", "900€/semaine", "Appartement haute coline","Marseille", "13000", "9 rue de la Forêt", "Villa avec piscine privée et terrasse ensoleillée", "photo3.jpg", "T4", 100, 3, 6, 2, 8, 3);
