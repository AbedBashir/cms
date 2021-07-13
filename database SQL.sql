-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 13, 2021 at 11:24 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'JavaScript'),
(2, 'HTML'),
(6, 'PHP'),
(20, 'SQL');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(3) NOT NULL,
  `comment_date` date NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_date`, `comment_author`, `comment_email`, `comment_content`, `comment_status`) VALUES
(1, 10, '2021-07-13', 'Abed Bashir', 'abedbashiir@gmail.com', 'this is just an example', 'approved'),
(8, 10, '2021-07-13', 'Karim', 'kakaka@gmail.com', 'this pic ture is nice! loved it', 'unapproved'),
(11, 11, '2021-07-13', 'Jad Kawas', 'jk@gmail.com', 'hello tere, nce', 'unapproved'),
(20, 11, '2021-07-13', '234', 'abedbashir23@gmail.com', 'nce', 'approved'),
(21, 10, '2021-07-13', 'Jad Kawas', 'abedbashir23@gmail.com', 'this is a test only for increment the comment number', 'unapproved');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` int(255) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`) VALUES
(10, 1, 'JavaScript', 'Travis Scott', '2021-07-13', 'IMG_9239.jpeg', 'Online                                        ', 'js, javascript, class, course', 5, 'published'),
(11, 20, 'bash company is awesome', 'Abdel Rahman Bashir', '2021-07-13', 'Signature.jpeg', 'bash company is flying high        ', 'bash, bash company', 4, 'draft'),
(12, 2, 'Front-End VS Back-End', 'Jad Kawas', '2021-07-13', 'bsd.png', 'the war is realllllll        ', 'html, frontend,backend', 4, 'draft'),
(13, 6, 'Italy Won The Euro', 'Ibrahim Hamdan', '2021-07-14', 'simple-made-in-italy-symbol-colored-italian-vector-26739987.jpeg', '         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque elementum nec nibh ac tempor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent vitae nisl eget nisi maximus malesuada sit amet non odio. Vestibulum consectetur libero non est mattis, eu porttitor velit fermentum. Phasellus mollis pulvinar risus, at dignissim risus posuere id. Ut vitae mi arcu. Sed varius aliquam lacinia. Maecenas pharetra porta nisl pharetra sollicitudin.\r\n\r\nMaecenas augue ante, mollis non arcu et, elementum mollis ligula. Sed maximus, elit a aliquam pellentesque, tortor ante lobortis justo, sed vulputate dui neque a nisl. Duis dictum nisi ac metus ullamcorper, in hendrerit orci iaculis. Nulla pulvinar nunc sit amet tincidunt volutpat. Sed venenatis lacinia porttitor. In lacinia orci ipsum, ac porttitor massa rutrum at. Nullam ultricies aliquam lobortis. Fusce vitae arcu libero. Nunc varius fermentum lacus, vitae eleifend ante mattis non. Aliquam sollicitudin tempus hendrerit.\r\n\r\nCras id porta quam, quis ultrices augue. Vivamus mattis sed sapien ut tempor. Nullam lacinia nisi quis purus semper dignissim. Aliquam scelerisque pellentesque turpis, nec gravida neque iaculis ac. Aliquam erat volutpat. Nam turpis nunc, pellentesque sed maximus eu, hendrerit id leo. In hac habitasse platea dictumst. Maecenas nec est feugiat, hendrerit massa ac, molestie justo. Nam feugiat elit et justo condimentum malesuada. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent luctus nisi aliquam dolor aliquet dictum nec non sem. Nam lacinia dapibus sem, non faucibus risus facilisis eleifend. Nam eu nunc egestas, malesuada leo nec, imperdiet odio. Pellentesque molestie, libero eu vestibulum malesuada, metus urna aliquam magna, a condimentum felis nunc sed elit. Cras lacus leo, interdum lacinia maximus vitae, tincidunt in risus. Etiam facilisis dolor libero, in posuere nisi tincidunt fringilla.\r\n\r\nFusce leo ante, porta et placerat quis, volutpat quis purus. Suspendisse mollis elit sit amet finibus finibus. Sed ut rhoncus quam, eget pretium eros. Aliquam consequat laoreet nisi, vel placerat magna porttitor sed. Fusce convallis consectetur felis, id ornare sem elementum id. Nullam ornare, eros in faucibus accumsan, turpis justo pulvinar ex, vel egestas nisi urna ac nisi. Proin at felis et mi efficitur luctus. Vestibulum aliquam tincidunt interdum. Nam aliquam, metus a congue sodales, felis dui sagittis dui, id ultrices massa risus eu ligula. Aliquam rhoncus dapibus elementum. Nunc tincidunt consequat sem, a gravida odio ullamcorper non.\r\n\r\nAliquam sed orci eu enim tempus cursus pharetra nec neque. Morbi nibh urna, sollicitudin eu turpis et, lacinia semper urna. Proin sit amet est vitae ante maximus sollicitudin at ac tellus. Integer blandit, nibh vel dictum semper, ligula tortor congue augue, nec luctus nisi odio vitae magna. Praesent mattis lacus nec consequat volutpat. Nunc placerat tempor augue nec auctor. Praesent ac dictum ligula, id mattis nisl. Cras mauris purus, faucibus eu tincidunt quis, placerat sed arcu. Suspendisse urna nisi, dictum sed egestas ultrices, tempus volutpat odio. Suspendisse potenti.        ', 'italy, forza inter, bob', 4, 'draft'),
(14, 6, 'InterNationale', 'Ibrahim Hamdan', '2021-07-13', 'inter-milan-football-club-rebrand-logo_dezeen_2364_col_3-852x479.jpeg', '         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque elementum nec nibh ac tempor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent vitae nisl eget nisi maximus malesuada sit amet non odio. Vestibulum consectetur libero non est mattis, eu porttitor velit fermentum. Phasellus mollis pulvinar risus, at dignissim risus posuere id. Ut vitae mi arcu. Sed varius aliquam lacinia. Maecenas pharetra porta nisl pharetra sollicitudin.\r\n\r\nMaecenas augue ante, mollis non arcu et, elementum mollis ligula. Sed maximus, elit a aliquam pellentesque, tortor ante lobortis justo, sed vulputate dui neque a nisl. Duis dictum nisi ac metus ullamcorper, in hendrerit orci iaculis. Nulla pulvinar nunc sit amet tincidunt volutpat. Sed venenatis lacinia porttitor. In lacinia orci ipsum, ac porttitor massa rutrum at. Nullam ultricies aliquam lobortis. Fusce vitae arcu libero. Nunc varius fermentum lacus, vitae eleifend ante mattis non. Aliquam sollicitudin tempus hendrerit.\r\n\r\nCras id porta quam, quis ultrices augue. Vivamus mattis sed sapien ut tempor. Nullam lacinia nisi quis purus semper dignissim. Aliquam scelerisque pellentesque turpis, nec gravida neque iaculis ac. Aliquam erat volutpat. Nam turpis nunc, pellentesque sed maximus eu, hendrerit id leo. In hac habitasse platea dictumst. Maecenas nec est feugiat, hendrerit massa ac, molestie justo. Nam feugiat elit et justo condimentum malesuada. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent luctus nisi aliquam dolor aliquet dictum nec non sem. Nam lacinia dapibus sem, non faucibus risus facilisis eleifend. Nam eu nunc egestas, malesuada leo nec, imperdiet odio. Pellentesque molestie, libero eu vestibulum malesuada, metus urna aliquam magna, a condimentum felis nunc sed elit. Cras lacus leo, interdum lacinia maximus vitae, tincidunt in risus. Etiam facilisis dolor libero, in posuere nisi tincidunt fringilla.\r\n\r\nFusce leo ante, porta et placerat quis, volutpat quis purus. Suspendisse mollis elit sit amet finibus finibus. Sed ut rhoncus quam, eget pretium eros. Aliquam consequat laoreet nisi, vel placerat magna porttitor sed. Fusce convallis consectetur felis, id ornare sem elementum id. Nullam ornare, eros in faucibus accumsan, turpis justo pulvinar ex, vel egestas nisi urna ac nisi. Proin at felis et mi efficitur luctus. Vestibulum aliquam tincidunt interdum. Nam aliquam, metus a congue sodales, felis dui sagittis dui, id ultrices massa risus eu ligula. Aliquam rhoncus dapibus elementum. Nunc tincidunt consequat sem, a gravida odio ullamcorper non.\r\n\r\nAliquam sed orci eu enim tempus cursus pharetra nec neque. Morbi nibh urna, sollicitudin eu turpis et, lacinia semper urna. Proin sit amet est vitae ante maximus sollicitudin at ac tellus. Integer blandit, nibh vel dictum semper, ligula tortor congue augue, nec luctus nisi odio vitae magna. Praesent mattis lacus nec consequat volutpat. Nunc placerat tempor augue nec auctor. Praesent ac dictum ligula, id mattis nisl. Cras mauris purus, faucibus eu tincidunt quis, placerat sed arcu. Suspendisse urna nisi, dictum sed egestas ultrices, tempus volutpat odio. Suspendisse potenti.', 'inter, forza inter, internationale, torro, barella, lukaku', 4, 'published'),
(17, 2, 'RawaTV', 'Rawa', '2021-07-14', 'startup_155351083396.jpeg', '         STREAMERS                ', 'rawa, streamers', 1, 'published');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
