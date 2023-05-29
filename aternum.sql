SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

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
(516, 'admin', 'admin@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'admin', ''),
(520, 'bruce', '321', '321', 'user', 'sub-buzz-15909-1481645256-5.png'),
(523, 'red', 'red@gmail.com', 'bda9643ac6601722a28f238714274da4', 'admin', ''),
(524, 'admin2', '1231@asd', '123', 'admin', ''),
(525, '123', '1231@asd123', '123', 'user', ''),
(526, 'sad', 'sad@ga', 'sad', 'user', ''),
(527, 'test', '123@111', '202cb962ac59075b964b07152d234b70', 'user', 'sub-buzz-15909-1481645256-5.png'),
(528, 'ttt', 'tt@g', '9990775155c3518a0d7917f7780b24aa', 'user', 'insigniagame.png'),
(529, 'ad', 'ad@a', 'f970e2767d0cfe75876ea857f92e319b', 'admin', ''),
(530, 'aaa', 'aaa@a', '47bce5c74f589f4867dbd57e9ca9f808', 'admin', ''),
(531, '333', '123@1', '310dcbbf4cce62f762a2aaa148d556bd', 'user', ''),
(532, '1233', '1233@1', 'e034fb6b66aacc1d48f445ddfb08da98', 'user', ''),
(533, '111', '111@111', '698d51a19d8a121ce581499d7b701668', 'user', ''),
(534, '444', '444@4', '550a141f12de6341fba65b0ad0433500', 'user', ''),
(535, 'asd', 'asd@asd', '7815696ecbf1c96e6894b779456d330e', 'user', ''),
(536, 'asda', 'asda@asd', 'adbf5a778175ee757c34d0eba4e932bc', 'user', '');

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
(37, 520, '', '', 'IMG-6453a9ca9972d2.39409688.jpg'),
(38, 520, '', '', 'IMG-6453a9d43f7338.40594666.png'),
(39, 520, '', '', 'IMG-6453a9e3e32ca9.91422464.jpg'),
(40, 520, '', '', 'IMG-6453a9f8f388a9.76283880.png'),
(41, 520, '', '', 'IMG-6453ad9919be58.28956548.png'),
(42, 520, '', '', 'IMG-6453b5523d4627.67376006.png'),
(43, 520, '', '', 'IMG-6453beb2e14396.25095720.jpg'),
(44, 520, '', '', 'IMG-6453beffee3206.34366125.jpg'),
(45, 528, '', '', 'IMG-6453cb7cd0c202.29877754.png'),
(46, 528, '', '', 'IMG-6454d21b741913.32617581.png'),
(47, 528, '', '', 'IMG-645f42c406e524.33375781.jpg'),
(51, 528, '', '', 'IMG-646f3f6480acb5.73067001.jpg'),
(52, 531, '', '', 'IMG-646facc814fa05.58111897.jpg'),
(53, 528, '', '', 'IMG-646fb5bb7c4518.53314694.png'),
(54, 528, '', '', 'IMG-64700fa7279908.46789707.png'),
(55, 528, '', '', 'IMG-64700fc7a6b9f9.97041097.png'),
(56, 528, 'This is a title', 'this is a description', 'IMG-647010ab069604.15821525.jpg'),
(58, 528, 'asd', 'asd', 'IMG-647444f2784d23.36236384.png'),
(59, 528, 'asd', 'asd', 'IMG-64744514407426.44268530.png'),
(60, 528, 'asd', 'asd', 'IMG-647445247c6864.40626810.png'),
(61, 528, 'asdaaa', 'asdaaaa', 'IMG-647447d82800a1.10788497.png'),
(62, 528, 'ako', 'asdasdasdasd asdasd asdasdasdasdasdasdasdasdasdsadasdfwegqwergwegwqefwefwefwefwqefweqf', 'IMG-64744825316951.33223727.jpg'),
(63, 528, 'asdasd', 'asdasdas', 'IMG-64744933441ad9.52400682.png');

ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `uploaded_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=537;

ALTER TABLE `uploaded_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

ALTER TABLE `uploaded_image`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `login` (`id`);
COMMIT;

