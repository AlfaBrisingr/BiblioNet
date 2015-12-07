DROP TABLE IF EXISTS Commentaire ;
DROP TABLE IF EXISTS Quantite;
DROP TABLE IF EXISTS Commande;
DROP TABLE IF EXISTS Utilisateur;
DROP TABLE IF EXISTS Livre;
DROP TABLE IF EXISTS Genre;
DROP TABLE IF EXISTS Edition;
DROP TABLE IF EXISTS Auteur;



CREATE TABLE IF NOT EXISTS `Utilisateur` (
	`NumUser` int(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`Nom` varchar(50) NOT NULL,
	`Prenom` varchar(50) NOT NULL,
	`Password` varchar(50) NOT NULL,
	`AdresseMail` varchar(50) NOT NULL,
	`Adresse` varchar(50) NOT NULL,
	`CodePostal` varchar(50) NOT NULL,
	`Ville` varchar(50) NOT NULL
);



CREATE TABLE IF NOT EXISTS `Auteur` (
	`NumAuteur` int(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`NomAuteur` varchar(50) NOT NULL
);



CREATE TABLE IF NOT EXISTS `Commande` (
	`NumCommande` int(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`NoUsers` int(3) NOT NULL,
	`DateCommande` date NOT NULL,
	FOREIGN KEY (NoUsers)  REFERENCES Utilisateur(NumUser)
);


CREATE TABLE IF NOT EXISTS `Edition` (
	`NumEdition` int(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`NomEdition` varchar(50) NOT NULL
);


CREATE TABLE IF NOT EXISTS `Genre` (
	`NumGenre` int(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`NomGenre` varchar(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS `Livre` (
	`NumLivre` int(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`CodeISBN` varchar(50) NOT NULL,
	`Nom` varchar(50) NOT NULL,
	`NumAuteur` int(3) NOT NULL,
	`QuantiteStock` int(3) NOT NULL,
	`DateSortie` date NOT NULL,
	`Tarif` varchar(50) NOT NULL,
	`Resume` text,
	`Langue` varchar(50) NOT NULL,
	`Couverture` varchar(200) DEFAULT NULL,
	`NoEdition` int(3) NOT NULL ,
	`NoGenre` int(3) NOT NULL ,
	FOREIGN KEY (NoEdition)  REFERENCES Edition(NumEdition),
	FOREIGN KEY (NoGenre)  REFERENCES Genre(NumGenre)
);


CREATE TABLE IF NOT EXISTS `Commentaire` (
	`NumCom` int(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`NoUser` int(3) NOT NULL ,
	`NoLivre` int(3) NOT NULL,
	`Com` text NOT NULL,
	`DateCom` date NOT NULL,
	FOREIGN KEY (NoUser)  REFERENCES Utilisateur(NumUser),
	FOREIGN KEY (NoLivre) REFERENCES Livre(NumLivre)
);

CREATE TABLE IF NOT EXISTS `Quantite` (
	`NoLivres` int(3) NOT NULL ,
	`NoCommande` int(3) NOT NULL ,
	`Quantite` int(3) NOT NULL,
	FOREIGN KEY (NoLivres) REFERENCES Livre(NumLivre),
	FOREIGN KEY (NoCommande) REFERENCES Commande(NumCommande),
	PRIMARY KEY(NoLivres, NoCommande)
);

INSERT INTO `Utilisateur` (`NumUser`, `Nom`, `Prenom`, `Password`, `AdresseMail`, `Adresse`, `CodePostal`, `Ville`) VALUES
(1, 'Martin', 'OcÃ©ane', '81d64965a855fadc8c2660af522c347a93db954a', 'oceane@gmail.com', '23 rue des Enfants', '52140', 'Bisounours'),
(2, 'Patard', 'Nicolas', 'b612164480588d0a315c36acec30a35d2b23b080', 'nicolas.patard@laposte.net', '34 rue jean-francois millet', '53950', 'louvernÃ©'),
(6, 'patard', 'nicoals', '9cb6d024227823221eb95937c036fb19e785bffb', 'Nicoals.patard@laposte.aklznkbhj', '34 rue des poiraux', '53950', 'Canarpomatose');

INSERT INTO `Auteur` (`NumAuteur`, `NomAuteur`) VALUES
(1, 'Louis Ferdinand Céline'),
(2, 'Marcel Proust '),
(3, 'JD Salinger '),
(4, 'Apollinaire '),
(5, 'Voltaire'),
(6, 'Louis Ferdinand Céline'),
(7, 'Marcel Proust '),
(8, 'JD Salinger '),
(9, 'Apollinaire '),
(10, 'Victor Hugo '),
(11, 'Arthur Rimbaud '),
(12, ' Émile Zola'),
(13, 'Molière'),
(14, 'Guy de Maupassant');

INSERT INTO `Edition` (`NumEdition`, `NomEdition`) VALUES
(1, 'Hachette Education');

INSERT INTO `Genre` (`NumGenre`, `NomGenre`) VALUES
(1, 'Romans & Fictions'),
(2, 'Bande Dessinée, Comics & Manga'),
(3, 'Arts & Culture'),
(4, 'Documents & Médias'),
(5, 'Guides & Santé'),
(6, 'Histoire & Géographie'),
(7, 'Jeunesse'),
(8, 'Langues'),
(9, 'Lettres'),
(10, 'Loisirs, Vie pratique & Société'),
(11, 'Religions & Spiritualité'),
(12, 'Sciences');

INSERT INTO `Livre` (`NumLivre`, `CodeISBN`, `Nom`, `NumAuteur`, `QuantiteStock`, `DateSortie`, `Tarif`, `Resume`, `Langue`, `Couverture`, `NoEdition`, `NoGenre`) VALUES
(1, '2012815367', 'CANDIDE', 5, 5000, '2013-03-27', '4.50', 'Résumé', 'FR', NULL, 1, 1),
(2, '2070336867', 'VOYAGE AU BOUT DE LA NUIT', 1, 650, '2006-03-01', '9.99', 'Résumé', 'FR', NULL, 1, 1),
(3, '2-266-15921-6', 'Thérèse Raquin ', 12, 262, '2006-06-24', '3', 'Résumé', 'FR', NULL, 1, 1),
(4, '2isbn', 'Nom', 3, 123, '0000-00-00', '0', 'icic comense le resumée', 'FR', NULL, 1, 1),
(5, '2isbn14', 'Nom2', 3, 123, '0000-00-00', '0', 'icic comense le resumée', 'FR', NULL, 1, 1),
(6, '2isbn13', 'Nom3', 3, 123, '0000-00-00', '0', 'icic comense le resumée', 'FR', NULL, 1, 1),
(7, '2isbn12', 'Nom4', 3, 123, '0000-00-00', '0', 'icic comense le resumée', 'FR', NULL, 1, 1),
(8, '2isbn11', 'Nom5', 3, 123, '0000-00-00', '0', 'icic comense le resumée', 'FR', NULL, 1, 1),
(9, '2isbn10', 'Nom6', 3, 123, '0000-00-00', '0', 'icic comense le resumée', 'FR', NULL, 1, 1),
(10, '2isbn9', 'Nom7', 3, 123, '0000-00-00', '0', 'icic comense le resumée', 'FR', NULL, 1, 1),
(11, '2isbn8', 'Nom8', 3, 123, '0000-00-00', '0', 'icic comense le resumée', 'FR', NULL, 1, 1);

INSERT INTO `Commentaire` (`NumCom`, `NoUser`, `NoLivre`, `Com`, `DateCom`) VALUES
(1, 1, 1, 'Test Commentaire', '2015-12-07'),
(2, 6, 1, 'Truc Biduble MAchin Truc', '2015-01-20');

