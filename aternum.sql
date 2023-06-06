-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 08:56 AM
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
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'user',
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `email`, `password`, `usertype`, `image`) VALUES
(537, 'asddd', 'asdd@sad', '845441edc5ed7ea737439aa46715eed2', 'user', ''),
(538, 'bojji_', '2021301429@dhvsu.edu.ph', '72b302bf297a228a75730123efef7c41', 'user', 'd84a5b122bedcc861d45c084fcadf06c.png'),
(539, 'carol', 'carolinartz@gg.co', '81dc9bdb52d04dc20036dbd8313ed055', 'user', 'images (1).jpg'),
(540, 'loraine', 'loralin@gg.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user', 'acd805a24bf273ffa84bf37bf1d5d88a.jpg'),
(541, 'kayla', 'kkylaa@gg.co', '81dc9bdb52d04dc20036dbd8313ed055', 'user', 'download.jpg'),
(542, 'kiyoshi', 'kiiiiyooosh@gg.co', '81dc9bdb52d04dc20036dbd8313ed055', 'user', '9c4ca5fab4e09b9b4756b557a966116e.jpg'),
(543, 'willow', 'pillowow@gg.co', '81dc9bdb52d04dc20036dbd8313ed055', 'user', 'fae787d2624e111d7f8d6ee87856c67a.jpg'),
(544, 'alie', 'aliAyt@gg.co', '81dc9bdb52d04dc20036dbd8313ed055', 'user', 'e23158b6bd1fbde40195ca48dcfd8e62.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `uploaded_image`
--

CREATE TABLE `uploaded_image` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uploaded_image`
--

INSERT INTO `uploaded_image` (`id`, `user_id`, `title`, `description`, `image`) VALUES
(1, 542, 'TAKE THIS,PEPE!', 'Taking rebellious liberties, even national heroes get the occasional flip of defiance.', 'IMG-647d7e2456fc55.17316238.jpg'),
(65, 538, 'sad kermit', 'I am Kermit, the lovable green frog, and a profound sadness permeates my being. Within the depths of my soul, I carry an insatiable desire to be embraced and cherished, yearning for the warmth and tenderness of love. Alas, despite my fervent hopes, it seems that the fulfillment of this longing remains an elusive dream, forever beyond my grasp.', 'IMG-647c02a430a270.29136849.png'),
(66, 539, 'bob ross', 'Where mountains touch the sky, serenity finds its highest peak.', 'IMG-647c0755816c50.98392421.jpg'),
(67, 539, 'The Ghost in me', 'The ache in my heart grows stronger with each passing day, as I yearn for the presence of a person who has faded into the depths of time, their essence slipping away like sand through my fingers. The empty space they once occupied in my life is now filled with bittersweet memories of the past. In my dreams, I search for their face, hoping to capture a fleeting glimpse of their familiar smile, but instead, I m confronted with the harsh reality that they have become an ethereal figure, forever lost in the realm of nostalgia. ', 'IMG-647c092a479304.07140296.jpg'),
(68, 543, 'Duck', '\"Quackin\' and Smokin\', this duck is smokin\' hot!\"', 'IMG-647c0cf2300f58.90582886.jpg'),
(69, 543, 'Til death do us part', 'Eternally entwined, their love transcends mortal realms, united even in the afterlife.\r\n', 'IMG-647c0e010402f0.29758074.jpg'),
(70, 541, 'The Sun', '#sun', 'IMG-647c0e8a21f9a4.35603283.jpg'),
(71, 541, 'Mosaic Heart', '#abstract', 'IMG-647c0eabd7c432.53671241.jpg'),
(72, 541, 'Swirl', '#abstract', 'IMG-647c0edba01445.44674959.jpg'),
(73, 540, 'Taste of Love', 'Sipping love from the depths of their glasses, their hearts intertwine with every sip.', 'IMG-647c0f1b2054e3.90780276.jpg'),
(74, 540, 'Heartpop', 'Love: the original masterpiece that inspires, confuses, and makes candy-enjoyers crave their heart-shaped lollipops.', 'IMG-647c0f6a06f085.37039256.jpg'),
(81, 540, 'Tsulip', 'Blooming with sass and petals, these flowers know how to work the garden runway.', 'IMG-647c248a6ec430.49936770.jpg'),
(82, 543, 'Temptation Unleash', 'Embrace the temptation; it might just be your masterpiece in disguise.', 'IMG-647d7937003528.86203143.jpg'),
(83, 542, 'who?', 'Lost in a sea of mirrors, even the artist can\'t tell who they truly are.', 'IMG-647d79785a0fc9.43266645.jpg'),
(84, 542, 'Disco Forever', 'Shine bright like a disco ball, even when the world tries to dim your sparkle.', 'IMG-647d79f3da1c74.39848666.jpg'),
(85, 544, 'Eyeroll', 'When anger knocks, make sure your sense of humor answers the door.', 'IMG-647d7b8a877454.91666799.jpg'),
(86, 540, 'Wonder Woman', 'Tangled threads, twisted creativity, and a masterpiece that\'s all tied up in knots.', 'IMG-647d7bd3b017c4.95826290.jpg'),
(87, 542, 'Whiskers', 'Mysterious and as elusive as moonlight, this silhouette of a blue cat leaves you feline enchanted.', 'IMG-647d7c1c26da01.07980603.jpg'),
(88, 543, 'What is the point of Melody?', 'Fingers dancing on ivory keys, the pianist weaves melodies that touch the deepest chords of our souls.', 'IMG-647d7c8b5e19b4.21678119.jpg'),
(89, 538, 'I am on the otherside', 'ye', 'IMG-647d7ce0094684.33955223.png'),
(90, 538, 'Kermit is Depressed', '1', 'IMG-647d7d03a1d822.41503447.png'),
(91, 544, 'Lara', 'bangkay', 'IMG-647d7d6e2991d6.96533678.jpg'),
(92, 541, 'Uzumaki', 'Venture down the whimsical rabbit hole, where curiosity unravels a world of enchantment and surprises at every turn.\r\n', 'IMG-647d7db95d7720.77707853.jpg'),
(93, 542, 'Naturally Pretty', 'A delicate marvel of nature, the mariposa gracefully flutters, showcasing the beauty that can be found in even the smallest of wings.', 'IMG-647d7e00dfece6.40120848.jpg'),
(95, 541, 'infrared sexy body', 'Embrace the beauty within, for it knows no bounds and defies societal judgments.', 'IMG-647d7eb3e50c85.81724587.jpg'),
(96, 541, 'just about to...', 'In the labyrinth of thoughts, sanity slips through the cracks, leaving the mind untethered.\r\n', 'IMG-647d7effcf32a5.68222504.jpg'),
(97, 539, 'Waves of you', 'Where land meets the vast expanse of blue, seascapes paint a picture of infinite serenity.', 'IMG-647d7f3b4ff4e3.91799798.jpg'),
(98, 544, 'Im a bad girl', 'Gaslight, Gatekeep, Girlboss', 'IMG-647d7f70a1dc10.09973485.jpg'),
(99, 539, 'Starry Night Yarn Art', 'Weave a tapestry of celestial wonder, capturing the enchantment of Van Gogh\'s Starry Night with the artful threads of yarn and bringing its timeless beauty to life.\r\n', 'IMG-647d803ac5ce76.43434784.jpg'),
(100, 543, 'My Chemical Romance', 'she found the colors to paint him where the world left him gray', 'IMG-647d8113a5f593.22491107.jpg'),
(101, 543, 'life comes with death and death comes with life', 'In hues of raw emotion, the strokes of the brush capture the silent tears cascading down her face, a poignant portrayal of vulnerability and strength entwined on the canvas of an oil masterpiece.\r\n', 'IMG-647d81dac6fe48.29027066.jpg'),
(102, 539, 'HELLp', 'In a canvas of poignant emotion, the artwork portrays the haunting beauty of a depressed woman, speaking volumes without words, reminding us of the power of empathy and the importance of supporting mental well-being.\r\n', 'IMG-647d8237676ef4.46891200.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploaded_image`
--
ALTER TABLE `uploaded_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=545;

--
-- AUTO_INCREMENT for table `uploaded_image`
--
ALTER TABLE `uploaded_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `uploaded_image`
--
ALTER TABLE `uploaded_image`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `login` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
