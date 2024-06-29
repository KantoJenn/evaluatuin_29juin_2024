CREATE DATABASE eval_29juin;
CREATE ROLE eval_29juin LOGIN PASSWORD 'projet';


\c eval_29juin;

create table admin(
    id serial primary key not null,
    email varchar(30) UNIQUE ,
    mdp varchar(255)
);

insert into admin (email, mdp) values
('admin@gmail.com','mdp');

create table typePersonne(
    id serial primary key not null,
    nom varchar(50)
);

insert into typePersonne (nom) values
('particulier '),
('professionnel');

create table proprio(
    id serial primary key not null,
    numero varchar(30) UNIQUE,
    id_type_perso integer references typePersonne (id)
);

insert into proprio (numero,id_type_perso) values
(1234, 1),
(5678,2);

create table client(
    id serial primary key not null,
    email varchar(30) UNIQUE ,
    id_type_perso integer references typePersonne (id)
);

create table bien(
    id serial primary key not null,
    nom varchar(50),
    description varchar(150),
    region varchar(50),
    loyer numeric (15,2),
    id_proprio integer references proprio (id)
);

create table typebien(
    id serial primary key not null,
    nom varchar (50),
    commission decimal(3,2)

);

create table location (
    id serial primary key not null,
    idproprio integer references proprio (id),
    idbien integer references bien (id),
    idclient integer references client (id),
    duree INTEGER NOT NULL,
    date_debut date


);
