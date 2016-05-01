-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 27 Avril 2016 à 14:14
-- Version du serveur :  5.5.44-0+deb8u1
-- Version de PHP :  5.6.13-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `2014-biblionet_base`
--

-- --------------------------------------------------------

--
-- Structure de la table `Auteur`
--

CREATE TABLE IF NOT EXISTS `Auteur` (
`NumAuteur` int(3) NOT NULL,
  `NomAuteur` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Auteur`
--

INSERT INTO `Auteur` (`NumAuteur`, `NomAuteur`) VALUES
(1, 'Anne Robillard'),
(2, 'J.K. Rowling'),
(3, 'R. L. Stine'),
(4, 'Stephen King'),
(5, 'Douglas Preston'),
(6, 'Zep');

-- --------------------------------------------------------

--
-- Structure de la table `Commande`
--

CREATE TABLE IF NOT EXISTS `Commande` (
`NumCommande` int(3) NOT NULL,
  `NoUsers` int(3) NOT NULL,
  `DateCommande` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Commande`
--

INSERT INTO `Commande` (`NumCommande`, `NoUsers`, `DateCommande`) VALUES
(1, 7, '2016-04-25');

-- --------------------------------------------------------

--
-- Structure de la table `Commentaire`
--

CREATE TABLE IF NOT EXISTS `Commentaire` (
`NumCom` int(3) NOT NULL,
  `NoUser` int(3) NOT NULL,
  `NoLivre` int(3) NOT NULL,
  `Com` text CHARACTER SET latin1 NOT NULL,
  `DateCom` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Commentaire`
--

INSERT INTO `Commentaire` (`NumCom`, `NoUser`, `NoLivre`, `Com`, `DateCom`) VALUES
(4, 7, 8, ';;;', '2016-04-25 14:27:58'),
(5, 7, 8, 'mmm', '2016-04-25 14:28:04'),
(6, 7, 8, 'mm', '2016-04-25 14:28:08');

-- --------------------------------------------------------

--
-- Structure de la table `Edition`
--

CREATE TABLE IF NOT EXISTS `Edition` (
`NumEdition` int(3) NOT NULL,
  `NomEdition` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Edition`
--

INSERT INTO `Edition` (`NumEdition`, `NomEdition`) VALUES
(1, 'Michel Lafon'),
(2, 'Gallimard jeunesse'),
(3, 'j''ai Lu'),
(4, 'Bayard Jeunesse'),
(5, 'Glénat');

-- --------------------------------------------------------

--
-- Structure de la table `Genre`
--

CREATE TABLE IF NOT EXISTS `Genre` (
`NumGenre` int(3) NOT NULL,
  `NomGenre` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Genre`
--

INSERT INTO `Genre` (`NumGenre`, `NomGenre`) VALUES
(1, 'Fantastique'),
(2, 'Science Fiction'),
(3, 'Horreur'),
(4, 'Bande Dessiné');

-- --------------------------------------------------------

--
-- Structure de la table `Livre`
--

CREATE TABLE IF NOT EXISTS `Livre` (
`NumLivre` int(3) NOT NULL,
  `CodeISBN` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Nom` varchar(200) CHARACTER SET latin1 NOT NULL,
  `NumAuteur` int(3) NOT NULL,
  `QuantiteStock` int(3) NOT NULL,
  `DateSortie` date NOT NULL,
  `Tarif` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Resume` text CHARACTER SET latin1,
  `Langue` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Couverture` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `NoEdition` int(3) NOT NULL,
  `NoGenre` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Livre`
--

INSERT INTO `Livre` (`NumLivre`, `CodeISBN`, `Nom`, `NumAuteur`, `QuantiteStock`, `DateSortie`, `Tarif`, `Resume`, `Langue`, `Couverture`, `NoEdition`, `NoGenre`) VALUES
(1, '2749906253', 'Les chevaliers d''Emeraude - Tome 1 : Le feu dans le ciel\r\n', 1, 10, '2007-02-23', '15.3', 'Kira, l’enfant à la peau mauve et aux oreilles pointues, a été confiée aux Chevaliers d’Émeraude, de redoutables guerriers magiciens. Une jeune apprentie que les membres de cet ordre ressuscité par le roi Émeraude Ier devront protéger. Car l’enfant semble intéresser au plus haut point l’Empereur noir et son armée d’hommes-insectes. Nul ne sait pourquoi. Mais cet être terrible, défait il y a cinq cents ans par les premiers Chevaliers d’Émeraude, menace d’envahir le royaume d’Enkidiev. Ce qui est certain, c’est que Kira a un rôle à tenir dans la destruction d’Amecareth. Elle devra protéger le porteur de lumière, comme le dit la prophétie. Depuis Irianeth, le pays des hommes-insectes, jusqu’au pays des elfes, depuis les nombreuses provinces aux noms de pierres précieuses jusqu’au pays des Ombres, Kira et les sept chevaliers auront fort à faire pour repousser les forces du Mal. Un long cycle palpitant de magie et d’aventure.', 'Français', 'Ressources/img/Livres/ChevaliersEmeuraude_Tome1.png', 1, 1),
(2, '2749906628', 'Les chevaliers d''Emeraude - Tome 2 : Les dragons de l''empereur noir\r\n', 1, 10, '2007-02-23', '15.3', 'Après des siècles de paix, les armées de l''Empereur Noir Amecareth envahissent soudain les royaumes du continent d''Enkidiev. Les Chevaliers d''Émeraude doivent alors protéger Kira, l''enfant magique liée à la prophétie et qui peut sauver le monde. Tome 2 : Les Dragons de l''Empereur Noir Comment ces monstres redoutables parviennent-ils à s''infiltrer sur le territoire d''Enkidiev sans être repérés par les Chevaliers d''Émeraude ? En plus, Asbeth, le sorcier de l''Empereur, s''apprête à enlever Kira... Afin d''accroître sa puissance avant d''affronter ce redoutable homme-oiseau, le chef des Chevaliers, Wellan, se rend au Royaume des Ombres où il doit recevoir l''enseignement des Maîtres Magiciens. Là, il va découvrir un terrible secret...', 'Français', 'Ressources/img/Livres/ChevaliersEmeuraude_Tome2.png', 1, 1),
(3, '2749907470\r\n', 'Les chevaliers d''Emeraude - Tome 3 : Piège au royaume des ombres', 1, 10, '2007-10-31', '15.3', 'Après des siècles de paix, les armées de l''Empereur Noir Amecareth envahissent soudain les royaumes du continent d''Enkidiev. Les Chevaliers d''émeraude doivent alors protéger Kira, l''enfant magique liée à la prophétie et qui peut sauver le monde.\r\nÂgée de 15 ans, Kira réalise enfin son rêve le plus cher et devient Écuyer d''Émeraude. Accompagnant désormais les Chevaliers en mission, la princesse mauve se révèle une magicienne puissante lors des combats contre l''armée des hommes-insectes.\r\nLe porteur de lumière, personnage central de la prophétie, voit enfin le jour.\r\nAmecareth déploie alors toutes ses forces pour éliminer celui qui aura pour mission de détruire son empire. Le Magicien de Cristal saura t-il protéger le nouveau-né des sinistres machinations de l''empereur Noir ? \r\nRepoussant l''ennemi, Wellan et ses vaillants Chevaliers devront au même moment répondre à l''appel de détresse des hybrides du Royaume des Ombres en affrontant de terribles dangers dans ses innombrables tunnels. Ils découvriront également que le Monde des Esprits n''est pas ce qu''il paraît…', 'Français', 'Ressources/img/Livres/ChevaliersEmeuraude_Tome3.png', 1, 1),
(4, '2749907837\r\n', 'Les chevaliers d''Emeraude - Tome 4 : La princesse rebelle', 1, 10, '2008-01-23', '15.3', 'Âgée de 19 ans, Kira devient enfin Chevalier et épouse Sage d’Émeraude, ignorant qu’il est possédé par l’esprit du renégat Onyx. Lorsque ce dernier se décide à se venger d’Abnar, les Chevaliers d’Émeraude doivent déployer toute leur force pour l’empêcher de détruire leur allié immortel.\r\nRedevenu lui-même, Sage est confronté à une vie dont il n’a aucun souvenir. Soumis à nouveau aux épreuves magiques d’Élund, le jeune guerrier réussira-t-il à conserver son titre ?\r\nTandis que les célébrations organisées en l’honneur de Parandar, le chef des dieux, battent leur plein, un homme agonisant arrive dans la grande cour du Château d’Émeraude et annonce aux Chevaliers que des créatures inconnues déciment la côte. N’écoutant que leur cœur, les valeureux soldats se précipitent au secours des villages éprouvés. Quel piège Amecareth leur a-t-il encore tendu ?', 'Français', 'Ressources/img/Livres/ChevaliersEmeuraude_Tome4.png', 1, 1),
(5, '2749908728', 'Les chevaliers d''Emeraude - Tome 5 : L''île des lézards', 1, 10, '2008-10-28', '15.3', 'N’écoutant que leur courage, les Chevaliers d’Émeraude partent au secours des femmes et des fillettes enlevées au Royaume de Cristal par les lézards sur leur île lointaine…\r\nWellan n’emmène avec lui que quelques hommes et laisse les autres serviteurs d’Enkidiev de garde au royaume de Zénor. Kira fait partie de cette périlleuse expédition, de même que le Magicien de Cristal qui leur réserve une surprise extraordinaire…\r\n\r\nPendant que ses compagnons voguent sur l’océan, Dempsey veille sur les jeunes Chevaliers et sur les Écuyers. Mais une nouvelle menace plane à l’horizon. Un serviteur de l’Empereur Noir, encore plus cruel que le sorcier Asbeth, surgit des flots et s’en prend aux plus vulnérables.\r\nPris au piège, Dempsey et ses frères d’armes devront affronter seuls ce\r\npuissant ennemi. Parviendront-ils à se sauver et à protéger le continent ?', 'Français', 'Ressources/img/Livres/ChevaliersEmeuraude_Tome5.png', 1, 1),
(6, '2749909392', 'Les chevaliers d''Emeraude - Tome 6 : Le journal d''Onyx', 1, 10, '2009-01-22', '15.3', 'Grâce à Kira, le Chevalier Wellan découvre le journal du renégat et y apprend le sort qui sera réservé à ses soldats si l’Empereur Noir décide d’adopter la même stratégie militaire que jadis. Effrayé, il tente de convaincre le Magicien de Cristal d’augmenter ses pouvoirs magiques.\r\nPendant ce temps, le sorcier Asbeth envoie un nouvel ennemi à l’attaque d’Enkidiev.', 'Français', 'Ressources/img/Livres/ChevaliersEmeuraude_Tome6.png', 1, 1),
(7, '2749909694', 'Les chevaliers d''Emeraude - Tome 7 : L''enlèvement', 1, 10, '2008-05-22', '15.3', 'Une disparition tragique bouleverse la vie du Château d''Émeraude. Wellan reçoit en héritage un curieux bijou doté d''un fascinant pouvoir magique. Au même moment, il découvre qu’Onyx est revenu en empruntant un nouveau corps... Devra-t-il une fois de plus affronter le renégat ?', 'Français', 'Ressources/img/Livres/ChevaliersEmeuraude_Tome7.png', 1, 1),
(8, '2070643026', 'Harry Potter - Tome 1 : Harry Potter à l''école des sorciers', 2, 9, '1998-11-16', '8.5', 'Le jour de ses onze ans, Harry Potter, un orphelin élevé par un oncle et une tante qui le détestent, voit son existence bouleversée. Un géant vient le chercher pour l''emmener à Poudlard, une école de sorcellerie !\r\nVoler en balai, jeter des sorts, combattre les trolls : Harry Potter se révèle un sorcier doué. Mais un mystère entoure sa naissance et l''effroyable V..., le mage dont personne n''ose prononcer le nom.', 'Français', 'Ressources/img/Livres/HarryPotter_Tome1.png', 2, 2),
(9, '2070643034', 'Harry Potter - Tome 2 : Harry Potter et la chambre des secrets', 2, 10, '1999-03-23', '8.5', 'Une rentrée fracassante en voiture volante, une étrange malédiction qui s''abat sur les élèves, cette deuxième année à l''école des sorciers ne s''annonce pas de tout repos ! Entre les cours de potions magiques, les matches de Quidditch et les combats de mauvais sorts, Harry et ses amis Ron et Hermione trouveront-ils le temps de percer le mystère de la Chambre des Secrets ?', 'Français', 'Ressources/img/Livres/HarryPotter_Tome2.png', 2, 2),
(10, '2070643042', 'Harry Potter - Tome 3 : Harry Potter et le prisonnier d''Azkaban\r\n', 2, 10, '1999-10-19', '8.9', 'Sirius Black, le dangereux criminel qui s''est échappé de la forteresse d''Azkaban, recherche Harry Potter. C''est donc sous bonne garde que l''apprenti sorcier fait sa troisième rentrée. Au programme : des cours de divination, la fabrication d''une potion de ratatinage, le dressage des hippogriffes... Mais Harry est-il vraiment à l''abri du danger qui le menace ?', 'Français', 'Ressources/img/Livres/HarryPotter_Tome3.png', 2, 2),
(11, '2070643050', 'Harry Potter - Tome 4 : Harry Potter et la coupe de feu\r\n', 2, 10, '2000-11-29', '13.2', 'Après un horrible été chez les Dursley, Harry Potter entre en quatrième année au collège de Poudlard. À quatorze ans, il voudrait simplement être un jeune sorcier comme les autres, retrouver ses amis Ron et Hermione, assister avec eux à la Coupe du Monde de Quidditch, apprendre de nouveaux sortilèges et essayer des potions inconnues. Une grande nouvelle l''attend à son arrivée : la tenue à Poudlard d''un tournoi de magie entre les plus célèbres écoles de sorcellerie. Déjà les spectaculaires délégations étrangères font leur entrée... Harry se réjouit. Trop vite. Il va se trouver plongé au coeur des événements les plus dramatiques qu''il ait jamais eu à affronter.', 'Français', 'Ressources/img/Livres/HarryPotter_Tome4.png', 2, 2),
(12, '2070643069', 'Harry Potter - Tome 5 : Harry Potter et l''Ordre du Phenix\r\n', 2, 10, '2003-12-03', '14.9', '"La journée la plus chaude de l''été, jusqu''à présent en tout cas, tirait à sa fin et un silence somnolent s''était installé sur les grandes maisons aux angles bien droits de Privet Drive... La seule personne encore dehors à cette heure-ci était un jeune homme étendu de tout son long au milieu d''un massif de fleurs, devant le numéro quatre de la rue."\r\nAinsi commence, après trois longues années d''attente, le tome 5 de Harry Potter. Jean-François Ménard affûte sereinement ses crayons et « entrera en Harry Potter » le 21 juin précisément, pour traduire le livre le plus attendu dans le monde par toutes les générations.', 'Français', 'Ressources/img/Livres/HarryPotter_Tome5.png', 2, 2),
(13, '2070643077', 'Harry Potter - Tome 6 : Harry Potter et le Prince de Sang-Mêlé\r\n', 2, 10, '2005-10-01', '13.2', 'Dans un monde de plus en plus inquiétant, Harry se prépare à retrouver Ron et Hermione. Bientôt, ce sera la rentrée à Poudlard, avec les autres étudiants de sixième année. Mais pourquoi le professeur Dumbledore vient-il en personne chercher Harry chez les Dursley? Harry, Ron et Hermione entrent en sixième année à Poudlard où ils vont vivre leur dernière année avant la majorité qui est fixée, chez les sorciers, à l’âge de dix-sept ans. Des événements particulièrement marquants vont contribuer à faire passer Harry du statut d’adolescent à celui d’homme. Ce tome, sur fond de guerre contre un Voldemort plus puissant que jamais, se révèle plus sombre que les précédents. Secrets, alliances et trahisons conduisent aux événements les plus dramatiques qu’Harry ait eu à affronter. Mais, en dépit de ces épisodes tragiques, il émane du texte un sentiment général d’allégresse et de joie de vivre dû à l’humour, aux preuves d’amitié, aux scènes romantiques, à de nouvelles trouvailles poétiques de J. K. Rowling, mais surtout à la sérénité retrouvée de Harry qui reprend confiance en lui. Ce dernier se plonge également dans les souvenirs d’enfance de Voldemort. Il va ainsi mieux comprendre la personnalité de son adversaire car même cet être monstrueux possède une part d’humanité. Le sens des responsabilités et du sacrifice revêtent, ici encore, une dimension particulièrement importante', 'Français', 'Ressources/img/Livres/HarryPotter_Tome6.png', 2, 2),
(14, '2070643085', 'Harry Potter - Tome 7 : Harry Potter et les Reliques de la Mort\r\n', 2, 10, '2006-10-26', '13.2', 'Cet été-là, Harry atteint ses dix-sept ans, l’âge de la majorité pour un sorcier, et s’apprête à faire face à son destin. Soutenu par Ron et Hermione, Harry se consacre pleinement à la mission confiée par Dumbledore avant de mourir, la chasse aux Horcruxes. Mais le Seigneur des Ténèbres règne désormais en maître absolu. Traqués, en exil, les trois fidèles amis vont connaître une solitude sans précédent, où leur courage, leurs choix et leurs sacrifices seront déterminants dans la lutte contre les forces du mal. Leur quête croisera celle des Reliques de la Mort, et fera surgir du passé des révélations capitales et parfois douloureuses. Ces épreuves conduiront Harry, sans détour, vers sa destinée, l’affrontement final avec Lord Voldemort.', 'Français', 'Ressources/img/Livres/HarryPotter_Tome7.png', 2, 2),
(15, '229034589X', 'La tour sombre - Tome 1 : Le Pistolero', 4, 0, '2006-03-01', '6.1', '" L''homme en noir fuyait à travers le désert et le pistolero le poursuivait... " Dernier aventurier d''une époque qui ressemble à la nôtre, Roland le Pistolero est poussé par une force inconnue. Au-delà de cette chasse à l''homme, ce qu''il cherche, c''est la Tour. A la croisée des temps, lieu de rencontre de notre univers et d''autres mondes... Voilà vingt ans que dure cette poursuite. Pour Roland, l''enjeu est maintenant de rattraper l''homme en noir. Lui seul - il l''a vu en rêve - peut l''éclairer sur son avenir. Le sorcier doit tirer trois cartes qui vont lui ouvrir trois portes. Vers l''enfer ou le paradis ? Nul ne le sait encore. En attendant, tous deux marchent. Hallucinés. Ne pouvant se soustraire l''un à l''autre. Sous l''œil vigilant du gardien de la Tour...', 'Français', 'Ressources/img/Livres/TourSombre_Tome1.png', 3, 3),
(16, '2290345903', 'La tour sombre - Tome 2 : Les trois cartes', 4, 10, '2006-03-01', '8.5', 'Echoué sur une grève déserte, grièvement blessé, Roland le Pistolero sent qu''il va mourir. Mais son unique obsession demeure la recherche de la Tour Sombre. Reprenant son périple, il croisera trois portes magiques, qui vont l''amener à entrer en contact avec ses futurs compagnons. Eddie le junkie, qui le projette dans l''Amérique des années 1980 ; Odetta, la Dame d''Ombres, ange et démon, surgie d''une époque antérieure ; et enfin Jake, un enfant qu''il a souvent vu en rêve ou aperçu d''un monde à l''autre. Un gamin sans lequel il ne peut poursuivre sa quête. Pour le convaincre, il ira jusqu''aux portes de la folie, mais le temps lui est compté...', 'Français', 'Ressources/img/Livres/TourSombre_Tome2.png', 3, 3),
(17, '2290345911', 'La tour sombre - Tome 3 : Terres perdues', 4, 10, '2006-04-06', '8.1', 'Liés par le destin qui a fait d''eux des errants, Roland, Eddie et Susannah mettent le cap vers les terres perdues où la Tour Sombre pourrait se situer. Hanté par le souvenir de Jack, Roland le Pistolero perd l''esprit. Comment renouer le lien avec ce gamin au cœur tendre ? Pour rapprocher les mondes qui les séparent, il lui faut une clé. Et seul Eddie peut la façonner. Encore faudrait-il qu''il le veuille... Et même s''ils se retrouvaient, il resterait encore une ultime étape : Lud, la cité morte. C''est là que les attend Blaine le Mono, un train si rapide qu''il traverse l''univers à la vitesse du son. Le train de la dernière chance pour ces pèlerins de l''impossible...', 'Français', 'Ressources/img/Livres/TourSombre_Tome3.png', 3, 3),
(18, '2290083151', 'Labyrinthe fatal', 5, 10, '2016-05-04', '8', 'Soirée paisible au 891 Riverside Drive, la résidence new-yorkaise d’Aloysius Pendergast… jusqu’à ce qu’un inconnu dépose devant la porte d’entrée le cadavre de l’un des pires ennemis de l’inspecteur… L’autopsie révèle une surprise de taille : dans l’estomac du défunt se trouve une turquoise. Une pierre qui n’est extraite que dans certaines mines de Californie. Pendergast part à la recherche de la mine d’où provient cette mystérieuse pierre précieuse. Mais le tueur rusé et déterminé qui l’observe dans l’ombre pour se venger d’un acte odieux commis par l’un de ses ancêtres lui a tendu un piège.\r\nUne nouvelle fois, Pendergast va regarder la mort en face. Un épisode qui s’achèvera dans les couloirs labyrinthiques du Museum d’Histoire naturelle de New York, théâtre de Relic et du Grenier des enfers, où se déroulèrent ses premières aventures.', 'Français', 'Ressources/img/Livres/LabyrintheFatal.png', 3, 3),
(19, '2290083151', 'Chair de poule', 3, 9, '2016-01-27', '8', 'Zach Cooper emménage avec sa mère dans la petite ville de Madison, dans le Wisconsin, et fait la connaissance de sa jeune voisine Hannah. Elle est la fille de R. L. Stine, un auteur à succès de romans d''épouvante. Mais ce dernier interdit à Zach de s''approcher de sa fille. Un soir, Zach entend des cris ... et pense qu''Hannah est en danger. Il décide alors avec son copain Champ de pénétrer dans la maison de l''écrivain ! Dans la bibliothèque, ils découvrent des livres Chair de poule fermés par une serrure... Ils vont libérer par mégarde toutes les créatures issues de l''imagination du romancier. Quand les garçons voient apparaître devant eux l''Abominable Homme des Neiges de Pasadena, ils comprennent que rien ne sera plus comme avant...', 'Français', 'Ressources/img/Livres/ChairDePoule.png', 4, 3);

-- --------------------------------------------------------

--
-- Structure de la table `Quantite`
--

CREATE TABLE IF NOT EXISTS `Quantite` (
  `NoLivres` int(3) NOT NULL,
  `NoCommande` int(3) NOT NULL,
  `Quantite` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Quantite`
--

INSERT INTO `Quantite` (`NoLivres`, `NoCommande`, `Quantite`) VALUES
(8, 1, 1),
(19, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `Utilisateur`
--

CREATE TABLE IF NOT EXISTS `Utilisateur` (
`NumUser` int(3) NOT NULL,
  `Nom` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Prenom` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Password` varchar(50) CHARACTER SET latin1 NOT NULL,
  `AdresseMail` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Adresse` varchar(50) CHARACTER SET latin1 NOT NULL,
  `CodePostal` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Ville` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Utilisateur`
--

INSERT INTO `Utilisateur` (`NumUser`, `Nom`, `Prenom`, `Password`, `AdresseMail`, `Adresse`, `CodePostal`, `Ville`) VALUES
(1, 'Martin', 'Alphonse', '81d64965a855fadc8c2660af522c347a93db954a', 'oceane@gmail.com', '23 rue des Enfants', '52140', 'Bisounours'),
(2, 'Patard', 'Nicolas', 'b612164480588d0a315c36acec30a35d2b23b080', 'nicolas.patard@laposte.net', '34 rue jean-francois millet', '53950', 'louvernÃ©'),
(7, 'Martin', 'Océane', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@admin.com', 'rue de la Jambe', '53000', 'Laval'),
(8, 'Dupont', 'albert', '7aa129f67fde68c6d88aa58b8b8c5c28eb7dd3a3', 'dupont.albert@gmail.com', '23 rue des Enfants', '53960', 'Bonchamp');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Auteur`
--
ALTER TABLE `Auteur`
 ADD PRIMARY KEY (`NumAuteur`);

--
-- Index pour la table `Commande`
--
ALTER TABLE `Commande`
 ADD PRIMARY KEY (`NumCommande`), ADD KEY `NoUsers` (`NoUsers`);

--
-- Index pour la table `Commentaire`
--
ALTER TABLE `Commentaire`
 ADD PRIMARY KEY (`NumCom`), ADD KEY `NoUser` (`NoUser`), ADD KEY `NoLivre` (`NoLivre`);

--
-- Index pour la table `Edition`
--
ALTER TABLE `Edition`
 ADD PRIMARY KEY (`NumEdition`);

--
-- Index pour la table `Genre`
--
ALTER TABLE `Genre`
 ADD PRIMARY KEY (`NumGenre`);

--
-- Index pour la table `Livre`
--
ALTER TABLE `Livre`
 ADD PRIMARY KEY (`NumLivre`), ADD KEY `NoEdition` (`NoEdition`), ADD KEY `NoGenre` (`NoGenre`), ADD KEY `Livre_ibfk_3` (`NumAuteur`);

--
-- Index pour la table `Quantite`
--
ALTER TABLE `Quantite`
 ADD PRIMARY KEY (`NoLivres`,`NoCommande`), ADD KEY `NoCommande` (`NoCommande`);

--
-- Index pour la table `Utilisateur`
--
ALTER TABLE `Utilisateur`
 ADD PRIMARY KEY (`NumUser`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Auteur`
--
ALTER TABLE `Auteur`
MODIFY `NumAuteur` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `Commande`
--
ALTER TABLE `Commande`
MODIFY `NumCommande` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `Commentaire`
--
ALTER TABLE `Commentaire`
MODIFY `NumCom` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `Edition`
--
ALTER TABLE `Edition`
MODIFY `NumEdition` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `Genre`
--
ALTER TABLE `Genre`
MODIFY `NumGenre` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `Livre`
--
ALTER TABLE `Livre`
MODIFY `NumLivre` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT pour la table `Utilisateur`
--
ALTER TABLE `Utilisateur`
MODIFY `NumUser` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Commande`
--
ALTER TABLE `Commande`
ADD CONSTRAINT `Commande_ibfk_1` FOREIGN KEY (`NoUsers`) REFERENCES `Utilisateur` (`NumUser`);

--
-- Contraintes pour la table `Commentaire`
--
ALTER TABLE `Commentaire`
ADD CONSTRAINT `Commentaire_ibfk_1` FOREIGN KEY (`NoUser`) REFERENCES `Utilisateur` (`NumUser`),
ADD CONSTRAINT `Commentaire_ibfk_2` FOREIGN KEY (`NoLivre`) REFERENCES `Livre` (`NumLivre`);

--
-- Contraintes pour la table `Livre`
--
ALTER TABLE `Livre`
ADD CONSTRAINT `Livre_ibfk_1` FOREIGN KEY (`NoEdition`) REFERENCES `Edition` (`NumEdition`),
ADD CONSTRAINT `Livre_ibfk_2` FOREIGN KEY (`NoGenre`) REFERENCES `Genre` (`NumGenre`),
ADD CONSTRAINT `Livre_ibfk_3` FOREIGN KEY (`NumAuteur`) REFERENCES `Auteur` (`NumAuteur`);

--
-- Contraintes pour la table `Quantite`
--
ALTER TABLE `Quantite`
ADD CONSTRAINT `Quantite_ibfk_1` FOREIGN KEY (`NoLivres`) REFERENCES `Livre` (`NumLivre`),
ADD CONSTRAINT `Quantite_ibfk_2` FOREIGN KEY (`NoCommande`) REFERENCES `Commande` (`NumCommande`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
