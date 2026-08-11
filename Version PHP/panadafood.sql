-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 29 nov. 2024 à 16:22
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `panadafood`
--

-- --------------------------------------------------------

--
-- Structure de la table `boissons`
--

CREATE TABLE `boissons` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `taille` varchar(10) NOT NULL,
  `prix` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `boissons`
--

INSERT INTO `boissons` (`id`, `nom`, `taille`, `prix`) VALUES
(1, 'Coca Cola', '33cl', 0.00),
(2, 'Oasis tropical', '33cl', 0.00),
(3, 'Eau cristalline', '50cl', 0.00),
(4, 'Oasis cassis framboise', '33cl', 0.00),
(5, 'Lipton pêche', '33cl', 0.00),
(6, 'Perrier', '', 0.00),
(7, 'Hawai', '33cl', 0.00);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`) VALUES
(1, 'Tacos'),
(2, 'Burgers'),
(3, 'Sandwichs'),
(4, 'Assiettes'),
(5, 'Tex-mex'),
(6, 'Bowls'),
(7, 'Pizzas'),
(8, 'Salades'),
(9, 'Desserts'),
(10, 'Menus Enfants');

-- --------------------------------------------------------

--
-- Structure de la table `formulaire_contact`
--

CREATE TABLE `formulaire_contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `mail` varchar(150) NOT NULL,
  `sujet` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `date_envoi` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `categorie` varchar(20) NOT NULL,
  `prix` decimal(5,2) NOT NULL,
  `photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `menu`
--

INSERT INTO `menu` (`id`, `nom`, `description`, `categorie`, `prix`, `photo`) VALUES
(1, 'Triple Steak', '3 steaks, oeuf, fromage, jambon de poulet Halal', 'Sandwichs', 0.00, ''),
(2, 'Boursin', 'Poulet mariné, Boursin, cheddar, salade, tomates, oignons', 'Sandwichs', 0.00, ''),
(3, 'Triple Chèvre', '3 steaks 45g boeuf, 3 fromages, chèvre, cheddar, salade, tomates, oignons', 'Sandwichs', 0.00, ''),
(4, 'Pana Blindé', '2 steaks, escalope de poulet, oeuf, cheddar, jambon poulet Halal', 'Sandwichs', 0.00, ''),
(5, 'Poulet Curry', 'Poulet curry, cheddar, salade, tomates, oignons', 'Sandwichs', 0.00, ''),
(6, 'Libanais', 'Viande de kebab, galette, salade, tomates, oignons', 'Sandwichs', 0.00, ''),
(7, 'Wrap de Luxe', '2 viandes au choix, fromage cheddar, galette, salade, tomates, oignons', 'Sandwichs', 0.00, ''),
(8, 'Formule double', '2 cheeseburgers (steaks 45 g), fromages cheddar, salade, tomates, oignons', 'Burgers', 0.00, ''),
(9, 'Master chicken', '2 tenders chicken, 2 fromages', 'Burgers', 0.00, ''),
(10, 'Country boeuf', 'Steak 80gr, galette de pomme de terre, 2 fromages cheddar', 'Burgers', 0.00, ''),
(11, 'Pana royal', '3 steaks 45gr, 3 cheddars, oeuf, jambon', 'Burgers', 0.00, ''),
(12, 'Chicken burger', 'Galette chicken, fromage', 'Burgers', 0.00, ''),
(13, 'Pana fish', 'Poisson pané, fromage', 'Burgers', 0.00, ''),
(14, 'Pana original', 'Kefta orientale, cheddar, cornichon, oignons fries', 'Burgers', 0.00, ''),
(15, 'Pana viking', 'Steak 180gr, oeuf, jambon, fromage, oignons rouge', 'Burgers', 0.00, ''),
(16, 'Tacos M', '1 viande au choix', 'Tacos', 0.00, ''),
(17, 'Tacos L', '2 viandes au choix', 'Tacos', 0.00, ''),
(18, 'Tacos XL', '3 viandes au choix', 'Tacos', 0.00, ''),
(19, 'Indien', 'Poulet curry, mozza, cheddar', 'Tacos', 0.00, ''),
(20, 'Western', 'Cordon bleu, tenders, galette de pomme de terre, cheddar', 'Tacos', 0.00, ''),
(21, 'Pana Américain', '3 steaks, 3 cheddars oeuf, jambon', 'Tacos', 0.00, ''),
(22, 'Margherita', 'Sauce tomate, fromage', 'Pizzas', 0.00, ''),
(23, 'Verdura', 'Sauce tomate, mozzarella, champignons, poivrons, pomme de terre, olives, oignons', 'Pizzas', 0.00, ''),
(24, 'Thon', 'Sauce tomate, mozzarella, thon, olives', 'Pizzas', 0.00, ''),
(25, 'Orientale', 'Sauce tomate, mozzarella, merguez, poivrons, oignons rouges, oeuf, olives', 'Pizzas', 0.00, ''),
(26, 'Reine', 'Sauce tomate, jambon, champignons, mozzarella', 'Pizzas', 0.00, ''),
(27, 'Pizza du chef', 'Sauce tomate, mozzarella, thon, chorizo, gorgonzola', 'Pizzas', 0.00, ''),
(28, 'Bolognaise', 'Sauce tomate, viande hachée, champignons, mozzarella', 'Pizzas', 0.00, ''),
(29, 'Mexicaine', 'Sauce tomate, viande hachée, merguez, mozzarella, poivrons', 'Pizzas', 0.00, ''),
(30, 'Salmone', 'Crème fraîche, pomme de terre, saumon', 'Pizzas', 0.00, ''),
(31, '4 fromages', 'Crème fraîche, mozzarella, chèvre, cheddar, reblochon', 'Pizzas', 0.00, ''),
(32, 'Savoyard', 'Crème fraîche, lardons, mozzarella, pomme de terre, reblochon', 'Pizzas', 0.00, ''),
(33, 'Indienne', 'Crème fraîche, poulet curry, oignons rouges, mozzarella, pomme de terre', 'Pizzas', 0.00, ''),
(34, 'Chèvre miel', 'Crème fraîche, chèvre, miel, pomme de terre, mozzarella', 'Pizzas', 0.00, ''),
(35, 'Pana pizza', 'Crème fraîche, mozzarella, poulet, jambon, cheddar', 'Pizzas', 0.00, ''),
(36, 'Pana raclette', 'Crème fraîche, pomme de terre, raclette, jambon', 'Pizzas', 0.00, ''),
(37, 'Pizza kebab', 'Sauce tomate, viande de kebab, mozza, sauce pita', 'Pizzas', 0.00, ''),
(38, 'Pizza kebab', 'Crème fraîche, viande de kebab, mozza, sauce pita', 'Pizzas', 0.00, ''),
(39, 'Kefta', 'Viande hachée maison', 'Assiettes', 0.00, ''),
(40, 'Kebab', 'Viande de kebab', 'Assiettes', 0.00, ''),
(41, 'Curry', 'Escalope de poulet', 'Assiettes', 0.00, ''),
(42, 'Forestière', 'Escalope de poulet, champignon et sauce maison', 'Assiettes', 0.00, ''),
(43, 'Carbonara', 'Escalope de poulet, lardons, sauce maison', 'Assiettes', 0.00, ''),
(44, 'Assiettes Mix', '3 viandes au choix', 'Assiettes', 0.00, ''),
(45, 'Simple', '1 viande au choix', 'Bowls', 0.00, ''),
(46, 'Double', '2 viandes au choix', 'Bowls', 0.00, ''),
(47, 'Maxi', '3 viandes au choix', 'Bowls', 0.00, ''),
(48, 'Salade Mix', 'Salade, tomates, oignons, olives, maïs', 'Salades', 0.00, ''),
(49, 'Salade Poulet', 'Salade, tomates, oignons, olives, maïs, tenders poulet', 'Salades', 0.00, ''),
(50, 'Salade Saumon', 'Salade, tomates, oignons, olives, maïs, saumon', 'Salades', 0.00, ''),
(51, 'Tenders', '4 pièces', 'Tex-Mex', 0.00, ''),
(52, 'Nems poulet', '4 pièces', 'Tex-Mex', 0.00, ''),
(53, 'Jalapenos', '5 pièces', 'Tex-Mex', 0.00, ''),
(54, 'Wings', '5 pièces', 'Tex-Mex', 0.00, ''),
(55, 'Nuggets', '5 pièces', 'Tex-Mex', 0.00, ''),
(56, 'Mozza sticks', '5 pièces', 'Tex-Mex', 0.00, ''),
(57, 'Tiramisu', '', 'Desserts', 0.00, ''),
(58, 'Tarte au Daim', '', 'Desserts', 0.00, ''),
(59, 'Menu enfant nuggets', 'Nuggets, frites, Capri-Sun et une surprise', 'Menus Enfants', 0.00, ''),
(60, 'Menu enfant cheeseburger', 'Cheeseburger, frites, Capri-Sun et une surprise', 'Menus Enfants', 0.00, '');

-- --------------------------------------------------------

--
-- Structure de la table `sauces`
--

CREATE TABLE `sauces` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `sauces`
--

INSERT INTO `sauces` (`id`, `nom`) VALUES
(1, 'Algérienne'),
(2, 'Barbecue'),
(3, 'Biggy'),
(4, 'Mayonnaise'),
(5, 'Samouraï'),
(6, 'Ketchup'),
(7, 'Andalouse'),
(8, 'Blanche');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `boissons`
--
ALTER TABLE `boissons`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `formulaire_contact`
--
ALTER TABLE `formulaire_contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sauces`
--
ALTER TABLE `sauces`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `boissons`
--
ALTER TABLE `boissons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `formulaire_contact`
--
ALTER TABLE `formulaire_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT pour la table `sauces`
--
ALTER TABLE `sauces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
