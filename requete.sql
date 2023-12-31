/* userPhp / 123456 */

/* CREATION DE LA DBB */
CREATE DATABASE ecf;

/* CREATION DE LA TABLE */
CREATE TABLE collaborateur (
    id INT AUTO_INCREMENT PRIMARY KEY,
    code_collaborateur VARCHAR(10) NOT NULL,
    civilite ENUM('Madame', 'Monsieur') NOT NULL,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    date_naissance DATE NOT NULL,
    ville_naissance VARCHAR(100) NOT NULL,
    num_secu VARCHAR(15) NOT NULL,
    mail_pro VARCHAR(255),
    mail_perso VARCHAR(255),
    portable VARCHAR(20) NOT NULL,
    tel_fixe VARCHAR(20),
    rue VARCHAR(255) NOT NULL,
    complement VARCHAR(255),
    code_postal VARCHAR(10) NOT NULL,
    ville VARCHAR(255) NOT NULL,
    departement VARCHAR(255) NOT NULL,
    region varchar(255) NOT NULL,
    pays VARCHAR(255) NOT NULL,
    nationalite VARCHAR(255) NOT NULL,
    type_collaborateur ENUM('CDD', 'CDI', 'Independant', 'Stagiaire') NOT NULL
);

INSERT INTO collaborateur (code_collaborateur, civilite, nom, prenom, date_naissance, ville_naissance, num_secu, mail_pro, mail_perso, portable, tel_fixe, rue, complement, code_postal, ville, departement, region, pays, nationalite, type_collaborateur)
VALUES 
('MDJ0000001''Monsieur', 'Dupont', 'Jean', '1980-01-01', 'Paris', '123456789012345', 'jean.dupont@entreprise.com', 'jean.dupont@mail.com', '0600000001', '0100000001', '1 Rue Exemple', 'Appartement 1', '75001', 'Paris', 'Paris', 'Île-de-France', 'France', 'Française', 'CDI'),
('Madame', 'Martin', 'Marie', '1985-02-02', 'Lyon', '234567890123456', 'marie.martin@entreprise.com', 'marie.martin@mail.com', '0600000002', '0100000002', '2 Rue Exemple', 'Appartement 2', '69001', 'Lyon', 'Rhône', 'Auvergne-Rhône-Alpes', 'France', 'Française', 'CDD'),
-- Ajoutez ici les 8 autres enregistrements avec des données différentes
;
INSERT INTO collaborateur (code_collaborateur, civilite, nom, prenom, date_naissance, ville_naissance, num_secu, mail_pro, mail_perso, portable, tel_fixe, rue, complement, code_postal, ville, departement, region, pays, nationalite, type_collaborateur)
VALUES
('HLC0000001', 'Monsieur', 'Lambert', 'Christophe', '1969-06-26', 'Joubert', '050341121598823', 'christophe.lambert@entreprise.com', 'guy07@marie.fr', '+33 (0)6 25 30 27 77', '+33 5 11 71 66 54', 'boulevard Manon Langlois', '4', '75875', 'Guillot-la-Forêt', 'Haute-Corse', 'Wallis-et-Futuna', 'France', 'Française', 'CDD'),
('FCM0000002', 'Madame', 'Cohen', 'Marine', '1980-03-29', 'Vaillant', '717599644310187', 'marine.cohen@entreprise.com', 'dianethibault@leclercq.fr', '02 33 67 73 86', '+33 (0)1 24 13 35 78', '7, rue de Roux', '612', '15182', 'Guibert', 'Gironde', 'Franche-Comté', 'France', 'Française', 'CDI'),
('FGR0000003', 'Madame', 'Gillet', 'Rebecca', '1971-08-30', 'Lemaire', '286014674564837', 'rebecca.gillet@entreprise.com', 'chretiendavid@free.fr', '+33 6 33 51 58 40', '+33 8 09 39 55 59', '23, rue de Pons', '580', '25275', 'Barthelemy', 'Jura', 'Aquitaine', 'France', 'Française', 'CDI'),
('HDJ0000004', 'Monsieur', 'Dupont', 'Jean', '1980-01-01', 'Paris', '123456789012345', 'jean.dupont@entreprise.com', 'jean.dupont@mail.com', '0600000001', '0100000001', '1 Rue Exemple', 'Appartement 1', '75001', 'Paris', 'Paris', 'Île-de-France', 'France', 'Française', 'CDI'),
('FMA0000005', 'Madame', 'Martin', 'Astrid', '1985-02-02', 'Lyon', '234567890123456', 'astrid.martin@entreprise.com', 'astrid.martin@mail.com', '0600000002', '0100000002', '2 Rue Exemple', 'Appartement 2', '69001', 'Lyon', 'Rhône', 'Auvergne-Rhône-Alpes', 'France', 'Française', 'CDD')
;



/* VERSION PRO on sépare les deux tables pour une meilleur maintenance du code */
CREATE TABLE collaborateur (
    id INT AUTO_INCREMENT PRIMARY KEY,
    civilite ENUM('Madame', 'Monsieur') NOT NULL,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    date_naissance DATE NOT NULL,
    ville_naissance VARCHAR(100) NOT NULL,
    num_secu VARCHAR(15) NOT NULL,
    mail_pro VARCHAR(255),
    mail_perso VARCHAR(255),
    portable VARCHAR(20) NOT NULL,
    tel_fixe VARCHAR(20),
    nationalite VARCHAR(255) NOT NULL,
    type_collaborateur ENUM('CDD', 'CDI', 'Independant', 'Stagiaire') NOT NULL
);

CREATE TABLE adresse (
    id INT AUTO_INCREMENT PRIMARY KEY,
    collaborateur_id INT NOT NULL,
    rue VARCHAR(255) NOT NULL,
    complement VARCHAR(255),
    code_postal VARCHAR(10) NOT NULL,
    ville VARCHAR(255) NOT NULL,
    departement VARCHAR(255) NOT NULL,
    region VARCHAR(255) NOT NULL,
    pays VARCHAR(255) NOT NULL,
    FOREIGN KEY (collaborateur_id) REFERENCES collaborateur(id)
);

/* Requetes pour insérer data dans collaborateur */
INSERT INTO collaborateur (civilite, nom, prenom, date_naissance, ville_naissance, num_secu, mail_pro, mail_perso, portable, tel_fixe, nationalite, type_collaborateur)
VALUES
('Monsieur', 'Dupont', 'Jean', '1985-04-12', 'Paris', '123456789012345', 'jean.dupont@entreprise.com', 'jean.dupont@gmail.com', '0612345678', '0145678901', 'Française', 'CDI'),
('Madame', 'Martin', 'Alice', '1990-07-23', 'Lyon', '234567890123456', 'alice.martin@entreprise.com', 'alice.martin@gmail.com', '0623456789', NULL, 'Française', 'CDD'),
('Monsieur', 'Bernard', 'Thomas', '1975-05-16', 'Marseille', '345678901234567', 'thomas.bernard@entreprise.com', NULL, '0634567890', '0245678901', 'Française', 'Independant'),
('Madame', 'Petit', 'Sophie', '1988-03-30', 'Toulouse', '456789012345678', 'sophie.petit@entreprise.com', 'sophie.petit@gmail.com', '0645678901', NULL, 'Française', 'Stagiaire'),
('Monsieur', 'Richard', 'Nicolas', '1982-11-22', 'Nice', '567890123456789', 'nicolas.richard@entreprise.com', NULL, '0656789012', '0345678901', 'Française', 'CDI'),
('Madame', 'Durand', 'Julie', '1992-09-10', 'Nantes', '678901234567890', 'julie.durand@entreprise.com', 'julie.durand@gmail.com', '0667890123', NULL, 'Française', 'CDD'),
('Monsieur', 'Leroy', 'Pierre', '1980-01-15', 'Strasbourg', '789012345678901', 'pierre.leroy@entreprise.com', NULL, '0678901234', '0445678901', 'Française', 'Independant'),
('Madame', 'Moreau', 'Céline', '1994-12-08', 'Bordeaux', '890123456789012', 'celine.moreau@entreprise.com', 'celine.moreau@gmail.com', '0689012345', NULL, 'Française', 'Stagiaire'),
('Monsieur', 'Simon', 'Éric', '1978-02-27', 'Lille', '901234567890123', 'eric.simon@entreprise.com', NULL, '0690123456', '0545678901', 'Française', 'CDI'),
('Madame', 'Michel', 'Anne', '1986-06-19', 'Rennes', '012345678901234', 'anne.michel@entreprise.com', 'anne.michel@gmail.com', '0701234567', NULL, 'Française', 'CDD');

INSERT INTO adresse (collaborateur_id, rue, complement, code_postal, ville, departement, region, pays)
VALUES
(1, '123 Rue de Paris', 'Apt 101', '75001', 'Paris', 'Paris', 'Île-de-France', 'France'),
(2, '456 Avenue de Lyon', 'Bâtiment B', '69002', 'Lyon', 'Rhône', 'Auvergne-Rhône-Alpes', 'France'),
(3, '789 Boulevard de Marseille', NULL, '13003', 'Marseille', 'Bouches-du-Rhône', 'Provence-Alpes-Côte d\'Azur', 'France'),
(4, '101 Rue de Toulouse', 'Apt 202', '31004', 'Toulouse', 'Haute-Garonne', 'Occitanie', 'France'),
(5, '202 Avenue de Nice', NULL, '06005', 'Nice', 'Alpes-Maritimes', 'Provence-Alpes-Côte d\'Azur', 'France'),
(6, '303 Boulevard de Nantes', '3ème étage', '44006', 'Nantes', 'Loire-Atlantique', 'Pays de la Loire', 'France'),
(7, '404 Rue de Strasbourg', 'Maison', '67007', 'Strasbourg', 'Bas-Rhin', 'Grand Est', 'France'),
(8, '505 Avenue de Bordeaux', 'Apt 305', '33008', 'Bordeaux', 'Gironde', 'Nouvelle-Aquitaine', 'France'),
(9, '606 Boulevard de Lille', 'Bâtiment D', '59009', 'Lille', 'Nord', 'Hauts-de-France', 'France'),
(10, '707 Rue de Rennes', NULL, '35010', 'Rennes', 'Ille-et-Vilaine', 'Bretagne', 'France');



liste des truc 
code_collaborateur
civilite
nom
prenom
date_naissance
ville_naissance
num_secu
mail_pro
mail_perso
portable 
tel_fixe
rue
complement
code_postal
ville
departement
region
pays
nationalite
type_collaborateur