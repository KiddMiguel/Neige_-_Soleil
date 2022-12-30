drop database if exists neige_&_soleil;
create database neige_&_soleil;
use neige_&_soleil;

create table user (
    id_user int(5) NOT NULL auto_increment, 
    primary key (id_user)
);

create table locataire (
    civilite as enum ('Mr', 'Mme') not null,
    nom_locataire varchar(50) not null,
    prenom_locataire varchar(50) not null, 
    email_locataire varchar(100) not null,
    mdp_locataire varchar(100),
    tel_locataire varchar(50),
    adresse_locataire varchar(50),
    cp_locataire varchar(50),
    nb_reservations int(5)
)INHERITS(user);

create table proprietaire (
    civilite as enum ('Mr', 'Mme') not null,
    nom_proprio varchar(50) not null,
    prenom_proprio varchar(50) not null,
    email_proprio varchar(50) not null,
    mdp_proprio varchar(50),
    tel_proprio varchar(50),
    adresse_proprio varchar(50),
    cp_proprio varchar(50),
    id_contra int (5),
    foreign key (id_contra) references contrat(id_contrat)
)INHERITS(user);

create table contrat (
    id_contrat int(5) not null auto_increment,
    statut_contrat varchar(50),
    date_debut_contrat date,
    date_fin_contrat date,
    date_sign_contrat date,
    id_user int(5), 
    primary key (id_contrat),
    foreign key (id_user) references proprietaire(id_user)
); 
