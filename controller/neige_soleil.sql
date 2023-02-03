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
    statut_reservation enum ("En cours réservation", "Réservé"),
    date_debut_reservation date,
    date_fin_reservation date,
    prix_reservation VARCHAR (50),
    nb_personnes int(5),
    id_user int(5), 
    id_appart int(5),
    id_materiel_proprio int(5),
    FOREIGN key (id_user) REFERENCES user(id_user), 
    FOREIGN key (id_materiel_proprio) REFERENCES materiel_proprio (id_materiel_proprio),
    FOREIGN key (id_appart) REFERENCES appartement(id_appart),
    primary key (id_reservation)
);
CREATE table demande (
    id_demande int (5) not null AUTO_INCREMENT,
    statut_demande enum ("En cours", "Valider"),
    date_demande date,
    id_user int(5), 
    id_appart int(5),
    FOREIGN key (id_user) REFERENCES user(id_user), 
    FOREIGN key (id_appart) REFERENCES appartement(id_appart),
    primary key (id_demande)
);

CREATE table appartement (
    id_appart int(5) not null AUTO_INCREMENT,
    statut_appart VARCHAR (50),
    prix_appart VARCHAR (100),
    intitule_appart VARCHAR(100),
    ville_appart VARCHAR (50),
    cp_appart VARCHAR (50),
    adresse_appart varchar (255),
    description_appart VARCHAR(500),
    type_appart VARCHAR (50),
    superficie_appart VARCHAR (50),
    nb_chambres int (5),
    nb_lits int(5),
    nb_salles_bain int(5),
    capacite_appart int(5),
    atout_appart1 VARCHAR (50),
    atout_appart2 VARCHAR (50),
    atout_appart3 VARCHAR (50),
    image_1 VARCHAR (50),
    image_2 VARCHAR (50),
    image_3 VARCHAR (50),
    image_4 VARCHAR (50),
    image_5 VARCHAR (50),
    id_reservation INT(5),
    id_contrat int(5),
    id_user INT(5),
    id_materiel_proprio int(5),
    FOREIGN key (id_reservation) REFERENCES reservation(id_reservation),
    FOREIGN key (id_contrat) REFERENCES contrat(id_contrat),
    FOREIGN key (id_user) REFERENCES user(id_user),
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
    type_img varchar(100) not null,
    id_appart int(10),
    foreign key (id_appart) references appartement(id_appart),
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

drop trigger if exists add_demande;
delimiter //
create trigger add_demande
after insert on appartement
FOR EACH row
    begin
        insert into demande (id_demande,statut_demande, date_demande, id_user, id_appart)
        VALUES (NULL, "En cours", now(), new.id_user, new.id_appart);
    end //
delimiter ;



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
(1, "Réservé",  '2022-01-15','2022-02-01', '500', 2, 1, 1,1),
(2, "Réservé", '2022-06-11','2022-12-25',  '700', 4, 2, 2,1),
(3, "Réservé",  '2022-03-26','2022-03-05', '600', 3, 3, 3, 1);

INSERT INTO appartement 
VALUES
(1,"Disponible", "1000","Chalet de luxe à la montagne", "Paris", "75000", "7 rue de la Plage", "Profitez d'un séjour inoubliable dans notre chalet de luxe, situé dans les montagnes enneigées. Avec une vue imprenable sur les sommets environnants, des équipements haut de gamme et une proximité des pistes de ski, c'est l'endroit idéal pour les vacances d'hiver. Le chalet comprend 3 chambres, 2 salles de bains, un salon confortable avec cheminée, une cuisine entièrement équipée et un balcon avec vue sur les montagnes.", "T2", 100, 1, 2, 1, 5, "Machine à laver","Garage","Parking", "A-1.jpg" , "A-2.jpg", "A-3.jpg", "A-4.jpg", "A-5.jpg",null,null,null,null),
(2,"Disponible", "1000", "Nom de l'appart","Lyon", "69000", "8 rue de la Montagne", "Chalet au pied des pistes de ski avec sauna et Jacuzzi", "T3", 70, 2, 4, 2, 6, "Parking","Balcon","Piscine","B-1.jpg" ,"B-2.jpg" ,"B-2.jpg" ,"B-3.jpg" ,"B-4.jpg" ,1,1,2,1),
(3,"Disponible", "1000", "Nom de l'appart","Lyon", "69000", "8 rue de la Montagne", "Chalet au pied des pistes de ski avec sauna et Jacuzzi", "T3", 70, 2, 4, 2, 6, "Parking","Balcon","Piscine","C-1.jpg" , "C-2.jpg","C-3.jpg", "C-4.jpg", "C-5.jpg",1,1,2,1),
(4,"Disponible", "1000", "Nom de l'appart","Lyon", "69000", "8 rue de la Montagne", "Chalet au pied des pistes de ski avec sauna et Jacuzzi", "T3", 70, 2, 4, 2, 6, "Parking","Balcon","Piscine","E-1.jpg", "E-2.jpg", "E-3.jpg", "E-4.jpg", "E-5.jpg",1,1,2,1),
(5,"Non-disponible", "1000", "Nom de l'appart","Lyon", "69000", "8 rue de la Montagne", "Chalet au pied des pistes de ski avec sauna et Jacuzzi", "T3", 70, 2, 4, 2, 6, "Parking","Balcon","Piscine","D-1.jpg", "D-2.jpg", "D-3.jpg", "D-4.jpg", "D-5.jpg",1,1,2,1),
(6,"Non-disponible", "1000", "Nom de l'appart","Lyon", "69000", "8 rue de la Montagne", "Chalet au pied des pistes de ski avec sauna et Jacuzzi", "T3", 70, 2, 4, 2, 6, "Parking","Balcon","Piscine","G-1.jpg", "G-2.jpg", "G-3.jpg", "G-4.jpg", "G-5.jpg",1,1,2,1),
(7,"Non-disponible", "1000", "Nom de l'appart","Lyon", "69000", "8 rue de la Montagne", "Chalet au pied des pistes de ski avec sauna et Jacuzzi", "T3", 70, 2, 4, 2, 6, "Parking","Balcon","Piscine","D-1.jpg", "D-2.jpg", "D-3.jpg", "D-4.jpg", "D-5.jpg",1,1,2,1),
(8,"Disponible", "1000", "Nom de l'appart","Lyon", "69000", "8 rue de la Montagne", "Chalet au pied des pistes de ski avec sauna et Jacuzzi", "T3", 70, 2, 4, 2, 6, "Parking","Balcon","Piscine","H-1.jpg","H-2.jpg","H-3.jpg","H-4.jpg","H-5.jpg",1,1,2,1),
(9,"Non-disponible", "1000", "Nom de l'appart","Lyon", "69000", "8 rue de la Montagne", "Chalet au pied des pistes de ski avec sauna et Jacuzzi", "T3", 70, 2, 4, 2, 6, "Parking","Balcon","Piscine","I-1.jpg","I-2.jpg", "I-3.jpg", "I-4.jpg", "I-5.jpg",1,1,2,1),
(10,"Disponible", "1000", "Nom de l'appart","Lyon", "69000", "8 rue de la Montagne", "Chalet au pied des pistes de ski avec sauna et Jacuzzi", "T3", 70, 2, 4, 2, 6, "Parking","Balcon","Piscine","J-1.jpg","J-2.jpg","J-3.jpg","J-4.jpg","J-5.jpg",1,1,2,1),
(11,"Non-disponible", "1000", "Nom de l'appart","Lyon", "69000", "8 rue de la Montagne", "Chalet au pied des pistes de ski avec sauna et Jacuzzi", "T3", 70, 2, 4, 2, 6, "Parking","Balcon","Piscine","K-1.jpg","K-2.jpg","K-3.jpg","K-4.jpg","K-5.jpg",1,2,5,1),
(12,"Disponible", "1000", "Nom de l'appart","Lyon", "69000", "8 rue de la Montagne", "Chalet au pied des pistes de ski avec sauna et Jacuzzi", "T3", 70, 2, 4, 2, 6, "Parking","Balcon","Piscine","F-1.jpg","F-2.jpg","F-3.jpg","F-4.jpg","F-5.jpg",1,1,2,1);


INSERT INTO images 
VALUES (1,'A-1', 'jpg', 1),
       (2,'A-2', 'jpg', 1),
       (3,'A-3','jpg', 1),
       (4,'A-4','jpg', 1),
       (5,'A-5','jpg', 1),
       (6,'B-1', 'jpg', 1),
       (7,'B-2', 'jpg', 2),
       (8,'B-3', 'jpg', 2),
       (9,'B-4', 'jpg', 2),
       (10,'B-5', 'jpg', 2),
       (11,'C-1', 'jpg', 3),
       (12,'C-2', 'jpg', 3),
       (13,'C-3', 'jpg', 3),
       (14,'C-4', 'jpg', 3),
       (15,'C-5', 'jpg', 3),
       (16,'D-1', 'jpg', 4),
       (17,'D-2', 'jpg', 4),
       (18,'D-3', 'jpg', 4),
       (19,'D-4', 'jpg', 4),
       (20,'D-5', 'jpg', 4),
       (21,'E-1', 'jpg', 5),
       (22,'E-2', 'jpg', 5),
       (23,'E-3', 'jpg', 5),
       (24,'E-4', 'jpg', 5),
       (25,'E-5', 'jpg', 5),
       (26,'F-1', 'jpg', 6),
       (27,'F-2', 'jpg', 6),
       (28,'F-3', 'jpg', 6),
       (29,'F-4', 'jpg', 6),
       (30,'F-5', 'jpg', 6),
       (31,'G-1', 'jpg', 7),
       (32,'G-2', 'jpg', 7),
       (33,'G-3', 'jpg', 7),
       (34,'G-4', 'jpg', 7),
       (35,'G-5', 'jpg', 7),
       (36,'H-1', 'jpg', 7),
       (37,'H-2', 'jpg', 7),
       (38,'H-3', 'jpg', 7),
       (39,'H-4', 'jpg', 7),
       (40,'H-5', 'jpg', 7);
