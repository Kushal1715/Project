-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 03:32 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `admin_email`, `admin_password`, `admin_mobile`) VALUES
(1, 'admin', 'admin@gmail.com', '25d55ad283aa400af464c76d713c07ad', '9812345678'),
(2, 'admin2', 'a@gmail.com', '25d55ad283aa400af464c76d713c07ad', '9812345678');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `quantity` int(20) NOT NULL,
  `ip_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`product_id`, `name`, `price`, `image`, `quantity`, `ip_address`) VALUES
(15, 'product', '100', 'Spinner-5.gif', 1, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `new_products`
--

CREATE TABLE `new_products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_description` text NOT NULL,
  `product_keyword` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `new_products`
--

INSERT INTO `new_products` (`product_id`, `product_title`, `product_description`, `product_keyword`, `product_image`, `product_price`, `date`, `status`) VALUES
(50, 'Minolta 33MP HD Digital Camera', 'Capture every moment with exceptional clarity and creativity using the Minolta 33MP HD Digital Camera with Interchangeable Lens Kit, bundled with a 64GB Accessory Kit. Unleash your inner photographer and explore a world of possibilities with this versatile and feature-packed camera system. Unleash your creativity, capture lifes most cherished moments, and immerse yourself in the world of high-quality photography and videography. Its time to transform your snapshots into masterpieces with Minolta.', 'digital camera hd ', 'p9.png', '65200', '2023-12-06 13:51:29', 'true'),
(51, 'JISULIFE FA13R Rechargeable Clip Fan', 'Whether you are battling the sweltering heat, seeking a breeze at your workspace, or needing a gentle airflow for a good nights sleep, this versatile clip fan is designed to keep you comfortable and refreshed. Its compact and lightweight design makes it easy to carry anywhere, and the built-in clip ensures it can be securely attached to various surfaces, such as your desk, baby stroller, tent or even your bedside table. Enjoy hands-free cooling wherever you go.', 'JISULIFE FA13R Rechargeable Clip Fan\r\ntable fan\r\nfan', 'p10.jpg', '5375', '2023-10-02 13:46:09', 'true'),
(52, 'Modern Minimalist Floor Lamp', 'Elevate your living space with the Modern Minimalist Floor Lamp – a sleek and functional lighting solution that effortlessly combines form and function. Designed to enhance the ambiance of any room, this black standing lamp with a flexible gooseneck and acrylic shade is the perfect addition to your living room, bedroom, office, or study. Standing at a height of 145 cm (approximately 57 inches), this floor lamp provides ample illumination while also serving as an elegant piece of decor that complements your rooms overall design.', 'modern floor lamp', 'p11.jpg', '3570', '2023-12-06 13:52:10', 'true'),
(53, 'Wireless Controller for PS4', 'Elevate your gaming experience to a new level of convenience and control with the Wireless Controller for PS4, PS4 Pro, and PS4 Slim. This controller is designed to provide seamless gameplay, comfort, and versatility for gamers of all skill levels. With its precision, comfort, and wireless convenience, its the perfect companion for all your gaming adventures. Take control, immerse yourself in the game, and elevate your gaming to the next level with this exceptional controller.', 'Wireless Controller for PS4 / PS4 Slim / PS4 Prowireless controllerjoystick', 'p12.jpg', '4750', '2023-12-07 02:31:14', 'true'),
(54, 'Clikon Lightweight Compact Dry Iron', 'Introducing the Clikon Lightweight Compact Dry Iron (CK2133) in a stylish Blue/Black color scheme - the perfect appliance to help you achieve wrinkle-free, crisp clothes effortlessly. Designed with precision and user-friendliness in mind, this dry iron offers exceptional performance in a compact and lightweight package.', 'Clikon Lightweight Compact Dry Iron, 1100 , CK2133 - Blue/Black | CK2133\r\niron', 'p13.jpg', '1850', '2023-10-04 10:35:15', 'true'),
(55, 'Mountain Makalu 67 Gaming Mouse ', 'Elevate Your Gaming Experience! Are you tired of laggy movements and missed shots in your favorite games? Its time to level up your gaming with the Mountain Makalu 67 Gaming Mouse. Designed for precision, speed, and comfort, this gaming mouse is your ultimate weapon for dominating the virtual battlefield. The Makalu 67 is designed with ergonomics in mind, providing a comfortable grip for both claw and palm users.', 'gaming mouse ', 'p14.jpg', '1570', '2023-12-06 14:26:08', 'true'),
(56, 'SoloKeys Solo USB-C – Security Key', 'Unlock a New Era of Online Security with the SoloKeys Solo USB-C. Your Key to Peace of Mind! Introducing the SoloKeys Solo USB-C, the cutting-edge security key that puts you in control of your online protection. In todays digital world, safeguarding your sensitive information is paramount, and the Solo USB-C is here to make that process effortless and foolproof. The SoloKeys Solo USB-C is your guardian against the ever-evolving threats of the digital age.', 'SoloKeys Solo USB-C – Security Key\r\nusb', 'p15.jpg', '750', '2023-10-02 13:46:30', 'true'),
(57, '2K indoor Tilt Camera with AI', 'The Eufy 2K Indoor Tilt Camera is your trusted partner in home surveillance. Packed with cutting-edge AI technology, this camera ensures that you are always in the know about whats happening in and around your home. Say goodbye to worries and hello to peace of mind! Secure your home like never before with the Eufy 2K Indoor Tilt Camera with AI. Whether you are keeping an eye on your loved ones or safeguarding your property, this camera offers unmatched peace of mind. Dont miss a beat – order yours today!', 'Eufy 2K indoor Tilt Camera with AI (T84002W3)\r\nwebcam\r\n', 'p16.jpg', '9999', '2023-10-07 11:14:39', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `orders_pending`
--

CREATE TABLE `orders_pending` (
  `order_pending_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(255) NOT NULL,
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders_pending`
--

INSERT INTO `orders_pending` (`order_pending_id`, `user_id`, `invoice_number`, `product_id`, `quantity`, `order_status`) VALUES
(103, 32, 760615969, 3, 1, 'Complete'),
(104, 32, 760615969, 4, 1, 'Complete'),
(105, 32, 760615969, 53, 6, 'Complete'),
(106, 33, 1756667401, 7, 1, 'Complete'),
(107, 33, 1756667401, 51, 3, 'Complete'),
(108, 32, 412109227, 7, 3, 'Complete'),
(109, 32, 2105857291, 2, 2, 'Complete'),
(110, 32, 2105857291, 7, 1, 'Complete'),
(111, 32, 223313961, 2, 1, 'Complete'),
(112, 32, 223313961, 4, 2, 'Complete'),
(113, 32, 223313961, 51, 1, 'Complete'),
(114, 34, 2141246807, 4, 1, 'Complete'),
(115, 34, 2141246807, 54, 2, 'Complete'),
(116, 34, 2141246807, 57, 1, 'Complete'),
(117, 34, 870837103, 6, 1, 'Complete'),
(118, 34, 646366984, 4, 1, 'Complete'),
(119, 34, 1425364998, 2, 1, 'Complete'),
(120, 33, 896751825, 1, 1, 'Complete'),
(121, 33, 896751825, 4, 1, 'Complete'),
(122, 33, 896751825, 53, 2, 'Complete'),
(123, 32, 548363567, 2, 1, 'Complete'),
(124, 32, 548363567, 4, 1, 'Complete'),
(125, 32, 548363567, 6, 1, 'Complete'),
(126, 32, 548363567, 52, 1, 'Complete'),
(127, 32, 548363567, 53, 1, 'Complete'),
(128, 32, 1766974316, 1, 1, 'Complete'),
(129, 32, 1766974316, 3, 1, 'Complete'),
(130, 32, 1766974316, 52, 3, 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_description` varchar(1000) NOT NULL,
  `product_keyword` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_title`, `product_description`, `product_keyword`, `product_image`, `product_price`, `date`, `status`) VALUES
(1, 'RK-1000X M4 Headphone', 'Experience audio like never before with the RK-1000X M4, a remarkable headphone that combines cutting-edge   technology with sleek design to deliver an unparalleled listening experience. Whether you are a music enthusiast,   a gamer, or a professional who demands top-tier sound quality, these headphones are engineered to meet and   exceed your expectations.  Upgrade your listening experience to the next level with the RK-1000X M4 headphones. Whether you are a music   aficionado, a gamer seeking an immersive experience, or simply someone who values premium audio quality, these   headphones are designed to deliver excellence in every note.', 'headphone earphone', 'p1.jpg', '2050', '2023-12-07 02:30:05', 'true'),
(2, 'Solo Pump S10 Bluetooth Speaker Red', 'SOLO PUMP - S 10 Feature Highlights Extraordinary Sound Through Bass Xpansion Technology.  The S10 is compatible with iPhone, iPod, Android, MP3 players, etc. Bluetooth Music Player  plays music from any Bluetooth supporting device (supports popular music file formats, or   streaming sound sources). Bluetooth Speakerphone be used for making and receiving calls from  the phone. Flexible Stand Alone MP3, MP4, WAV Music Player Up to 16 GB M File Storage.  Charge time: 2 hours Robust 3 Watt amplifier furnishes satisfying volume in nearly any size room.  Playback Time depending on volume level 2 - 8 hours.', 'speaker bluetooth speaker', 'p2.jpg', '755', '2023-10-09 02:19:59', 'true'),
(3, 'Sokany Kitchen Blender(Glass 400W)', 'SOKANY SK-709A citrus juicer is compact and lightweight, so you can easily take it with you.           It is perfect for use at home or when travelling.SOKANY SK-709A mini juicer can not only hold            different kinds of fruits and vegetables, but also be used as a normal tumbler (with a lid            suitable for storing leftovers of juice). With just one touch, you can enjoy freshly squeezed            juice or smoothie in no time at all.', 'kitchen blender mixer ', 'p3.png', '4799', '2023-10-09 02:20:03', 'true'),
(4, 'Stainless Steel Premium Oven', 'The mini oven maintains an even temperature in interior. Adjustable temperature controls(ideally between 100 ℃ and 230℃)          is straightforward enough that you can at least cook foods simple. With a maximum temperature of 230℃, you can even quickly          brown the outside of a prime rib. Great at warming something up quickly. Features four stainless steel heating elements          within the mini oven that helps provide even heat distribution for better cooking results. The retro shell of this solo          microwave oven will add a touch of color and a unique touch to your kitchen.', 'oven ', 'p4.jpg', '7000', '2023-10-09 02:20:07', 'true'),
(5, 'BenQ Full HD Projector MH560', 'Project presentations and multimedia content onto a big screen with the BenQ MH560 4000-Lumen            WXGA DLP Projector. It outputs up to 4000 ANSI lumens of brightness and has a 20,000:1 dynamic            contrast ratio to help produce clear details even in dark areas of the image. Various picture            modes adjust the settings of the projector to accommodate a variety of content types. The MW560            has VGA, composite video, S-Video, and two HDMI inputs for connecting your analog and digital HD            devices such as a Blu-ray player, cable/satellite box, computer, and more. A VGA output lets you            pass video through to another projector or display. The MW560 includes a VGA cable and an IR remote            control for added convenience.', 'projector Projector', 'p5.jpg', '50000', '2023-10-09 02:20:10', 'true'),
(6, 'Generic Electric Automatic 2 Slice Bread Toaster', 'Start your day off right with our state-of-the-art 2-Slice Toaster, designed to elevate          your morning routine to new heights. Crafted with precision and innovation, this toaster          is the perfect addition to any kitchen, offering a seamless toasting experience that ensures          your favorite breads, bagels, and pastries are always toasted to perfection.', 'toaster Toaster', 'p6.jpg', '7999', '2023-10-09 02:20:14', 'true'),
(7, 'Electron Vacuum Cleaner', 'Introducing the BST-807 Electron Vacuum Cleaner: Power Meets Precision!           Tired of the constant battle against dust, dirt, and allergens in your home?            Look no further than the BST-807 Electron Vacuum Cleaner, a powerful 1400W cleaning            marvel designed to transform your cleaning routine into a breeze.', 'vacuum cleaner', 'p7.jpg', '9500', '2023-10-09 02:20:17', 'true'),
(8, 'Washing Machine Black (FV1408S4B)', 'The perfect addition to your laundry room that combines cutting-edge technology with stunning design.           With its generous 8.0 kg capacity, this LG washing machine is designed to handle your familys laundry            The front load design not only adds a touch of modern sophistication to your space but also offers            superior performance LGs innovative 6 Motion Direct Drive technology customizes each wash cycle to suit            different fabric types, ensuring thorough cleaning and gentle care for your clothes.needs effortlessly.', 'washing machine  Washing Machine', 'p8.png', '15000', '2023-10-09 02:20:19', 'true'),
(15, 'product', 'some thing', 'pro', 'Spinner-5.gif', '100', '2023-12-09 07:09:50', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_mobile` varchar(10) NOT NULL,
  `user_image` varchar(1000) NOT NULL,
  `user_ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `user_email`, `user_password`, `user_mobile`, `user_image`, `user_ip`) VALUES
(32, 'kushal7', 'kushalkhadka77@gmail.com', '25d55ad283aa400af464c76d713c07ad', '9845124521', 'kushal.jpg', '::1'),
(33, 'rahul', 'rahulstha898@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', '9845231456', 'rahul.jpg', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount_due` int(255) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `total_products` int(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`order_id`, `user_id`, `amount_due`, `invoice_number`, `total_products`, `order_date`, `order_status`) VALUES
(104, 34, 7999, 870837103, 1, '2023-12-08 14:22:44', 'Complete'),
(105, 34, 7000, 646366984, 1, '2023-12-08 14:25:09', 'Complete'),
(109, 32, 29498, 1766974316, 3, '2023-12-09 05:08:41', 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `user_payments`
--

CREATE TABLE `user_payments` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `invoice_number` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_payments`
--

INSERT INTO `user_payments` (`payment_id`, `order_id`, `invoice_number`, `amount`, `location`, `payment_mode`, `date`) VALUES
(49, 98, 760615969, 56799, 'kathmandu', 'Cash on Delivery', '2023-12-07 15:42:46'),
(59, 102, 223313961, 43255, 'kathmandu', 'Cash on Delivery', '2023-12-08 15:46:20'),
(61, 109, 1766974316, 29498, 'kathmandu', 'Cash on Delivery', '2023-12-09 05:09:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `new_products`
--
ALTER TABLE `new_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `orders_pending`
--
ALTER TABLE `orders_pending`
  ADD PRIMARY KEY (`order_pending_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user_payments`
--
ALTER TABLE `user_payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart_details`
--
ALTER TABLE `cart_details`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `new_products`
--
ALTER TABLE `new_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `orders_pending`
--
ALTER TABLE `orders_pending`
  MODIFY `order_pending_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `user_payments`
--
ALTER TABLE `user_payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
