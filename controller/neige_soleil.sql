drop database if exists neige_soleil;
create database neige_soleil;
use neige_soleil;

create table user (
    id_user int(5) NOT NULL auto_increment,
    PRIMARY KEY (id_user)
); 

create table locataire (
    id_user int(5) not null AUTO_INCREMENT, 
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
    FOREIGN key (id_user) REFERENCES user(id_user) on delete cascade,
    FOREIGN key (id_appart) REFERENCES appartement(id_appart),
    FOREIGN KEY (id_reservation) REFERENCES reservation(reservation),
    PRIMARY KEY (id_user)
    
);

create table proprietaire (
    id_user int(5) AUTO_INCREMENT, 
    civilite_proprio enum ("Mr", "Mme"),
    nom_proprio varchar(50) ,
    prenom_proprio varchar(50),
    statut_proprio varchar(50),
    email_proprio varchar(50),
    mdp_proprio varchar(50),
    tel_proprio varchar(50),
    adresse_proprio varchar(50),
    cp_proprio varchar(50),
    ville_proprio varchar(50),
    pays_proprio varchar(50),
    code_adherent varchar(50),
    id_contrat int (5),
    id_appart int(5),
     FOREIGN key (id_user) REFERENCES user(id_user) on delete cascade,
    foreign key (id_contrat) references contrat(id_contrat),
    FOREIGN key (id_appart) REFERENCES appartement(id_appart),
    PRIMARY KEY (id_user)
);

create table contrat (
    id_contrat int(5) not null auto_increment,
    statut_contrat varchar(50),
    date_debut_contrat date,
    date_fin_contrat date,
    date_sign_contrat date,
    id_user int(5), 
    id_appart int(5),
    FOREIGN key (id_appart) REFERENCES appartement(id_appart),
    foreign key (id_user) references proprietaire(id_user),
    primary key (id_contrat)
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
    FOREIGN key (id_appart) REFERENCES appartement(id_appart),
    FOREIGN key (id_user) REFERENCES proprietaire(id_user),
    primary key (id_materiel_proprio)
); 

CREATE table reservation (
    id_reservation int (5) not null AUTO_INCREMENT,
    statut_reservation VARCHAR(50),
    date_reservation date,
    date_debut_reservation date,
    prix_reservation VARCHAR (50),
    nb_personnes int(5),
    id_user int(5), 
    id_materiel_proprio int(5),
    id_appart int(5),
    FOREIGN key (id_user) REFERENCES user(id_user), 
    FOREIGN key (id_materiel_proprio) REFERENCES materiel_proprio (id_materiel_proprio),
    FOREIGN key (id_appart) REFERENCES appartement(id_appart),
    primary key (id_reservation)
);

CREATE table appartement (
    id_appart int(5) not null AUTO_INCREMENT,
    statut_appart VARCHAR (50),
    prix_appart VARCHAR (100),
    intitule_appart VARCHAR(100),
    ville_appart VARCHAR (50),
    cp_appart VARCHAR (50),
    adresse_appart varchar (255),
    description_appart VARCHAR(255),
    type_appart VARCHAR (50),
    superficie_appart VARCHAR (50),
    nb_chambres int (5),
    nb_lits int(5),
    nb_salles_bain int(5),
    capacite_appart int(5),
    atout_appart VARCHAR (50),
    image_appart VARCHAR (50),
    id_reservation INT(5),
    id_contrat int(5),
    id_user INT(5),
    id_proprio int(5),
    id_materiel_proprio int(5),
    FOREIGN key (id_reservation) REFERENCES reservation(id_reservation),
    FOREIGN key (id_contrat) REFERENCES contrat(id_contrat),
    FOREIGN key (id_user) REFERENCES user(id_user),
    FOREIGN key (id_proprio) REFERENCES proprietaire(id_proprio),
    FOREIGN key (id_materiel_proprio) REFERENCES materiel_proprio(id_materiel_proprio),
    PRIMARY key (id_appart)
);

CREATE TABLE equipement_appart (
    id_equip_appart int(5) not null AUTO_INCREMENT,
    intitule_equip_appart VARCHAR(50),
    nb_equi_appart INT(5),
    prix_equip_appart int(50),
    type_equip_appart VARCHAR(50),
    statut_equip_appart VARCHAR(50),
    id_appart int(5),
    FOREIGN key (id_appart) REFERENCES appartement(id_appart),
    primary key(id_equip_appart)
    );

Create table images (
    id_img int(10) not null AUTO_INCREMENT,
    nom_img varchar(100) not null,
    desc_img varchar(100) not null,
    id_appart int(10),
    foreign key (id_appart) references images(id_appart),
    primary key (id_img)
);

-- On va  créer un trigger qui insert automatiquement l'id dans la table user lors de ll'insertion dans une table enfant.*/
drop trigger if exists insert_locataire;
delimiter //
CREATE trigger insert_locataire
before insert on locataire
for each ROW
BEGIN
    declare nb_ligne int;
    SELECT count(*) into nb_ligne from user where id_user = new.id_user;
    if nb_ligne = 0 then
        insert into user values (new.id_user);
    end if;
    end //
delimiter ;

-- Déclencher insert proprio 
drop trigger if exists insert_proprio;
delimiter //
CREATE trigger insert_proprio
before insert on proprietaire
for each ROW
BEGIN
    declare nb_ligne int;
    SELECT count(*) into nb_ligne from user where id_user = new.id_user;
    if nb_ligne = 0 then
        insert into user values (new.id_user);
    end if;
    end //
delimiter ;

-- /*Creer unn trigger qui supprime */

-- drop trigger if exists delete_user;
-- delimiter //
-- create trigger delete_user
-- after delete on USER
-- for each row 
-- BEGIN
--     DELETE from locataire where id_user = old.id_user;
--     DELETE from proprietaire where id_user = old.id_user;
-- end //
-- delimiter ;


/*Insertion
INSERT INTO user (id_user) VALUES (1), (2), (3);*/

INSERT INTO locataire 
VALUES 
(1, 'Mme', 'Dupont', 'Marie', 'marie.dupont@gmail.com', 'motdepasse', '0612345678', '1 rue de la Paix', '75000', 0, 1, 1),
(2, 'Mme', 'Durand', 'Sophie', 'sophie.durand@gmail.com', 'motdepasse', '0698765432', '2 rue de la Liberté', '75000', 0, 2, 2),
(3, 'Mr', 'Martin', 'Luc', 'luc.martin@gmail.com', 'motdepasse', '0698765432', '3 rue de l Egalité', '75000', 0, 3, 3);



INSERT INTO proprietaire 
VALUES
( 4, 'Mme', 'Lefebvre', 'Anne','Louer particulier', 'anne.lefebvre@gmail.com', 'motdepasse', '0612345678', '4 rue des Fleurs', '75000','Paris','France','KI78545', 1, 1),
( 5, 'Mme', 'Garcia', 'Emilie', 'Société', 'emilie.garcia@gmail.com', 'motdepasse', '0698765432', '5 rue des Arbres', '75000','Nanterre','Espagne','KI78565', 2, 2),
( 6, 'Mr', 'Dupuis', 'Thomas','Louer particulier', 'thomas.dupuis@gmail.com', 'motdepasse', '0698765432', '6 rue des Oiseaux', '75000','Nanterre','France','KH8565', 3, 3);

INSERT INTO contrat
VALUES
(1, 'actif', '2022-01-01', '2022-12-31', '2022-01-15', 1, 1),
(2, 'actif', '2022-01-01', '2022-12-31', '2022-01-15', 2, 2),
(3, 'actif', '2022-01-01', '2022-12-31', '2022-01-15', 3, 3);

INSERT INTO materiel_proprio 
VALUES
(1, 'Poussette', 2, '30€/jour', 'poussette', 'disponible', 1, 1),
(2, 'Lit parapluie', 3, '15€/jour', 'lit parapluie', 'disponible', 2, 2),
(3, 'Chaise haute', 2, '10€/jour', 'chaise haute', 'disponible', 3, 3);

INSERT INTO reservation 
VALUES
(1, "Réservé", '2022-01-01', '2022-01-15', '500€', 2, 1, 1,1),
(2, "Non réservé", '2022-01-01', '2022-01-15', '700€', 4, 2, 2,1),
(3, "En cours", '2022-01-01', '2022-01-15', '600€', 3, 3, 3, 1);

INSERT INTO appartement 
VALUES
(1, "disponible", "800€/semaine","Nom de l'appart", "Paris", "75000", "7 rue de la Plage", "Appartement en bord de mer avec vue imprenable sur l'océan", "T2", 50, 1, 2, 1, 4, "Machine à laver", "image",1,1,2,4,1),
(2, "disponible", "1000€/semaine", "Nom de l'appart","Lyon", "69000", "8 rue de la Montagne", "Chalet au pied des pistes de ski avec sauna et Jacuzzi", "T3", 70, 2, 4, 2, 6, "Parking","image",1,1,2,5,1),
(3, "disponible", "900€/semaine","Nom de l'appart", "Marseille", "13000", "9 rue de la Forêt", "Villa avec piscine privée et terrasse ensoleillée", "T4", 100, 3, 6, 2, 8, "Terrasse", "image",2,1,2,6,1);

INSERT INTO images 
VALUES (1,'image', 'description_image1', 1),
       (2,'image', 'description_image2', 1),
       (3,'nom_image24','description_image4', 2),
       (4,'nom_image3', 'description_image3', 1);
