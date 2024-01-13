create table users(
    idUser int primary key Auto_increment,
    nom varchar(200)
    prenom varchar(200),
    genre varchar(1),
    adresse varchar(200)
    dateNaissance date
    email varchar(200)
    password varchar(255)
);

create table classes(
    idClasse int primary key Auto_increment,
    nom varchar
);

create table publications(
    idPublication int primary key Auto_increment,
    idUser int,
    texte text,
    datePublication datetime,
    etat int,
    foreign key (idUser) references users(idUser)
);



create table documents(
    idDocument int primary key Auto_increment,
    idPublication int,
    lien text,
    foreign key (idPublication) references publications(idPublication)
);

create table taches(
    idTache int primary key Auto_increment,
    idClasse int,
    idUser int,
    texte text,
    dateDebut datetime,
    dateFin datetime,
    etat int,
    foreign key (idClasse) references classes(idClasse),
    foreign key (idUser) references users(idUser)
);

create table devoirs(
    idDevoir int primary key Auto_increment,
    idClasse int,
    idUser int,
    idMatiere int,
    texte text,
    dateDebut datetime,
    dateFin datetime,
    etat int,
        foreign key (idClasse) references classes(idClasse),
    foreign key (idUser) references users(idUser),
    foreign key (idMatiere) references matieres(idMatiere)
);

create table abscences(
    idAbscence int primary key Auto_increment,
    idUser int
    dateDebut datetime,
    dateFin datetime,
    foreign key (idUser) references users(idUser)
);

create table  matieres(
    idMatiere int primary key Auto_increment,
    nom varchar(200)
);

create table notes(
    idNote int primary key Auto_increment, 
    idUser int,
    idMatiere int,
    note float,
    dateTest datetime,
    foreign key (idUser) references users(idUser)
    foreign key (idMatiere) references matieres(idMatiere)
);


create table likes(
    idLike int primary key Auto_increment,
    idUser int,
    idPublication int,
    foreign key (idUser) references users(idUser),
    foreign key (idPublication) references publications(idPublication)
);
