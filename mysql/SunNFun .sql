-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 30, 2020 at 05:01 AM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SunNFun`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE IF NOT EXISTS `Admin` (
  `admin_id` int(20) NOT NULL,
  `firstname` varchar(20) CHARACTER SET latin1 NOT NULL,
  `lastname` varchar(20) CHARACTER SET latin1 NOT NULL,
  `email` varchar(25) CHARACTER SET latin1 NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`admin_id`, `firstname`, `lastname`, `email`, `username`, `password`) VALUES
(1, 'Nick', 'Hubchak', 'nickhubchak@aol.com', 'nickhubchak', '$2y$10$z6RNP2FqlomEAX4UsJ5rReOEeiizL6miXv8XeuWbmxfqFH032OJMi');

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE IF NOT EXISTS `Customer` (
  `customer_id` int(20) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`customer_id`, `firstname`, `lastname`, `phonenumber`, `email`, `username`, `password`) VALUES
(0, 'John', 'Doe', '6655544333', 'johndoe@gmail.com', 'johndoe', '$2y$10$nqOccFXE34Mr/qPhXxRrRuhJ9L7DoOzRrYeMHvR7FOfmo6v8jdtgu');

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE IF NOT EXISTS `Orders` (
  `order_id` int(20) NOT NULL,
  `customer_id` int(20) NOT NULL,
  `order_status` tinyint(1) NOT NULL,
  `order_date` date NOT NULL,
  `order_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE IF NOT EXISTS `order_item` (
  `order_item_index` int(20) NOT NULL,
  `order_id` int(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `quantity` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `quantity_in_stock` int(20) NOT NULL,
  `Description` text NOT NULL,
  `image_link` varchar(128) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `Name`, `quantity_in_stock`, `Description`, `image_link`) VALUES
(1, 'Chair', 3, 'wooden chair', 'http://localhost/new-sun-and-fun/admin-site/dashboard/manage-inventory.php'),
(2, 'Beach cups', 1, 'Beach themed cups', 'https://localhost/new-sun-and-fun/media/project-images/bags/lg000951.jpg'),
(3, 'White anchor bag', 1, 'white bag with anchor images', 'https://localhost/new-sun-and-fun/media/project-images/bags/lg002005.jpg'),
(4, 'Blue anchor bag', 1, 'blue bag with a single white anchor', 'https://localhost/new-sun-and-fun/media/project-images/bags/lg003135.jpg'),
(5, 'Green/blue backpack', 1, 'green and blue colored backpack', 'https://localhost/new-sun-and-fun/media/project-images/bags/lg003220.jpg'),
(6, 'Blue cooler tote bag', 1, 'tote bag to keep drinks cool', 'https://localhost/new-sun-and-fun/media/project-images/bags/lg003222.jpg'),
(7, 'Striped anchor bag', 1, 'red/white anchors with stripes', 'https://localhost/new-sun-and-fun/media/project-images/bags/lg003224.jpg'),
(8, 'USA bag', 1, 'US Flag printed on the bag', 'https://localhost/new-sun-and-fun/media/project-images/bags/lg003225.jpg'),
(9, 'Cyan/lime cooler bag', 1, 'cyan/lime colored cooler', 'https://localhost/new-sun-and-fun/media/project-images/bags/lg003225.jpg'),
(10, 'Striped chair', 1, 'striped chair', 'https://localhost/new-sun-and-fun/media/project-images/chairs/lg001128.jpg'),
(11, 'Red chair 1', 1, 'style of red chair', 'https://localhost/new-sun-and-fun/media/project-images/chairs/lg001129.jpg'),
(12, 'Red chair 2', 1, 'a different style of red chair', 'https://localhost/new-sun-and-fun/media/project-images/chairs/lg001761.jpg'),
(13, 'Beach chair visor', 1, 'a beach chair visor', 'https://localhost/new-sun-and-fun/media/project-images/chairs/lg001970.jpg'),
(14, 'Blue chair', 1, 'a blue chair', 'https://localhost/new-sun-and-fun/media/project-images/chairs/lg001972.jpg'),
(15, 'Blanket/towel', 1, 'a big blanket/towel for the beach', 'https://localhost/new-sun-and-fun/media/project-images/clothes-towels-blankets/lg001211.jpg'),
(16, 'Clothes', 1, 'various clothes available', 'https://localhost/new-sun-and-fun/media/project-images/clothes-towels-blankets/lg002011.jpg'),
(17, 'Air balloon flag', 1, 'flag with air balloon design on it', 'https://localhost/new-sun-and-fun/media/project-images/flags/api1kvxup__94671.1592317307.jpg'),
(18, 'Beach flag', 1, 'flag with a pic of a beach on it', 'https://localhost/new-sun-and-fun/media/project-images/flags/api5ldkec__02961.1592317919.jpg'),
(19, 'Flower field flag', 1, 'flag with a flower field on it', 'https://localhost/new-sun-and-fun/media/project-images/flags/api5ldkec__02961.1592317919.jpg'),
(20, 'Welcome flower wreat', 1, 'a welcome flag with a flower wreath on it', 'https://localhost/new-sun-and-fun/media/project-images/flags/api82zz2x__69632.1592315366.jpg'),
(21, 'Flower pot flag', 1, 'flag with flower pots on it', 'https://localhost/new-sun-and-fun/media/project-images/flags/apiaaofgq__44379.1592314042.jpg'),
(22, 'USA lantern flag', 1, 'USA inspired lanterns design on the flag', 'https://localhost/new-sun-and-fun/media/project-images/flags/apib9roac__50747.1601406475.jpg'),
(23, 'Black pirate flag', 1, 'a black pirate flag', 'https://localhost/new-sun-and-fun/media/project-images/flags/apicjt8ib__48893.1592318003.jpg'),
(24, 'Garden Birds flag', 1, 'a flag with birds in a garden', 'https://localhost/new-sun-and-fun/media/project-images/flags/apidd9zmc__29828.1592315595.jpg'),
(25, 'US firefighter flag', 1, 'US-background flag with a firefighter helmet', 'https://localhost/new-sun-and-fun/media/project-images/flags/apidgbqcg__40508.1592317357.jpg'),
(26, 'Birdhouse flag', 1, 'flag with a birdhouse design on it', 'https://localhost/new-sun-and-fun/media/project-images/flags/apierajw1__57871.1592315894.jpg'),
(27, 'God Bless America fl', 1, 'Flag with a bald eagle and God Bless America written on it', 'https://localhost/new-sun-and-fun/media/project-images/flags/apih5tnpy__25537.1601406381.jpg'),
(30, 'US beach shell flag', 1, 'a beach with shells and US flag', 'https://localhost/new-sun-and-fun/media/project-images/flags/apijs7anh__24056.1592315754.jpg'),
(31, 'Firefighter and EMT ', 1, 'a flag with a single red stripe to support firefighters and EMTs', 'https://localhost/new-sun-and-fun/media/project-images/flags/apilicajg__71709.1592316261.jpg'),
(32, 'Sunflower flag', 1, 'a welcome flag with a sunflower on it', 'https://localhost/new-sun-and-fun/media/project-images/flags/apilmde9b__05073.1592315865.jpg'),
(33, 'Wine flag', 1, 'a flag with a wine bottle displayed on it', 'https://localhost/new-sun-and-fun/media/project-images/flags/apinvi9zw__44162.1592315576.jpg'),
(34, 'US flower pot flag', 1, 'a flag with a flower pot US inspired design', 'https://localhost/new-sun-and-fun/media/project-images/flags/apiolecop__78141.1592316524.jpg'),
(35, '"Bless This Nest" Fl', 1, 'flag with the quote "Bless This Nest"', 'https://localhost/new-sun-and-fun/media/project-images/flags/apiosoyfs__39373.1592315899.jpg'),
(36, 'Flip flop flag', 1, 'flag with flip flops on it and says "welcome to our home"', 'https://localhost/new-sun-and-fun/media/project-images/flags/apipxhfjb__59159.1592317175.jpg'),
(37, '"Life is Better..." ', 1, 'a flag with "life is better at the beach" written on it', 'https://localhost/new-sun-and-fun/media/project-images/flags/apiqd6avd__43935.1592317098.jpg'),
(38, 'Half-circle US flag', 1, 'half-circle US flag', 'https://localhost/new-sun-and-fun/media/project-images/flags/apiqi31da__07287.1600696919.jpg'),
(39, 'Flip flop Bucket fla', 1, 'flag with flip flops and a blue bucket saying "Life is better at the beach"', 'https://localhost/new-sun-and-fun/media/project-images/flags/apiqrlrgj__42641.1592317922.jpg'),
(40, 'Sea shell wreath fla', 1, 'a flag with a shell wreath and says "welcome"', 'https://localhost/new-sun-and-fun/media/project-images/flags/apirgxhpu__68049.1592318028.jpg'),
(41, 'Bald Eagle Freedom f', 1, 'a flag with a bald eagle carrying the US flag with "freedom" written below it', 'https://localhost/new-sun-and-fun/media/project-images/flags/apirhkem3__62995.1592317349.jpg'),
(42, 'Ladybug flag', 1, 'a flag with ladybugs on flowers', 'https://localhost/new-sun-and-fun/media/project-images/flags/apisrp7i1__83084.1592315916.jpg'),
(43, 'US colony flag', 1, 'colonial US flag', 'https://localhost/new-sun-and-fun/media/project-images/flags/apiugs65w__59950.1592315754.jpg'),
(44, 'Five o clock flag', 1, 'Written "It''s 5 o'' clock somewhere", a flag with a bird on it', 'https://localhost/new-sun-and-fun/media/project-images/flags/apiwh7pug__50941.1592317562.jpg'),
(45, 'Sunglasses sun flag', 1, 'a flag with the sun wearing sunglasses', 'https://localhost/new-sun-and-fun/media/project-images/flags/apiwyqv3x__98235.1592317890.jpg'),
(46, 'Happy camper flag', 1, 'a flag that says " Happy camper" with a RV on it', 'https://localhost/new-sun-and-fun/media/project-images/flags/apiyfsjks__60322.1592317346.jpg'),
(47, 'Happy Spring flag', 1, 'a flag with a glass flower pot It says "happy spring on it', 'https://localhost/new-sun-and-fun/media/project-images/flags/apiymzp9s__32850.1592316519.jpg'),
(48, '50 star US flag', 1, 'the US flag with 50 stars', 'https://localhost/new-sun-and-fun/media/project-images/flags/gfbl-g00018__2__53801.1593113889.jpg'),
(49, 'Police officer cap f', 1, 'an officer cap with the US flag background', 'https://localhost/new-sun-and-fun/media/project-images/flags/gfbl-g00544__2__72976.1600450467.jpg'),
(50, 'Hammock parrot flag', 1, 'Flag of a parrot in a hammock', 'https://localhost/new-sun-and-fun/media/project-images/flags/gfbl-g00603__2__08749.1596835885.jpg'),
(51, 'Home sweet home flow', 1, 'a flag with flowers inside of a watering can', 'https://localhost/new-sun-and-fun/media/project-images/flags/gfbl-g00820__2__44154.1598899938.jpg'),
(52, 'Welcome flip flop fl', 1, 'a flag with a pair of flip flops and sunglasses on it', 'https://localhost/new-sun-and-fun/media/project-images/flags/gfbl-g00853__2__63314.1603128956.jpg'),
(53, 'Summer fun flag', 1, 'flag that says "Summer Fun" with 3 flip flops in a row below it', 'https://localhost/new-sun-and-fun/media/project-images/flags/gfbl-g00862__2__84696.1597343086.jpg'),
(54, 'GBA star flag', 1, 'a flag that says "God Bless America" with a US striped star in the center', 'https://localhost/new-sun-and-fun/media/project-images/flags/gfbl-g01167__2__63928.1596024853.jpg'),
(55, 'Sunflower Flag', 1, 'a flag with a sunflower garden', 'https://localhost/new-sun-and-fun/media/project-images/flags/gfbl-g01241__2__16714.1602101502.jpg'),
(56, 'Butterflies and Flow', 1, 'a flag with flowers and butterflies', 'https://localhost/new-sun-and-fun/media/project-images/flags/gfbl-g01261__2__92401.1598899941.jpg'),
(57, 'US flag with blue st', 1, 'a US flag with a blue stripe to show support for law enforcement', 'https://localhost/new-sun-and-fun/media/project-images/flags/hfbl-h00470__2__17919.1602101618.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE IF NOT EXISTS `vendor` (
  `vendor_id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendor_id`, `name`, `email`, `phone`, `description`) VALUES
(1, 'ewqrw', 'qwre@qewr.com', 54155, 'w32ed4yguyew');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`order_item_index`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendor_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Orders`
--
ALTER TABLE `Orders`
  ADD CONSTRAINT `order_id` FOREIGN KEY (`order_id`) REFERENCES `order_item` (`order_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
