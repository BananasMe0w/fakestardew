-- phpMyAdmin SQL Dump
-- version 4.6.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 12, 2022 at 11:48 AM
-- Server version: 5.7.12-log
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stardew`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bill`
--

CREATE TABLE `tbl_bill` (
  `bill_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_bill`
--

INSERT INTO `tbl_bill` (`bill_id`, `user_id`, `product_id`, `amount`, `date`) VALUES
(1, 2, 1, 4, '2022-12-12 15:08:56'),
(5, 2, 2, 2, '2022-12-12 17:42:08'),
(6, 2, 3, 1, '2022-12-12 17:42:12'),
(7, 2, 6, 2, '2022-12-12 17:42:14'),
(8, 2, 5, 1, '2022-12-12 17:42:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `blog_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `blog_info` text NOT NULL,
  `blog_content_type` text NOT NULL,
  `blog_name` text NOT NULL,
  `blog_content` text NOT NULL,
  `blog_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`blog_id`, `user_id`, `blog_info`, `blog_content_type`, `blog_name`, `blog_content`, `blog_date`) VALUES
(1, 2, 'Meow want to meow, so meow need to meow meow to meow meow again.', 'dating', 'Meow hong hong', '', '2022-12-12 15:43:40'),
(3, 3, 'Hong want to go farming with meow, so hong invite meow, but meow reject. ', 'farming', 'Hong meow meow', '', '2022-12-12 16:12:04'),
(4, 2, 'I decide to diggy diggy with meowmeow', 'mining', 'meow want to dig meow meow', '', '2022-12-12 17:13:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `season` text NOT NULL,
  `product_name` text NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `price_out_season` int(11) NOT NULL,
  `storage` int(11) NOT NULL,
  `product_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `season`, `product_name`, `description`, `price`, `price_out_season`, `storage`, `product_url`) VALUES
(1, 'all_year_round', 'Grass Starter', 'Place this on your farm to start a new patch of grass.', 100, 100, 50, 'https://stardewvalleywiki.com/mediawiki/images/1/14/Grass_Starter.png'),
(2, 'all_year_round', 'Sugar', 'Adds sweetness to pastries and candies. Too much can be unhealthy.', 100, 100, 200, 'https://stardewvalleywiki.com/mediawiki/images/a/a9/Sugar.png'),
(3, 'all_year_round', 'Wheat Flour', 'Place this on your farm to start a new patch of grass.', 100, 100, 200, 'https://stardewvalleywiki.com/mediawiki/images/2/2c/Wheat_Flour.png'),
(4, 'all_year_round', 'Rice', 'A basic grain often served under vegetables.', 200, 200, 200, 'https://stardewvalleywiki.com/mediawiki/images/d/da/Rice.png'),
(5, 'all_year_round', 'Oil', 'Place this on your farm to start a new patch of grass.', 200, 200, 200, 'https://stardewvalleywiki.com/mediawiki/images/0/06/Oil.png'),
(6, 'all_year_round', 'Vinegar', 'An aged fermented liquid used in many cooking recipes.', 200, 200, 200, 'https://stardewvalleywiki.com/mediawiki/images/f/fe/Vinegar.png'),
(9, 'all_year_round', 'Basic Fertilizer', 'Improves soil quality a little, increasing your chance to grow quality crops. Mix into tilled soil.', 100, 100, 100, 'https://stardewvalleywiki.com/mediawiki/images/9/9b/Basic_Fertilizer.png'),
(10, 'all_year_round', 'Quality Fertilizer', 'Improves soil quality, increasing your chance to grow quality crops. Mix into tilled soil.', 150, 150, 80, 'https://stardewvalleywiki.com/mediawiki/images/a/a0/Quality_Fertilizer.png'),
(11, 'all_year_round', 'Basic Retaining Soil', 'This soil has a chance of staying watered overnight. Mix into tilled soil.', 100, 100, 100, 'https://stardewvalleywiki.com/mediawiki/images/c/c7/Basic_Retaining_Soil.png'),
(12, 'all_year_round', 'Quality Retaining Soil', 'This soil has a good chance of staying watered overnight. Mix into tilled soil.', 150, 150, 80, 'https://stardewvalleywiki.com/mediawiki/images/0/0a/Quality_Retaining_Soil.png'),
(13, 'all_year_round', 'Speed-Gro', 'Stimulates leaf production. Guaranteed to increase growth rate by at least 10%. Mix into tilled soil.', 100, 100, 100, 'https://stardewvalleywiki.com/mediawiki/images/9/94/Speed-Gro.png'),
(14, 'all_year_round', 'Deluxe Speed-Gro', 'Stimulates leaf production. Guaranteed to increase growth rate by at least 25%. Mix into tilled soil.', 150, 150, 80, 'https://stardewvalleywiki.com/mediawiki/images/6/6d/Deluxe_Speed-Gro.png'),
(15, 'all_year_round', 'Wallpaper', 'Decorates the walls of one room', 100, 100, 100, 'https://stardewvalleywiki.com/mediawiki/images/thumb/8/89/Wallpaper_001_Icon.png/54px-Wallpaper_001_Icon.png'),
(16, 'all_year_round', 'Flooring', 'Decorates the floor of one room.', 100, 100, 100, 'https://stardewvalleywiki.com/mediawiki/images/thumb/8/80/Flooring_01_Icon.png/60px-Flooring_01_Icon.png'),
(17, 'all_year_round', 'Cherry Sapling', 'Takes 28 days to produce a mature Cherry tree. Bears fruit in the spring. Only grows if the 8 surrounding ""tiles"" are empty.', 3400, 3400, 20, 'https://stardewvalleywiki.com/mediawiki/images/2/22/Cherry_Sapling.png'),
(18, 'all_year_round', 'Apricot Sapling', 'Takes 28 days to produce a mature Apricot tree. Bears fruit in the spring. Only grows if the 8 surrounding ""tiles"" are empty.', 2000, 2000, 20, 'https://stardewvalleywiki.com/mediawiki/images/9/9d/Apricot_Sapling.png'),
(19, 'all_year_round', 'Orange Sapling', 'Takes 28 days to produce a mature Orange tree. Bears fruit in the summer. Only grows if the 8 surrounding ""tiles"" are empty.', 4000, 4000, 20, 'https://stardewvalleywiki.com/mediawiki/images/0/08/Orange_Sapling.png'),
(20, 'all_year_round', 'Peach Sapling', 'Takes 28 days to produce a mature Peach tree. Bears fruit in the summer. Only grows if the 8 surrounding ""tiles"" are empty.', 6000, 6000, 20, 'https://stardewvalleywiki.com/mediawiki/images/e/e3/Peach_Sapling.png'),
(21, 'all_year_round', 'Pomegranate Sapling', 'Takes 28 days to produce a mature Pomegranate tree. Bears fruit in the fall. Only grows if the 8 surrounding ""tiles"" are empty.', 6000, 6000, 20, 'https://stardewvalleywiki.com/mediawiki/images/1/10/Pomegranate_Sapling.png'),
(22, 'all_year_round', 'Apple Sapling', 'Takes 28 days to produce a mature Apple tree. Bears fruit in the fall. Only grows if the 8 surrounding ""tiles"" are empty.', 4000, 4000, 20, 'https://stardewvalleywiki.com/mediawiki/images/6/68/Apple_Sapling.png'),
(23, 'all_year_round', 'Catalogue', 'Provides unlimited access to all wallpapers and floors... from the convenience of your home!', 30000, 30000, 10, 'https://stardewvalleywiki.com/mediawiki/images/4/49/Catalogue.png'),
(24, 'all_year_round', 'Bouquet', 'A gift that shows your romantic interest.', 200, 200, 200, 'https://stardewvalleywiki.com/mediawiki/images/8/83/Bouquet.png'),
(25, 'spring', 'Parsnip Seeds', 'Plant these in the spring. Takes 4 days to mature.', 20, 30, 50, 'https://stardewvalleywiki.com/mediawiki/images/d/d3/Parsnip_Seeds.png'),
(26, 'spring', 'Bean Starter', 'Plant these in the spring. Takes 10 days to mature, but keeps producing after that. Grows on a trellis.', 60, 90, 50, 'https://stardewvalleywiki.com/mediawiki/images/2/26/Bean_Starter.png'),
(27, 'spring', 'Cauliflower Seeds', 'Plant these in the spring. Takes 12 days to produce a large cauliflower.', 80, 120, 50, 'https://stardewvalleywiki.com/mediawiki/images/b/bb/Cauliflower_Seeds.png'),
(28, 'spring', 'Potato Seeds', 'Plant these in the spring. Takes 6 days to mature, and has a chance of yielding multiple potatoes at harvest.', 50, 75, 50, 'https://stardewvalleywiki.com/mediawiki/images/4/44/Potato_Seeds.png'),
(29, 'spring', 'Tulip Bulb', 'Plant in spring. Takes 6 days to produce a colorful flower. Assorted colors.', 20, 30, 50, 'https://stardewvalleywiki.com/mediawiki/images/4/42/Tulip_Bulb.png'),
(30, 'spring', 'Kale Seeds', 'Plant these in the spring. Takes 6 days to mature. Harvest with the scythe.', 70, 105, 50, 'https://stardewvalleywiki.com/mediawiki/images/0/00/Kale_Seeds.png'),
(31, 'spring', 'Jazz Seeds', 'Plant in spring. Takes 7 days to produce a blue puffball flower.', 30, 45, 50, 'https://stardewvalleywiki.com/mediawiki/images/9/95/Jazz_Seeds.png'),
(32, 'spring', 'Garlic Seeds', 'Plant these in the spring. Takes 4 days to mature.', 40, 60, 50, 'https://stardewvalleywiki.com/mediawiki/images/d/d5/Garlic_Seeds.png'),
(33, 'spring', 'Rice Shoot', 'Plant these in the spring. Takes 8 days to mature. Grows faster if planted near a body of water. Harvest with the scythe.', 40, 60, 50, 'https://stardewvalleywiki.com/mediawiki/images/8/84/Rice_Shoot.png'),
(34, 'summer', 'Melon Seeds', 'Plant these in the summer. Takes 12 days to mature.', 80, 120, 50, 'https://stardewvalleywiki.com/mediawiki/images/5/5e/Melon_Seeds.png'),
(35, 'summer', 'Tomato Seeds', 'Plant these in the summer. Takes 11 days to mature, and continues to produce after first harvest.', 50, 75, 50, 'https://stardewvalleywiki.com/mediawiki/images/e/e3/Tomato_Seeds.png'),
(36, 'summer', 'Blueberry Seeds', 'Plant these in the summer. Takes 13 days to mature, and continues to produce after first harvest.', 80, 120, 50, 'https://stardewvalleywiki.com/mediawiki/images/8/81/Blueberry_Seeds.png'),
(37, 'summer', 'Pepper Seeds', 'Plant these in the summer. Takes 5 days to mature, and continues to produce after first harvest.', 40, 60, 50, 'https://stardewvalleywiki.com/mediawiki/images/6/67/Pepper_Seeds.png'),
(38, 'summer', 'Wheat Seeds', 'Plant these in the summer or fall. Takes 4 days to mature. Harvest with the scythe.', 10, 15, 50, 'https://stardewvalleywiki.com/mediawiki/images/2/2b/Wheat_Seeds.png'),
(39, 'summer', 'Radish Seeds', 'Plant these in the summer. Takes 6 days to mature.', 40, 60, 50, 'https://stardewvalleywiki.com/mediawiki/images/b/b1/Radish_Seeds.png'),
(40, 'summer', 'Poppy Seeds', 'Plant in summer. Produces a bright red flower in 7 days.', 100, 150, 50, 'https://stardewvalleywiki.com/mediawiki/images/a/a2/Poppy_Seeds.png'),
(41, 'summer', 'Spangle Seeds', 'Plant in summer. Takes 8 days to produce a vibrant tropical flower. Assorted colors.', 50, 75, 50, 'https://stardewvalleywiki.com/mediawiki/images/8/85/Spangle_Seeds.png'),
(42, 'summer', 'Hops Starter', 'Plant these in the summer. Takes 11 days to grow, but keeps producing after that. Grows on a trellis.', 60, 90, 50, 'https://stardewvalleywiki.com/mediawiki/images/9/9b/Hops_Starter.png'),
(43, 'summer', 'Corn Seeds', 'Plant these in the summer or fall. Takes 14 days to mature, and continues to produce after first harvest.', 150, 225, 50, 'https://stardewvalleywiki.com/mediawiki/images/d/d1/Corn_Seeds.png'),
(44, 'summer', 'Sunflower Seeds', 'Plant in summer or fall. Takes 8 days to produce a large sunflower. Yields more seeds at harvest.', 200, 300, 50, 'https://stardewvalleywiki.com/mediawiki/images/1/1f/Sunflower_Seeds.png'),
(45, 'summer', 'Red Cabbage Seeds', 'Plant these in the summer. Takes 9 days to mature.', 100, 150, 50, 'https://stardewvalleywiki.com/mediawiki/images/e/ec/Red_Cabbage_Seeds.png'),
(46, 'fall', 'Eggplant Seeds', 'Plant these in the fall. Takes 5 days to mature, and continues to produce after first harvest.', 20, 30, 50, 'https://stardewvalleywiki.com/mediawiki/images/f/f9/Eggplant_Seeds.png'),
(47, 'fall', 'Corn Seeds', 'Plant these in the summer or fall. Takes 14 days to mature, and continues to produce after first harvest.', 150, 225, 50, 'https://stardewvalleywiki.com/mediawiki/images/d/d1/Corn_Seeds.png'),
(48, 'fall', 'Pumpkin Seeds', 'Plant these in the fall. Takes 13 days to mature.', 100, 150, 50, 'https://stardewvalleywiki.com/mediawiki/images/9/99/Pumpkin_Seeds.png'),
(49, 'fall', 'Bok Choy Seeds', 'Plant these in the fall. Takes 4 days to mature.', 50, 75, 50, 'https://stardewvalleywiki.com/mediawiki/images/2/21/Bok_Choy_Seeds.png'),
(50, 'fall', 'Yam Seeds', 'Plant these in the fall. Takes 10 days to mature.', 60, 90, 50, 'https://stardewvalleywiki.com/mediawiki/images/e/e9/Yam_Seeds.png'),
(51, 'fall', 'Cranberry Seeds', 'Plant these in the fall. Takes 7 days to mature, and continues to produce after first harvest.', 240, 360, 50, 'https://stardewvalleywiki.com/mediawiki/images/e/ec/Cranberry_Seeds.png'),
(52, 'fall', 'Sunflower Seeds', 'Plant in summer or fall. Takes 8 days to produce a large sunflower. Yields more seeds at harvest.', 200, 300, 50, 'https://stardewvalleywiki.com/mediawiki/images/1/1f/Sunflower_Seeds.png'),
(53, 'fall', 'Fairy Seeds', 'Plant in fall. Takes 12 days to produce a mysterious flower. Assorted Colors.', 200, 300, 50, 'https://stardewvalleywiki.com/mediawiki/images/8/8e/Fairy_Seeds.png'),
(54, 'fall', 'Amaranth Seeds', 'Plant these in the fall. Takes 7 days to grow. Harvest with the scythe.', 70, 105, 50, 'https://stardewvalleywiki.com/mediawiki/images/c/ca/Amaranth_Seeds.png'),
(55, 'fall', 'Grape Starter', 'Plant these in the fall. Takes 10 days to grow, but keeps producing after that. Grows on a trellis.', 60, 90, 50, 'https://stardewvalleywiki.com/mediawiki/images/d/de/Grape_Starter.png'),
(56, 'fall', 'Wheat Seeds', 'Plant these in the summer or fall. Takes 4 days to mature. Harvest with the scythe.', 10, 15, 50, 'https://stardewvalleywiki.com/mediawiki/images/2/2b/Wheat_Seeds.png'),
(57, 'fall', 'Artichoke Seeds', 'Plant these in the fall. Takes 8 days to mature.', 30, 45, 50, 'https://stardewvalleywiki.com/mediawiki/images/7/71/Artichoke_Seeds.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reply`
--

CREATE TABLE `tbl_reply` (
  `reply_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reply_content` text NOT NULL,
  `reply_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_reply`
--

INSERT INTO `tbl_reply` (`reply_id`, `blog_id`, `user_id`, `reply_content`, `reply_date`) VALUES
(3, 3, 2, 'Meow think like hong.', '2022-12-12 16:49:43'),
(4, 1, 2, 'wasdwaw', '2022-12-12 17:06:51'),
(5, 4, 2, 'Same to meow', '2022-12-12 17:14:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `surname` varchar(64) NOT NULL,
  `tel` text NOT NULL,
  `address` text NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `name`, `surname`, `tel`, `address`, `email`, `password`, `status`) VALUES
(1, 'admin', 'suradmin', '0000000000', 'UNKNOWN', 'admin@gmail.com', 'admin', 2),
(2, 'user', 'surname', '0000000000', 'UNKNOWN', 'user@gmail.com', 'user', 1),
(3, 'user2', 'suruser2', '0000000000', 'UNKNOWN', 'user2@gmail.com', 'user2', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bill`
--
ALTER TABLE `tbl_bill`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_reply`
--
ALTER TABLE `tbl_reply`
  ADD PRIMARY KEY (`reply_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bill`
--
ALTER TABLE `tbl_bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `tbl_reply`
--
ALTER TABLE `tbl_reply`
  MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
