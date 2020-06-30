-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2020 at 01:41 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perfectcup`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_client` int(15) NOT NULL,
  `item_id` int(15) NOT NULL,
  `item_title` varchar(50) NOT NULL,
  `item_image` varchar(100) NOT NULL,
  `item_price` int(50) NOT NULL,
  `item_quantity` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `panier`
--

CREATE TABLE `panier` (
  `client_id` int(15) NOT NULL,
  `item_id` int(20) NOT NULL,
  `item_title` varchar(50) NOT NULL,
  `item_image` varchar(200) NOT NULL,
  `item_price` int(50) NOT NULL,
  `item_quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

CREATE TABLE `produits` (
  `id_produit` int(15) NOT NULL,
  `titre_produit` varchar(30) NOT NULL,
  `image_produit` varchar(30) NOT NULL,
  `desc_produit` varchar(300) NOT NULL,
  `infos_produit` varchar(500) NOT NULL,
  `prix_produit` int(50) NOT NULL,
  `date_produit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`id_produit`, `titre_produit`, `image_produit`, `desc_produit`, `infos_produit`, `prix_produit`, `date_produit`) VALUES
(2, 'Expresso', 'Café.jfif', '  Retrouvez les meilleurs cafés du monde, venus du Guatemala, de Colombie ou encore du Costa Rica, dans une dosette expresso ESE.                      ', '       Café Arabica : Le café arabica provient d\'une variété de caféier la plus répandue au monde.\r\n\r\nL’arabica se distingue par sa grande finesse, ses arômes plus développés que ceux du robusta et sa faible teneur en caféine. \r\n\r\n\r\nCafé Robusta : Le café robusta tient son nom de la robustesse et de la résistance de son arbre. Ce caféier peut atteindre près d’une dizaine de mètres et résiste à de nombreuses maladies, insectes ou conditions météorologiques extrêmes.\r\n\r\nLe robusta présente un arôm', 40, '0000-00-00'),
(3, 'Nespresso', 'FOTOTAPETSARIA-AROMA-KAFE » Τα', '       Avec la gamme Original, expérimentez un authentique Espresso doux et fruité au format court, avec ou sans lait.                 ', '             Le plaisir d’un bon café n’est pas le fruit du hasard : il doit être intense, avec constance et sans compromis, tasse après tasse, de la culture à la capsule, en respectant nos exigences de qualité.            ', 50, '0000-00-00'),
(4, 'Asta', 'PEOPLE-PLACES-THINGS-ETC.png', '       Pur café soluble, puissant et énérgétique, extrait des meilleurs grains de Robusta et d’Arabica, doté d’un goût profond et d’un arôme unique                 ', '          70% de Robustas et 30% d’Arabicas, ASTA Espresso est un café au goût italien crémeux, qui se prépare à l’aide d’une machine à café  espresso, pour l’extraction d’un espresso parfaitement mousseux.              ', 40, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'Meriem Benrhabra', 'meriem.benrhabra1@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'mm', 'mm@gmail.com', 'c4efd5020cb49b9d3257ffa0fbccc0ae'),
(3, 'khaoula', 'khaoula1@gmail.com', '88cdb337f8c62dc69c1aee4066f80bf5'),
(4, 'MARIAM', 'maryy@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'nouhaila', 'nouha1@gmail.com', 'ed2c24a8577c6ffa2661410a6d6f27d2'),
(6, 'marwa', 'marwa@gmail.com', '1e2a796539042ca860c3091662aa4346'),
(7, 'nouha', 'noha12@gmail.com', 'c67c5950fc6e5c0c1f132b4847f3d40b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id_produit`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `panier`
--
ALTER TABLE `panier`
  MODIFY `client_id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produits`
--
ALTER TABLE `produits`
  MODIFY `id_produit` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
