create table compte(
id_utilisateur int,
pseudo_utilisateur varchar(50),
mdp_utilisateur varchar(50),

constraint pk_compte primary key(id_utilisateur),
constraint u_pseudo_utilisateur unique(pseudo_utilisateur));

create table document(
id_document int,
nom_document varchar(50),
verrouille_document boolean,
date_suppression date,
date_creation date,

id_creation int,
id_suppression int,

constraint pk_document primary key(id_document),
constraint fk_document_id_creation foreign key(id_creation) references compte(id_utilisateur),
constraint fk_document_id_suppression foreign key(id_suppression) references compte(id_utilisateur));

create table modification(
id_modification int,
date_modification date,

id_utilisateur int ,
id_document int,

constraint pk_id_modification primary key(id_modification),
constraint fk_id_utilisateur FOREIGN KEY (id_utilisateur) references compte (id_utilisateur),
constraint fk_id_document FOREIGN KEY (id_document) references document (id_document));

create table consultation(
id_consultation int,
date_consultation date,

id_utilisateur int,
id_document int,

constraint pk_id_consultation primary key(id_consultation),
constraint fk_id_utilisateur foreign key(id_utilisateur) references compte(id_utilisateur),
constraint fk_id_document foreign key(id_document) references document(id_document));

TROLOLO