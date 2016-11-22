insert into compte (pseudo_utilisateur, mdp_utilisateur)values ('SamLeBG', 'Samuel');
insert into compte (pseudo_utilisateur, mdp_utilisateur)values ('GuillaumeLeThug', 'Guillaume');
insert into compte (pseudo_utilisateur, mdp_utilisateur)values ('Natexior', 'Nathanael');

insert into document (nom_document, verrouille_document, date_creation, date_suppression, id_creation, id_suppression) values ('Guillaume : le roi des thugs', '0', '2016-09-01', '2016-09-02', 1, 2);
insert into document (nom_document, verrouille_document, date_creation, date_suppression, id_creation, id_suppression) values ('Sam, ce gros BG!', '0', '2016-09-02', '2016-09-27', 2, 1);
insert into document (nom_document, verrouille_document, date_creation, id_creation) values ('CV_nathanael_bergeron', '0', '2016-09-09', 3);
insert into document (nom_document, verrouille_document, date_creation, id_creation) values ('CV_guillaume_bonneau', '0', '2016-09-10', 2);
insert into document (nom_document, verrouille_document, date_creation, id_creation) values ('CV_samuel_alves_rua', '1', '2016-09-10', 1);

insert into consultation (date_consultation, id_utilisateur, id_document) values ('2016-09-01', 1, 1);
insert into consultation (date_consultation, id_utilisateur, id_document) values ('2016-09-02', 2, 1);
insert into consultation (date_consultation, id_utilisateur, id_document) values ('2016-09-07', 2, 2);
insert into consultation (date_consultation, id_utilisateur, id_document) values ('2016-09-09', 2, 2);
insert into consultation (date_consultation, id_utilisateur, id_document) values ('2016-09-02', 1, 2);
insert into consultation (date_consultation, id_utilisateur, id_document) values ('2016-09-09', 3, 3);
insert into consultation (date_consultation, id_utilisateur, id_document) values ('2016-09-10', 2, 4);
insert into consultation (date_consultation, id_utilisateur, id_document) values ('2016-09-10', 1, 5);

insert into modification (date_modification, id_utilisateur, id_document) values ('2016-09-01', 1, 1);
insert into modification (date_modification, id_utilisateur, id_document) values ('2016-09-12', 3, 3);
insert into modification (date_modification, id_utilisateur, id_document) values ('2016-09-12', 2, 4);
insert into modification (date_modification, id_utilisateur, id_document) values ('2016-09-13', 1, 5);