drop database if exists neige_soleil;
create database neige_soleil;
use neige_soleil;
SET GLOBAL event_scheduler = ON;

create table admin(
    id_admin int(11) not null AUTO_INCREMENT,
    nom varchar(255) not null,
    prenom varchar(255) not null,
    email varchar(255),
    mdp varchar(255) not null,
    adress VARCHAR(255), 
    primary key (id_admin)
);

insert into admin values (null, 'Miguel', 'Kidd','miguel@gmail.com', 'admin', '20 Rue Rosa Luxemburg St Pierre du perray');
create table user (
    id_user int(5) NOT NULL auto_increment,
    nom_user varchar(255),
    prenom_user varchar(255),
    email_user varchar(255),
    PRIMARY KEY (id_user)
); 
CREATE table appartement (
    id_appart int(5) not null AUTO_INCREMENT,
    statut_appart enum ("Disponible", "En location", "En attente"),
    prix_appart FLOAT,
    intitule_appart VARCHAR(100),
    ville_appart VARCHAR (50),
    cp_appart VARCHAR (50),
    adresse_appart varchar (255),
    description_appart VARCHAR(5000),
    type_appart VARCHAR (50),
    superficie_appart VARCHAR (50),
    image VARCHAR (50) NULL,
    nb_chambre int (5),
    nb_cuisine int(5),
    nb_salon int(5),
    nb_salle_bain int(5),
    nb_piece int(5),
    id_user INT(5),
    FOREIGN key (id_user) REFERENCES user(id_user),
    PRIMARY key (id_appart)
);

CREATE TABLE equipement_appart (
    id_equip_appart int(5) not null AUTO_INCREMENT,
    intitule_equip_appart VARCHAR(50),
    nb_equi_appart INT(5),
    prix_equip_appart FLOAT,
    type_equip_appart VARCHAR(50),
    statut_equip_appart VARCHAR(50),
    id_appart int(5),
    FOREIGN key (id_appart) REFERENCES appartement(id_appart),
    primary key(id_equip_appart)
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
create table contrat (
    id_contrat int(5) not null auto_increment,
    statut_contrat enum ("Résilier", "En cours"),
    date_debut_contrat date,
    date_fin_contrat date,
    date_sign_contrat date,
    id_user int(5), 
    id_appart int(5),
    FOREIGN key (id_appart) REFERENCES appartement(id_appart),
    foreign key (id_user) references user(id_user),
    primary key (id_contrat)
); 

CREATE table reservation (
    id_reservation int (5) not null AUTO_INCREMENT,
    statut_reservation VARCHAR(155),
    date_debut_reservation date,
    date_fin_reservation date,
    prix_reservation FLOAT,
    nb_personnes int(5),
    id_user int(5), 
    id_appart int(5),
    FOREIGN key (id_user) REFERENCES user(id_user), 
    FOREIGN key (id_appart) REFERENCES appartement(id_appart),
    primary key (id_reservation)
);
create table proprietaire (
    id_proprietaire int(5) not null auto_increment,
    id_user int(5), 
    civilite_proprio enum ("Mr", "Mme", "Autre"),
    nom_proprio varchar(50) ,
    prenom_proprio varchar(50),
    statut_proprio varchar(50),
    email_proprio varchar(50),
    mdp_proprio varchar(50) not null,
    tel_proprio varchar(50),
    adresse_proprio varchar(50),
    cp_proprio varchar(50),
    ville_proprio varchar(50),
    pays_proprio varchar(50),
    code_adherent varchar(50),
    id_contrat int (5),
    id_appart int(5),
    FOREIGN key (id_user) REFERENCES user(id_user),
    foreign key (id_contrat) references contrat(id_contrat),
    FOREIGN key (id_appart) REFERENCES appartement(id_appart),
    PRIMARY KEY (id_proprietaire)
);
create table locataire (
    id_locataire int(5) not null auto_increment,
    civilite_locataire enum ("Mr", "Mme", "Autre"),
    nom_locataire varchar(50),
    prenom_locataire varchar(50), 
    email_locataire varchar(100),
    mdp_locataire varchar(100) not null,
    tel_locataire varchar(50),
    adresse_locataire varchar(50),
    cp_locataire varchar(50),
    nb_reservations int(5),
    id_user int(5), 
    FOREIGN key (id_user) REFERENCES user(id_user),
    PRIMARY KEY (id_locataire)
    
);

CREATE TABLE question(
    id_question INT(5),
    intitule_question VARCHAR(100),
    reponse_question VARCHAR(100),
    id_user INT(5),
    Foreign Key (id_user) REFERENCES user(id_user),
    PRIMARY KEY(id_question)
);

CREATE TABLE statistique (
    id_statistique INT(5) NOT NULL AUTO_INCREMENT,
    id_locataire INT(5),
    id_appart INT(5),
    nb_reservations INT(5),
    prix_total_reservations FLOAT,
    revenu_total_locataire INT(10),
    FOREIGN KEY (id_locataire) REFERENCES locataire(id_locataire),
    FOREIGN KEY (id_appart) REFERENCES appartement(id_appart),
    PRIMARY KEY (id_statistique)
);

Create table images (
    id_img int(10) not null AUTO_INCREMENT,
    nom_img varchar(100) not null,
    type_img varchar(100) not null,
    id_appart int(10),
    foreign key (id_appart) references appartement(id_appart),
    primary key (id_img)
);

create table atouts(
    id_atout int(10) not null AUTO_INCREMENT,
    nom_atout varchar(100) not null, 
    id_appart int(5),
    Foreign Key (id_appart) REFERENCES appartement(id_appart),
    primary key (id_atout)
);

CREATE table reglement (
id_reglement int(5) not null auto_increment,
date_reglement date,
type_reglement enum ("Espèce", "Chèque", "Virement bancaire", "Carte bancaire"),
montant_reglement FLOAT,
id_contrat int(5),
FOREIGN key (id_contrat) REFERENCES contrat(id_contrat),
primary key (id_reglement)
);

CREATE table facture (
id_facture int(5) not null auto_increment,
date_facture date,
statut_facture enum ("En attente", "Payée"),
montant_facture FLOAT,
id_contrat int(5),
FOREIGN key (id_contrat) REFERENCES contrat(id_contrat),
primary key (id_facture)
);


/*TRIGGER QUI INSERT UN id_user automatiquement dans la table user et dans la table locataire*/
DROP TRIGGER IF EXISTS insert_locataire;
DELIMITER //
CREATE TRIGGER insert_locataire
BEFORE INSERT ON locataire
FOR EACH ROW
BEGIN
    DECLARE nb_ligne INT;
    SELECT COUNT(*) INTO nb_ligne FROM user WHERE id_user = NEW.id_user;
    IF nb_ligne = 0 THEN
        INSERT INTO user (nom_user, prenom_user, email_user) values (NEW.nom_locataire, NEW.prenom_locataire, NEW.email_locataire);
        SET NEW.id_user = LAST_INSERT_ID();
    END IF;
END //
DELIMITER ;

/*TRIGGER QUI INSERT UN id_user automatiquement dans la table user et dans la table proprietaire*/
DROP TRIGGER IF EXISTS insert_proprietaire;
DELIMITER //
CREATE TRIGGER insert_proprietaire
BEFORE INSERT ON proprietaire
FOR EACH ROW
BEGIN
    DECLARE nb_ligne INT;
    SELECT COUNT(*) INTO nb_ligne FROM user WHERE id_user = NEW.id_user;
    IF nb_ligne = 0 THEN
        INSERT INTO user (nom_user, prenom_user, email_user) values (NEW.nom_proprio, NEW.prenom_proprio, NEW.email_proprio);
        SET NEW.id_user = LAST_INSERT_ID();
    END IF;
END //
DELIMITER ;




/*TRIGGER QUI AJOUTER UNE DEMANDE après un insert dans appartement.*/
Drop trigger if exists add_demande;
delimiter //
create trigger add_demande
after insert on appartement
FOR EACH row
    begin
        insert into demande (id_demande,statut_demande, date_demande, id_user, id_appart)
        VALUES (NULL, "En cours", now(), new.id_user, new.id_appart);
    end //
delimiter ;

/*PROCEDURE QUI AFFICHE LES FACTURES PAR MOIS ET PAR ANNEE*/
/*Revenue du mois*/
Drop PROCEDURE if exists afficher_montant_factures_par_mois;
delimiter //
CREATE  PROCEDURE `afficher_montant_factures_par_mois`(IN user_id INT)
BEGIN
    SELECT MONTH(date_facture) AS mois_facture, SUM(montant_facture) AS total_facture
    FROM facture
    INNER JOIN contrat ON facture.id_contrat = contrat.id_contrat
    WHERE contrat.id_user = user_id
    GROUP BY MONTH(date_facture) ORDER BY `date_facture` DESC;
END //
delimiter ;
Drop PROCEDURE if exists afficher_montant_factures;
delimiter //
CREATE  PROCEDURE `afficher_montant_factures`(IN user_id INT)
BEGIN
    SELECT date_facture AS mois_facture, SUM(montant_facture) AS total_facture
    FROM facture
    INNER JOIN contrat ON facture.id_contrat = contrat.id_contrat
    WHERE contrat.id_user = user_id
    ORDER BY `date_facture` DESC;
END //
delimiter ;

-- TRIGGER qui update l'appartement par rapport à l'appartement
drop trigger if exists set_appart;
DELIMITER //
CREATE TRIGGER set_appart
AFTER UPDATE on reservation
for EACH ROW
BEGIN
    UPDATE appartement set id_user=NEW.id_user WHERE id_appart=NEW.id_appart;
END //
DELIMITER ;

-- Trigger qui supprime le user de l'appartement après une suppression de la reservation
drop trigger IF EXISTS delete_user_appart;
DELIMITER //
CREATE TRIGGER delete_user_appart
AFTER DELETE on reservation
for EACH ROW
BEGIN
    UPDATE appartement set id_user=NULL WHERE id_appart=OLD.id_appart;
END //
DELIMITER ;

-- TRIGGER QUI MODIFIE LE STATUT DE L4APPARTEMENT SI IL EXISTE UN ID_USER
drop trigger IF EXISTS update_appart;
DELIMITER //
CREATE TRIGGER update_appart
BEFORE UPDATE on appartement
FOR EACH ROW
BEGIN
    IF NEW.id_user IS NULL THEN
        SET NEW.statut_appart = 'Disponible';
    ELSE
        SET NEW.statut_appart = 'En location';
    END IF;
END //
DELIMITER ;

-- TRIGGER QUI AJOUTE UN CONTRAT A LA MODIFICATION D'UNE DEMANDE

drop trigger if exists set_contrat;
DELIMITER //
CREATE TRIGGER set_contrat
AFTER UPDATE on demande
for EACH ROW
BEGIN
    INSERT INTO contrat 
    VALUES(null,"En cours", DATE_FORMAT(NOW(), '%Y-%m-%d'), DATE_ADD(NOW(), INTERVAL 1 YEAR), DATE_FORMAT(NOW(), '%Y-%m-%d'), NEW.id_user, NEW.id_appart);
END //
DELIMITER ;

/*------------------------------------------------------------------*/
/*PROCEDURE POUR AVOIR LE NOMBRE TOTAL DES LOCATAIRES*/
Drop PROCEDURE if exists total_locataire;
delimiter //
CREATE PROCEDURE total_locataire(IN user_id INT)
BEGIN
    SELECT COUNT(id_locataire) AS nb_Locataire
    FROM locataire
    INNER JOIN proprietaire ON locataire.id_proprietaire = proprietaire.id_proprietaire
    WHERE locataire.id_proprietaire = user_id;
END //
delimiter ;
/*PROCEDURE POUR AVOIR LE NOMBRE TOTAL DES APPARTEMENTS*/

Drop PROCEDURE if exists total_appartement;
delimiter //
CREATE PROCEDURE total_appartement(IN user_id INT)
BEGIN
SELECT COUNT(id_appart) AS nb_appart
    FROM appartement
    INNER JOIN user ON appartement.id_user = user.id_user
    WHERE appartement.id_user = user_id;
END //
delimiter ;

-- EVENT QUI MODIFIE LE STATUT DE LA RESERVATION
DROP EVENT if exists time_reserved;
CREATE event time_reserved
ON SCHEDULE EVERY 1 MINUTE DO
    UPDATE reservation set statut_reservation ='Réservé' WHERE statut_reservation = 'En cours';

-- EVENT QUI CHANGE LA DEMANDE EN 1 MINUTE
DROP EVENT if exists time_demande;
CREATE event time_demande
ON SCHEDULE EVERY 1 MINUTE DO
    UPDATE demande set statut_demande ='Valider' WHERE statut_demande = 'En cours';

INSERT INTO appartement (statut_appart, prix_appart, intitule_appart, ville_appart, cp_appart, adresse_appart, description_appart, type_appart, superficie_appart,image, nb_chambre, nb_cuisine, nb_salon, nb_salle_bain, nb_piece)
VALUES 
("Disponible", 1000, "Chalet de luxe à la montagne", "Aime-la-Plagne", "73210", "Aime la Plagne", "Profitez d'un séjour inoubliable dans notre chalet de luxe, situé dans les montagnes enneigées. Avec une vue imprenable sur les sommets environnants, des équipements haut de gamme et une proximité des pistes de ski, c'est l'endroit idéal pour les vacances d'hiver. Le chalet comprend 3 chambres, 2 salles de bains, un salon confortable avec cheminée, une cuisine entièrement équipée et un balcon avec vue sur les montagnes.", 'Appartement', '100','A-1.jpg', 3, 1, 1, 2, 6),
("Disponible", 750, "Chalet de charme au coeur des Alpes", "Argentière", "74400", "Chamonix-Mont-Blanc", "Venez vous ressourcer dans notre chalet de charme, idéalement situé au coeur des Alpes. Avec une vue imprenable sur les montagnes environnantes et un accès direct aux sentiers de randonnée, c'est l'endroit parfait pour les amateurs de nature et de grands espaces. Le chalet comprend 4 chambres, 2 salles de bains, un salon confortable avec cheminée, une cuisine entièrement équipée et un jardin privé.", 'Appartement', '120','B-1.jpg', 4, 1, 1, 2, 8),
("Disponible", 1400, "Chalet de montagne avec piscine intérieure", "Combloux", "74920", "49 chemin des Passerands", "Profitez de vos vacances d'hiver dans notre chalet de montagne avec piscine intérieure. Idéalement situé à proximité des pistes de ski, il vous offre un espace de détente et de bien-être après une journée sur les pentes. Le chalet comprend 4 chambres, 3 salles de bains, un salon confortable avec cheminée, une cuisine entièrement équipée et une piscine intérieure.", 'Appartement', '150','C-1.jpg', 4, 1, 1, 3, 8),
("Disponible", 1000, "Chalet de montagne avec sauna", "Praz Sur Arly", "74120", "54 route du Val d'Arly", "Venez vous détendre dans notre chalet de montagne avec sauna, idéalement situé dans les Alpes. Avec une vue imprenable sur les montagnes environnantes, un sauna et un accès direct aux sentiers de randonnée, c'est l'endroit parfait pour vous ressourcer. Le chalet comprend 3 chambres, 2 salles de bains, un salon confortable avec cheminée, une cuisine entièrement équipée et un sauna privé.", "Appartement", '110','D-1.jpg', 3, 1, 1, 2, 6),
("Disponible", 1200 , "Chalet de montagne avec jacuzzi", "Praz Sur Arly", "74120", "30 route du Val d'Arly", "Profitez de vos vacances d'hiver dans notre chalet de montagne avec jacuzzi, idéalement situé à proximité des pistes de ski. Avec une vue imprenable sur les montagnes environnantes, un jacuzzi extérieur et un accès direct aux sentiers de randonnée, c'est l'endroit parfait pour vous ressourcer après une journée sur les pentes. Le chalet comprend 4 chambres, 3 salles de bains, un salon confortable avec cheminée, une cuisine entièrement équipée et un jacuzzi extérieur privé.", "Appartement", "130","E-1.jpg", 4, 1, 1, 3, 8),
("Disponible", 800, "Chalet de montagne à louer pour les vacances d'été", "Megeve", "74120", "70 rue monseigneur Conseil", "Venez passer vos vacances d'été dans notre chalet de montagne, idéalement situé dans les Alpes. Profitez de la nature environnante et des activités de plein air telles que la randonnée, le vélo et l'escalade. Le chalet est équipé d'une terrasse avec vue sur les montagnes, d'un jardin privé et d'une cuisine extérieure pour des repas en plein air. Le chalet comprend 3 chambres, 2 salles de bains, un salon confortable avec cheminée, une cuisine entièrement équipée et une terrasse avec vue sur les montagnes.", "Appartement", "100","F-1.jpg", 3, 1, 1, 2, 6),
("Disponible", 1200, "Chalet de montagne avec vue panoramique", "Les Contamines Montjoie", "74170", "18 route de Notre Dame de la Gorge", "Venez passer vos vacances dans notre chalet de montagne avec vue panoramique sur les Alpes. Profitez de la vue imprenable depuis la terrasse ou depuis le salon confortable avec cheminée. Le chalet est équipé d'une cuisine entièrement équipée et d'une salle de jeux pour des soirées en famille ou entre amis. Le chalet comprend 4 chambres, 2 salles de bains, un salon confortable avec cheminée, une cuisine entièrement équipée et une terrasse avec vue panoramique sur les montagnes.", "Appartement", "130","J-1.jpg", 4, 1, 1, 2, 8),
("Disponible", 600 , "Chalet de montagne pour les amoureux de la nature", "Les Houches", "74310", "BP 9-Place de la Mairie", "Venez passer vos vacances dans notre chalet de montagne idéalement situé pour les amoureux de la nature. Avec un accès direct aux sentiers de randonnée, des vues imprenables sur les montagnes environnantes et un jardin privé pour profiter des beaux jours. Le chalet est équipé d'une cuisine entièrement équipée, d'une salle de bain confortable et d'une cheminée pour des soirées cocooning. Le chalet comprend 2 chambres, 1 salle de bains, un salon confortable avec cheminée, une cuisine entièrement équipée et un jardin privé.", "Appartement", "80","G-1.jpg", 2, 1, 1, 1, 5),
("Disponible", 900, "Chalet de montagne pour les vacances en famille", "Aime-la-Plagne", "73210", "Aime la Plagne", "Venez passer vos vacances en famille dans notre chalet de montagne idéalement situé pour les activités en plein air. Le chalet est équipé d'une cuisine entièrement équipée, d'une salle de jeux pour les enfants, d'une terrasse avec vue sur les montagnes et d'un jardin privé pour des repas en extérieur. Le chalet comprend 4 chambres, 2 salles de bains, un salon confortable avec cheminée, une cuisine entièrement équipée, une salle de jeux pour les enfants et une terrasse avec vue sur les montagnes.", 'Appartement', '110','H-2.jpg', 4, 1, 1, 2, 7),
("Disponible", 1000, "Chalet de montagne avec accès à des activités de plein air", "Aime-la-Plagne", "73210", "Aime la Plagne", "Venez passer vos vacances dans notre chalet de montagne idéalement situé pour les activités de plein air. Le chalet est équipé d'une cuisine entièrement équipée, d'un salon confortable avec cheminée, d'une terrasse avec vue sur les montagnes et d'un accès direct aux sentiers de randonnée et aux pistes de ski. Le chalet comprend 3 chambres, 2 salles de bains, un salon confortable avec cheminée, une cuisine entièrement équipée et une terrasse avec vue sur les montagnes.", 'Appartement', '100',"I-3.jpg", 3, 1, 1, 2, 6);

INSERT INTO atouts (nom_atout, id_appart)
VALUES 
    ("Vue sur la mer", 1),  ("Piscine", 1),("Parking", 1),  
    ("Terrasse", 2),("Jardin", 2),("Ascenseur", 2), 
    ("Internet haut débit", 3),("Cuisine équipée", 3),("Climatisation", 3),
    ("Jacuzzi", 4), ("Sauna", 4),("Salle de sport", 4),
    ("Vue panoramique", 5),("Proximité des commerces", 5),("Belle luminosité", 5),
    ("Cheminée", 6),("Accès handicapé", 6),("Animaux acceptés", 6),
    ("Spacieux", 7),("Très calme", 7),("Beau design", 7),
    ("Bien isolé", 8),("Bonne distribution", 8),("Décoration moderne", 8),
    ("Quartier animé", 9),("Proximité des transports", 9),("Proche de la plage", 9);

INSERT INTO equipement_appart (intitule_equip_appart, nb_equi_appart, prix_equip_appart, type_equip_appart, statut_equip_appart, id_appart)
VALUES 
('Lave-linge', 1, 500, 'Electromenager', 'Disponible', 1),
('Lave-vaisselle', 1, 600, 'Electromenager', 'Disponible', 1),
('Réfrigérateur', 1, 800, 'Electromenager', 'Disponible', 1),
('Four', 1, 700, 'Electromenager', 'Disponible', 1),
('Micro-ondes', 1, 300, 'Electromenager', 'Disponible', 2),
('Cafetière', 1, 50, 'Electromenager', 'Disponible', 2),
('Aspirateur', 1, 100, 'Electromenager', 'Disponible', 2),
('Fer à repasser', 1, 80, 'Electromenager', 'Disponible', 2),
('Télévision', 1, 900, 'Multimedia', 'Disponible', 3),
('Ordinateur portable', 1, 1200, 'Multimedia', 'Disponible', 3),
('Enceinte Bluetooth', 1, 100, 'Multimedia', 'Disponible', 3),
('Lecteur DVD', 1, 50, 'Multimedia', 'Disponible', 3),
('Table de ping-pong', 1, 250, 'Sport', 'Disponible', 4),
('Tapis de course', 1, 600, 'Sport', 'Disponible', 4),
('Set de golf', 1, 800, 'Sport', 'Disponible', 4);


INSERT INTO images (nom_img, type_img, id_appart) VALUES 
("A-1", "jpg", 1), ("A-2", "jpg", 1), ("A-3", "jpg", 1), ("A-4", "jpg", 1), ("A-5", "jpg", 1),
("B-1", "jpg", 2), ("B-2", "jpg", 2), ("B-3", "jpg", 2), ("B-4", "jpg", 2), ("B-5", "jpg", 2),
("C-1", "jpg", 3), ("C-2", "jpg", 3), ("C-3", "jpg", 3), ("C-4", "jpg", 3), ("C-5", "jpg", 3),
("D-1", "jpg", 4), ("D-2", "jpg", 4), ("D-3", "jpg", 4), ("D-4", "jpg", 4), ("D-5", "jpg", 4),
("E-1", "jpg", 5), ("E-2", "jpg", 5), ("E-3", "jpg", 5), ("E-4", "jpg", 5), ("E-5", "jpg", 5),
("F-1", "jpg", 6), ("F-2", "jpg", 6), ("F-3", "jpg", 6), ("F-4", "jpg", 6), ("F-5", "jpg", 6),
("G-1", "jpg", 7), ("G-2", "jpg", 7), ("G-3", "jpg", 7), ("G-4", "jpg", 7), ("G-5", "jpg", 7);


INSERT INTO locataire (civilite_locataire, nom_locataire, prenom_locataire, email_locataire, mdp_locataire, tel_locataire, adresse_locataire, cp_locataire, nb_reservations )
VALUES 
('Mr', 'Dupont', 'Pierre', 'pierre.dupont@gmail.com', 'motdepasse', '0123456789', '5 Rue des Lilas', '75020', 0),
('Mme', 'Martin', 'Sophie', 'sophie.martin@gmail.com', 'motdepasse', '0123456789', '12 Rue de la Gare', '69002',0 ),
('Mr', 'Garcia', 'Antonio', 'antonio.garcia@gmail.com', 'motdepasse', '0123456789', '7 Avenue des Roses', '13010', 0),
('Mme', 'Dumont', 'Laura', 'laura.dumont@gmail.com', 'motdepasse', '0123456789', '14 Rue des Pivoines', '34000', 0),
('Mr', 'Lefebvre', 'Luc', 'luc.lefebvre@gmail.com', 'motdepasse', '0123456789', '8 Rue des Tilleuls', '25000', 0),
('Mme', 'Moreau', 'Céline', 'celine.moreau@gmail.com', 'motdepasse', '0123456789', '25 Rue des Cerisiers', '44000',0),
('Mr', 'Roux', 'Nicolas', 'nicolas.roux@gmail.com', 'motdepasse', '0123456789', '10 Rue des Peupliers', '57000', 0),
('Mme', 'Le Gall', 'Anne', 'anne.legall@gmail.com', 'motdepasse', '0123456789', '9 Rue des Coquelicots', '29000', 0),
('Mr', 'Fernandez', 'José', 'jose.fernandez@gmail.com', 'motdepasse', '0123456789', '3 Rue des Iris', '13005', 0),
('Mme', 'Dubois', 'Elodie', 'elodie.dubois@gmail.com', 'motdepasse', '0123456789', '15 Rue des Azalées', '54000', 0);

INSERT INTO proprietaire ( civilite_proprio, nom_proprio, prenom_proprio, statut_proprio, email_proprio, mdp_proprio, tel_proprio, adresse_proprio, cp_proprio, ville_proprio, pays_proprio, code_adherent, id_contrat, id_appart)
VALUES ( 'Mr', 'Durand', 'Jean', 'Particulier', 'jean.durand@email.com', 'motdepasse123', '01 23 45 67 89', '1 rue du Pont', '75001', 'Paris', 'France', '0123456789', NULL, NULL),
       ( 'Mme', 'Lefebvre', 'Marie', 'Professionnel', 'marie.lefebvre@email.com', 'password456', '01 34 56 78 90', '2 rue de la Gare', '69001', 'Lyon', 'France', '0123456789', Null, NULL),
       ( 'Mr', 'Garcia', 'Luis', 'Particulier', 'luis.garcia@email.com', 'azerty123', '01 23 45 67 89', '3 rue de la Paix', '13001', 'Marseille', 'France', '0123456789',NULL, NULL),
       ( 'Mme', 'Chang', 'Li', 'Professionnel', 'li.chang@email.com', 'secret789', '01 34 56 78 90', '4 avenue des Fleurs', '69002', 'Lyon', 'France', '0123456789', NULL, NULL);



