-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 09, 2018 at 02:29 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_genre`
--

CREATE TABLE `tbl_genre` (
  `genre_id` tinyint(3) UNSIGNED NOT NULL,
  `genre_name` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_genre`
--

INSERT INTO `tbl_genre` (`genre_id`, `genre_name`) VALUES
(1, 'Action'),
(2, 'Adventure'),
(3, 'Comedy'),
(4, 'Crime'),
(5, 'Drama'),
(6, 'Historical'),
(7, 'Horror'),
(8, 'Musical'),
(9, 'Science Fiction'),
(10, 'War'),
(11, 'Western'),
(12, 'Animation'),
(13, 'Family'),
(14, 'Fantasy'),
(15, 'Romance'),
(16, 'Sport');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_movies`
--

CREATE TABLE `tbl_movies` (
  `movies_id` mediumint(8) UNSIGNED NOT NULL,
  `movies_cover` text NOT NULL,
  `movies_title` text NOT NULL,
  `movies_year` text NOT NULL,
  `movies_runtime` text NOT NULL,
  `movies_storyline` text NOT NULL,
  `movies_trailer` text NOT NULL,
  `movies_release` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_movies`
--

INSERT INTO `tbl_movies` (`movies_id`, `movies_cover`, `movies_title`, `movies_year`, `movies_runtime`, `movies_storyline`, `movies_trailer`, `movies_release`) VALUES
(1, 'Blockers.jpg', 'Blockers\r\n', '2018', '1h42min', 'Three parents try to stop their daughters from having sex on Prom night.\r\n', 'Blockers.mp4', 'April 6, 2018'),
(2, 'place.jpg', 'A Quiet Place', '2018', '1h30min', 'A family is forced to live in silence while hiding from creatures that hunt by sound.\r\n', 'place.mp4', 'April 6, 2018'),
(3, 'season.jpg\r\n', 'The Miracle Season', '2018', '1h39min', 'After the tragic death of star volleyball player Caroline Line Found, a team of dispirited high school girls must band together under the guidance of their tough-love coach in hopes of winning the state championship.\r\n', 'season.mp4', 'April 6, 2018'),
(4, 'here.jpg\r\n', 'You Were Never Really Here', '2017', '1h30min', 'A traumatized veteran, unafraid of violence, tracks down missing girls for a living. When a job spins out of control, Joe s nightmares overtake him as a conspiracy is uncovered leading to what may be his death trip or his awakening.\r\n', 'here.mp4', 'April 6, 2018'),
(5, 'lean.jpg\r\n', 'Lean On Pete', '2017', '2h1min', 'A teenager gets a summer job working for a horse trainer and befriends the fading racehorse, Lean on Pete.\r\n', 'lean.mp4\r\n', 'April 6, 2018\r\n'),
(6, 'Chappaquiddick.jpg\r\n', 'Chappaquiddick', '2017', '1h41min', 'Depicting Ted Kennedy s involvement in the fatal 1969 car accident that claims the life of a young campaign strategist, Mary Jo Kopechne.\r\n', 'Chappaquiddick.mp4', 'April 6, 2018'),
(7, 'endless.jpg\r\n', 'The Endless\r\n', '2017', '1h51min', 'Two brothers return to the cult they fled from years ago to discover that the group s beliefs may be more sane than they once thought.\r\n', 'endless.mp4\r\n', 'April 6, 2018\r\n'),
(8, 'kyra.jpg', 'Where Is Kyra\r\n', '2017', '1h38min', 'In Brooklyn, New York, Kyra Pfeiffer loses her job and struggles to survive on her ailing mother s income. As the weeks and months go on, her problems worsen. This leads her on a risky and enigmatic path that threatens her life.\r\n', 'kyra.mp4\r\n', 'April 6, 2018'),
(9, 'spinning.jpg\r\n', 'Spinning Man', '2018', '1h40min', 'A happily married professor, known for having many affairs with students, becomes the prime suspect when a young woman has gone missing.', 'spinning.mp4', 'April 6, 2018'),
(10, 'player.jpg\r\n', 'Ready Player One', '2018', '2h20min', 'When the creator of a virtual reality world called the OASIS dies, he releases a video in which he challenges all OASIS users to find his Easter Egg, which will give the finder his fortune.', 'player.mp4', 'April 6, 2018'),
(11, 'Acrimony.jpg', 'Acrimony', '2018', '2h', 'A faithful wife, tired of standing by her devious husband, is enraged when it becomes clear she has been betrayed.', 'Acrimony.mp4', 'April 6, 2018'),
(12, 'black.jpg', 'Black Panther', '2018', '2h14min', 'T Challa, the King of Wakanda, rises to the throne in the isolated, technologically advanced African nation, but his claim is challenged by a vengeful outsider who was a childhood victim of T Challa s father s mistake.\r\n', 'black.mp4', 'April 6, 2018'),
(13, 'imagine.jpg\r\n', 'I Can Only Imagine', '2018', '1h50min', 'The inspiring and unknown true story behind MercyMe s beloved, chart topping song that brings ultimate hope to so many is a gripping reminder of the power of true forgiveness.', 'imagine.mp4', 'April 6, 2018'),
(14, 'uprising.jpg\r\n', 'Pacific Rim: Uprising', '2018', '1h51min', 'Jake Pentecost, son of Stacker Pentecost, reunites with Mako Mori to lead a new generation of Jaeger pilots, including rival Lambert and 15-year-old hacker Amara, against a new Kaiju threat.', 'uprising.mp4', 'April 6, 2018'),
(15, 'gnomes.jpg\r\n', 'Sherlock Gnomes', '2018', '1h26min', 'Garden gnomes, Gnomeo & Juliet, recruit renowned detective Sherlock Gnomes to investigate the mysterious disappearance of other garden ornaments.', 'gnomes.mp4', 'April 6, 2018'),
(16, 'love.jpg\r\n', 'Love, Simon', '2018', '1h50min', 'Simon Spier keeps a huge secret from his family, his friends, and all of his classmates: he s gay. When that secret is threatened, Simon must face everyone and come to terms with his identity.', 'love.mp4', 'April 6, 2018'),
(17, 'tomb.jpg\r\n', 'Tomb Raider', '2018', '1h58min', 'Lara Croft, the fiercely independent daughter of a missing adventurer, must push herself beyond her limits when she finds herself on the island where her father disappeared.', 'tomb.mp4', 'April 6, 2018'),
(18, 'time.jpg', 'A Winkle in Time', '2018', '1h49min', 'After the disappearance of her scientist father, three peculiar beings send Meg, her brother, and her friend to space in order to find him.', 'time.mp4', 'April 6, 2018'),
(19, 'paul.jpg', 'Paul, Apostle of Christ', '2018', '1h48min', 'The story covers Paul going from the most infamous persecutor of Christians to Jesus Christ s most influential apostle.', 'paul.mp4', 'April 6, 2018'),
(20, 'truth.jpg', 'Truth or Dare\r\n', '2018', '1h40min', 'A harmless game of Truth or Dare among friends turns deadly when someone -- or something -- begins to punish those who tell a lie or refuse the dare.', 'truth.mp4', 'April 13, 2018'),
(21, 'overboard.jpg', 'Overboard', '2018', '1h45min', 'A spoiled, wealthy yacht owner is thrown overboard and becomes the target of revenge from his mistreated employee. A remake of the 1987 comedy.', 'overboard.mp4', 'May 4, 2018'),
(22, 'rider.jpg', 'The Rider', '2017', '1h44min', 'After suffering a near fatal head injury, a young cowboy undertakes a search for new identity and what it means to be a man in the heartland of America.', 'rider.mp4', 'April 13, 2018'),
(23, 'beirut.jpg', 'Beirut', '2018', '1h49min', 'Caught in the crossfires of civil war, CIA operatives must send a former U.S. diplomat to negotiate for the life of a friend he left behind.', 'beirut.mp4', 'April 11, 2018\r\n'),
(24, 'zama.jpg', 'Zama\r\n', '2017', '1h55min', 'Based on the novel by Antonio Di Benedetto written in 1956, on Don Diego de Zama, a Spanish officer of the seventeenth century settled in Asunción, who awaits his transfer to Buenos Aires.', 'zama.mp4', 'September 28, 2017'),
(25, 'weeks.jpg', '20 Weeks', '2017', '1h29min', 'A couple must decide on how to move forward when their baby is diagnosed with a serious health condition at the 20 week scan.', 'weeks.mp4', 'June 19, 2017');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mov_genre`
--

CREATE TABLE `tbl_mov_genre` (
  `mov_genre_id` mediumint(8) UNSIGNED NOT NULL,
  `movies_id` mediumint(9) NOT NULL,
  `genre_id` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_mov_genre`
--

INSERT INTO `tbl_mov_genre` (`mov_genre_id`, `movies_id`, `genre_id`) VALUES
(1, 1, 3),
(2, 2, 5),
(3, 2, 7),
(4, 3, 5),
(5, 3, 16),
(6, 4, 5),
(7, 5, 2),
(8, 5, 5),
(9, 6, 5),
(10, 6, 6),
(11, 7, 7),
(12, 8, 5),
(13, 9, 5),
(14, 10, 1),
(15, 10, 2),
(16, 11, 7),
(17, 12, 1),
(18, 12, 2),
(19, 13, 5),
(20, 13, 13),
(21, 14, 1),
(22, 14, 2),
(23, 15, 12),
(24, 15, 2),
(25, 15, 3),
(26, 16, 3),
(27, 16, 5),
(28, 16, 15),
(29, 17, 1),
(30, 17, 2),
(31, 18, 2),
(32, 18, 13),
(33, 18, 14),
(34, 19, 5),
(35, 19, 6),
(36, 20, 7),
(37, 21, 3),
(38, 21, 15),
(39, 22, 5),
(40, 23, 5),
(41, 24, 5),
(42, 25, 5),
(43, 25, 15),
(51, 30, 3),
(52, 31, 2),
(53, 32, 2),
(54, 33, 1),
(55, 34, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` mediumint(8) UNSIGNED NOT NULL,
  `user_fname` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_level` varchar(15) NOT NULL,
  `user_ip` varchar(50) DEFAULT 'no',
  `user_first` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_name`, `user_pass`, `user_email`, `user_date`, `user_level`, `user_ip`, `user_first`) VALUES
(1, 'shengke', 'xu', '123456', 'xushengke94@gmail.com', '2018-04-08 20:00:45', '', '::1', ''),
(38, 'aa', 'aa', 'd3fad7d3634dbfb61018813546edbccb', 'aa', '2018-02-22 03:58:00', '2', NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_genre`
--
ALTER TABLE `tbl_genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `tbl_movies`
--
ALTER TABLE `tbl_movies`
  ADD PRIMARY KEY (`movies_id`);

--
-- Indexes for table `tbl_mov_genre`
--
ALTER TABLE `tbl_mov_genre`
  ADD PRIMARY KEY (`mov_genre_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_genre`
--
ALTER TABLE `tbl_genre`
  MODIFY `genre_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_movies`
--
ALTER TABLE `tbl_movies`
  MODIFY `movies_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `tbl_mov_genre`
--
ALTER TABLE `tbl_mov_genre`
  MODIFY `mov_genre_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
