drop database if exists neige_soleil;
create database neige_soleil;
use neige_soleil;

create table user (
    id_user int(5) NOT NULL auto_increment,
    PRIMARY KEY (id_user)
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
    FOREIGN key (id_user) REFERENCES user(id_user) on delete cascade,
    FOREIGN key (id_appart) REFERENCES appartement(id_appart),
    FOREIGN KEY (id_reservation) REFERENCES reservation(reservation)
    
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
     FOREIGN key (id_user) REFERENCES user(id_user) on delete cascade,
    foreign key (id_contrat) references contrat(id_contrat),
    FOREIGN key (id_appart) REFERENCES appartement(id_appart)
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


