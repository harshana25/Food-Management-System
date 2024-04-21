
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_qty` int(11) NOT NULL DEFAULT 1,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_code`) VALUES
(1, 'Spicy Chicken Burger', '800', 1, 'img/burgerbackground.jpg', 'B1000'),
(2, 'Crispy Chicken Burger', '850', 1, 'img/crispychicken.jpg', 'B1001'),
(3, 'Chillie Chicken Burger', '890', 1, 'img/chilliechicken.jpg', 'B1002'),
(4, 'Beef Burger', '1200', 1, 'img/beefburger.jpg', 'B1003'),
(5, 'Fried Fish Burger', '750', 1, 'img/friedfishburger.jpg', 'B1004'),
(6, 'Sea Food Burger', '1400', 1, 'img/seafoodburger.jpg', 'B1005'),
(7, 'Omlet Burger', '650', 1, 'img/omletburger.jpg', 'B1006'),
(8, 'Cheesy Burger', '900', 1, 'img/cheesyburger.jpg', 'C1007'),
(9, 'Jumbo Cheese Burger', '1100', 1, 'img/jumbocheeseburger.jpg', 'C1008'),
(10, 'Double Cheese Burger', '990', 1, 'img/doublecheeseburger.jpg', 'C1009'),
(11, 'Vegie Burger', '500', 1, 'img/VegieBurger.jpg', 'V1010'),
(12, 'Apple Tarte', '400', 1, 'img/appletarte.jpg', 'D1011'),
(13, 'Choco Brownie', '350', 1, 'img/chocobrownie.jpg', 'D1012'),
(14, 'Choco Lava Cake', '450', 1, 'img/chocolavacake.jpg', 'D1013'),
(15, 'Citrus Lemanade', '280', 1, 'img/citruslemanade.jpg', 'S1014'),
(16, 'Classic Cooling Mojhito', '300', 1, 'img/mojito.jpg', 'S1015'),
(17, 'Limited Edition Bevrages', '120', 1, 'img/coke.jpg', 'S1016');
--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code_2` (`product_code`),
  ADD KEY `product_code` (`product_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;


