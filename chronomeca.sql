-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : dim. 02 juil. 2023 à 19:51
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `chronomeca`
--

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
                         `id` int NOT NULL,
                         `produit_id` int DEFAULT NULL,
                         `chemin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `image`
--

-- --------------------------------------------------------

--
-- Structure de la table `page`
--

CREATE TABLE `page` (
                        `id` int NOT NULL,
                        `page` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
                        `contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `page`
--

INSERT INTO `page` (`id`, `page`, `contenu`) VALUES
    (1, 'accueil', '<h1 class=\"center\" style=\"color: rgb(255, 0, 0);\">Bienvenue au Garage Chronomeca</h1>\r\n<p class=\"center\">&nbsp;</p>\r\n<p class=\"MsoNormal center\">Situ&eacute; &agrave; Meaux, nous assurons l&rsquo;entretien, la r&eacute;paration m&eacute;canique et &eacute;lectricit&eacute; de votre v&eacute;hicule quel que soit la marque.</p>\r\n<p class=\"MsoNormal center\">&nbsp;</p>\r\n<p class=\"MsoNormal center\">B&eacute;n&eacute;ficier d&rsquo;un conseil personnalis&eacute; selon l&rsquo;utilisation de votre v&eacute;hicule.</p>\r\n<p class=\"MsoNormal center\">&nbsp;</p>\r\n<p class=\"MsoNormal center\">Chaque devis est gratuit et une facture sans surprise, AUCUN suppl&eacute;ment ne pourra &ecirc;tre factur&eacute; au client sans son accord pr&eacute;alable.</p>\r\n<p class=\"MsoNormal center\">&nbsp;</p>\r\n<p class=\"MsoNormal center\">Avec Garage Chronomeca, la garantie constructeur est pr&eacute;serv&eacute;e sur TOUTES les op&eacute;rations d&rsquo;entretiens ou de r&eacute;parations.</p>\r\n<p class=\"MsoNormal center\">&nbsp;</p>\r\n<p class=\"MsoNormal center\">Notre &eacute;quipe d\'experts vous apportera la meilleur solution au meilleur tarif pour votre v&eacute;hicule tout en pr&eacute;servant la garantie constructeur.</p>\r\n<p class=\"MsoNormal center\">&nbsp;</p>\r\n<p class=\"MsoNormal center\">A chaque vidange, vous b&eacute;n&eacute;ficiez d\'un contr&ocirc;le complet et d\'un diagnostique &eacute;lectronique gratuit de votre v&eacute;hicule afin de vous assurer des performances maximal et d\'une dur&eacute;e de vie beaucoup plus longue.</p>\r\n<p class=\"MsoNormal center\">&nbsp;</p>\r\n<p class=\"MsoNormal center\">Interventions rapides, sans rendez-vous avec prise en charge imm&eacute;diate de votre v&eacute;hicule.</p>\r\n<p class=\"MsoNormal center\">&nbsp;</p>\r\n<p class=\"MsoNormal center\">&nbsp;Nous intervenons &eacute;galement sur rendez-vous, si vous le souhaitez.</p>\r\n<p class=\"MsoNormal center\">&nbsp;</p>\r\n<p class=\"MsoNormal center\">Nous sommes &agrave; votre disposition afin de vous conseiller et r&eacute;pondre &agrave; vos attentes.</p>\r\n<p class=\"MsoNormal center\">&nbsp;</p>\r\n<p class=\"MsoNormal center\">Chronomeca, c&rsquo;est la meilleur solution qualit&eacute;/comp&eacute;tence/prix.</p>\r\n<p class=\"MsoNormal center\">&nbsp;</p>\r\n<p class=\"center\">Afin d\'obtenir un devis par mail, merci de nous envoyer un mail &agrave; <span class=\"bold\" style=\"color: rgb(255, 0, 0);\">contact@chronomeca.fr</span> avec la carte grise en piece jointe ainsi que la r&eacute;paration / entretien souhait&eacute;s.</p>'),
(2, 'prestation', '<h4>Tarifs</h4>\r\n<p><span style=\"color: rgb(255, 0, 0);\">/!\\</span> Paiement par ch&egrave;que refus&eacute;</p>\r\n<p>Devis Gratuit&nbsp;</p>\r\n<p>Diagnostic &eacute;lectronique &rarr; 40&euro; HT&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<table style=\"border-collapse: collapse; width: 100%;\" border=\"1\"><colgroup><col style=\"width: 50.032%;\"><col style=\"width: 49.952%;\"></colgroup>\r\n<tbody>\r\n<tr>\r\n<td>\r\n<div>\r\n<div>Huile Moteur Standard :</div>\r\n</div>\r\n</td>\r\n<td>\r\n<div>\r\n<div>12 &euro;/Litre</div>\r\n</div>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>Huile Moteur Allemand :</td>\r\n<td>13 &euro;/Litre</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<table style=\"border-collapse: collapse; width: 100.013%; height: 67.2px;\" border=\"1\"><colgroup><col style=\"width: 25.0127%;\"><col style=\"width: 25.0127%;\"><col style=\"width: 25.0128%;\"><col style=\"width: 24.9328%;\"></colgroup>\r\n<tbody>\r\n<tr style=\"height: 22.4px;\">\r\n<td style=\"height: 22.4px;\">\r\n<div>\r\n<div>Tarif Horaire&nbsp;</div>\r\n</div>\r\n</td>\r\n<td style=\"height: 22.4px;\">HT 70,00&euro;</td>\r\n<td style=\"height: 22.4px;\">TVA* 14,00&euro;</td>\r\n<td style=\"height: 22.4px;\">TTC 84,00&euro;</td>\r\n</tr>\r\n<tr style=\"height: 22.4px;\">\r\n<td style=\"height: 22.4px;\">Batterie</td>\r\n<td style=\"height: 22.4px;\">440 A &rarr; 65&euro; HT&nbsp;</td>\r\n<td style=\"height: 22.4px;\">540 A &rarr; 75&euro; HT</td>\r\n<td style=\"height: 22.4px;\">680 A &rarr; 85&euro; HT</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p>TVA* : Taux de TVA appliqu&eacute; &agrave; 20%</p>\r\n<p>Date d\'entr&eacute;e en vigueur : 4 mars 2022</p>'),
(4, 'plan', '<h3>O&ugrave; nous trouver ? - Chronomeca</h3>\r\n<p>En transport en commun ?</p>\r\n<p>&Agrave; 5 minutes de la gare de Meaux&nbsp;</p>\r\n<p>BUS A, B, et D - Arr&ecirc;t : Pierris</p>\r\n<div class=\"horaires\">\r\n<table class=\"center\" style=\"border-collapse: collapse; width: 100%; border-width: 1px; background-color: #ffffff; border-style: solid;\" border=\"1\"><colgroup><col style=\"width: 33.4482%;\"><col style=\"width: 33.4482%;\"><col style=\"width: 33.0866%;\"></colgroup>\r\n<tbody>\r\n<tr style=\"background-color: #ff5c5c;\">\r\n<td><span style=\"font-family: verdana, geneva, sans-serif;\">Horaires</span></td>\r\n<td><span style=\"font-family: verdana, geneva, sans-serif;\">Matin</span></td>\r\n<td><span style=\"font-family: verdana, geneva, sans-serif;\">Apr&egrave;s midi</span></td>\r\n</tr>\r\n<tr>\r\n<td>Lundi</td>\r\n<td>8h30 - 12h30</td>\r\n<td>14h - 18h30</td>\r\n</tr>\r\n<tr>\r\n<td>Mardi</td>\r\n<td>8h30 - 12h30</td>\r\n<td>14h - 18h30</td>\r\n</tr>\r\n<tr>\r\n<td>Mercredi</td>\r\n<td>8h30 - 12h30</td>\r\n<td>14h - 18h30</td>\r\n</tr>\r\n<tr>\r\n<td>Jeudi</td>\r\n<td>8h30 - 12h30</td>\r\n<td>14h - 18h30</td>\r\n</tr>\r\n<tr>\r\n<td>Vendredi</td>\r\n<td>8h30 - 12h30</td>\r\n<td>14h - 18h30</td>\r\n</tr>\r\n<tr>\r\n<td>Samedi</td>\r\n<td>Ferm&eacute;</td>\r\n<td>Ferm&eacute;</td>\r\n</tr>\r\n<tr>\r\n<td>Dimanche</td>\r\n<td>Ferm&eacute;</td>\r\n<td>Ferm&eacute;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>'),
(5, 'contact', '<h3>&nbsp;</h3>\r\n<h3>Contact</h3>\r\n<div>\r\n<div>Vous pouvez nous contacter par t&eacute;l&eacute;phone, mail ou encore via le formulaire ci-dessous</div>\r\n<div>Pour toute question, merci de nous contacter :</div>\r\n<div>&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<div>&nbsp;n&deg; 09 81 89 62 38</div>\r\n<div><a href=\"mailto:contact@chronomeca.fr\">contact@chronomeca.fr</a></div>\r\n<div>&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<div>&nbsp;</div>\r\n</div>');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prix` decimal(10,2) DEFAULT NULL,
  `description` text,
  `km` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `prix`, `description`, `km`) VALUES
(40, 'BMW M5', 100.00, '100', 100),
(41, 'BMW M5', 2222.00, '2222', 2222),
(42, 'zz', 122.00, 'QDS', 1222);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produit_id` (`produit_id`);

--
-- Index pour la table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `page`
--
ALTER TABLE `page`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
