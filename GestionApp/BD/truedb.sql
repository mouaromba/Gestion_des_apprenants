drop table if exists Apprenant;

drop table if exists Tuteur;

/*==============================================================*/
/* Table: Apprenant                                             */
/*==============================================================*/
create table Apprenant
(
   codeApp              int not null,
   codeTuteur           int not null,
   nom                  varchar(254),
   prenom               varchar(254),
   adresse              varchar(254),
   phone                int,
   genre                varchar(254),
   primary key (codeApp)
);

/*==============================================================*/
/* Table: Tuteur                                                */
/*==============================================================*/
create table Tuteur
(
   codeTuteur           int not null,
   nomTuteur            varchar(254),
   prenomTuteur         varchar(254),
   adresseTuteur        varchar(254),
   phoneTuteur          int,
   genre                varchar(254),
   profession           varchar(254),
   primary key (codeTuteur)
);

alter table Apprenant add constraint FK_association1 foreign key (codeTuteur)
      references Tuteur (codeTuteur) on delete restrict on update restrict;
