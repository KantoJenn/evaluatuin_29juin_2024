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

create table proprio(
    id serial primary key not null,
    numero varchar(30) UNIQUE,
    id_type_perso integer references typePersonne (id)
);

create table client(
    id serial primary key not null,
    email varchar(30) UNIQUE ,
    id_type_perso integer references typePersonne (id)

);
