-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2014 at 09:44 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `androidapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `apps`
--

CREATE TABLE IF NOT EXISTS `apps` (
  `app_id` int(11) NOT NULL AUTO_INCREMENT,
  `app_name` varchar(30) NOT NULL,
  `app_desc` varchar(100) NOT NULL,
  `more_desc` varchar(950) NOT NULL,
  `app_img` varchar(50) NOT NULL,
  `app_screen` varchar(50) NOT NULL,
  `app_link` varchar(50) NOT NULL,
  `app_cat` varchar(20) NOT NULL,
  PRIMARY KEY (`app_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `apps`
--

INSERT INTO `apps` (`app_id`, `app_name`, `app_desc`, `more_desc`, `app_img`, `app_screen`, `app_link`, `app_cat`) VALUES
(30, 'audio book', 'alkjasdlkjl;kjasdfjk', '', 'appsimage/audiobook.jpg', '', 'apps/Audiobooks.apk', 'Education'),
(31, 'ayat e HOLY QURAN', 'des', '', 'appsimage/ayat.jpg', '', 'apps/Ayat_ Holy Quran.apk', 'Education'),
(32, 'dictionary', 'asdaslkj;', '', 'appsimage/dict.jpg', '', 'apps/Dictionary.apk', 'Education'),
(33, 'math', 'lkajsd;lkjasfl;akdfj', '', 'appsimage/math app.jpg', '', 'apps/Mathematics.apk', 'Education'),
(34, 'play book', 'alskaslkdj;l', '', 'appsimage/googleplaybook.jpg', '', 'apps/Google Play Books.apk', 'Education'),
(36, 'fifa14', 'Version :1.3.2\r\nSize :13.43MB\r\nUpdated :2014-03-13\r\nRequirements:Android2.3.3\r\nAuthor :EA Swiss Sarl', 'Instructions for downloading this game:\r\n1. Download the apk file and install it to the mobile phone.\r\n2. Click the following link to download file.\r\nhttp://upload.voga360.com/mu/apk/attachment/com.ea.game.fifa14_row.rar\r\nUnzip the file to local file folder when the downloading is completed.\r\n3. Copy the unzipped file folder to the mobile phone.\r\nPath: Go to my phone--> SD card or memory-->android-->obb folder.\r\nYou are now set to play this exciting game!\r\nWelcome to the most authentic football game for Android smartphones. Feel the excitement of every pass, strike, and tackle with new touch controls. Plus, live every moment of real-world football mastery with EA SPORTS? Football Club Match Day. Featuring 30 leagues, 500 licensed teams, and more than 15,000 players. From the English Premiership and La Liga to the German Bundesliga and beyond.\r\nThe game you love. The game you live for. WE ARE FIFA 14!', 'appsimage/fifa.jpg', 'appsimage/fifa screen.jpg', 'apps/FIFA 14(Full Game!See Details!).apk', 'Games'),
(37, 'mx player', 'lskdlj', 'asdlfjalkfj', 'appsimage/mxplayer.jpg', 'appsimage/mxplayerscreen2.jpg', 'apps/MX Player_1.6j.apk', 'Entertainment'),
(38, 'mx player codec', 'adskl;kad', 'adslj;lasj', 'appsimage/mxplayercodec.jpg', 'appsimage/mxplayerscreen.jpg', 'apps/MX(ARMv6VFP)_1.6i(codec).apk', 'Entertainment'),
(39, '3d bowling', 'adsfa', 'asf', 'appsimage/3dbowling1.jpg', 'appsimage/3dbowling1.jpg', 'apps/3D Bowling.apk', 'Games'),
(40, 'angry bird', 'adfdad', 'ads', 'appsimage/anglogo.jpg', 'appsimage/1.jpg', 'apps/Angry Birds Space.apk', 'Games'),
(41, 'basket ball', 'aslkj', 'al;sdkj', 'appsimage/baskteball.jpg', 'appsimage/baskteball.jpg', 'apps/Real Basketball.apk', 'Games'),
(42, 'basket ball', 'asdads', 'asdd', 'appsimage/big_win.jpg', 'appsimage/big_win.jpg', 'apps/BIG WIN Basketball.apk', 'Games'),
(43, 'bmx player', 'asddkl;', 'a;lkdj;l', 'appsimage/7.jpg', 'appsimage/5.jpg', 'apps/BMX Boy.apk', 'Games'),
(44, 'bowman', 'aaldk;lj', 'asl;dkj', 'appsimage/bowman.jpeg', 'appsimage/bowman.jpeg', 'apps/Bow Man.apk', 'Games'),
(45, 'chess', 'asdlkj;', 'asldkj;lj', 'appsimage/chess.jpg', 'appsimage/chess.jpg', 'apps/Chess.apk', 'Games'),
(46, 'cut the rope', 'asdlj', 'a;lkdj', 'appsimage/cutlogo.png', 'appsimage/cut-the-rope.jpg', 'apps/Cut the Rope FULL FREE.apk', 'Games'),
(47, 'finger', 'asldkj', ';alsdja;lsdjs', 'appsimage/finger.jpg', 'appsimage/finger.jpg', 'apps/Fingerboard 3D.apk', 'Games'),
(48, 'flappy', 'asd', 'sda', 'appsimage/download explam.jpg', 'appsimage/flaplogo.jpg', 'apps/flappybird.apk', 'Games'),
(49, 'fruit ninja', 'asldkj', 'alsdkj;', 'appsimage/fruit nija.jpg', 'appsimage/fruit nija.jpg', 'apps/Fruit Ninja Free.apk', 'Games'),
(50, 'ball pool', 'asldkj', ';lkjl;asjd', 'appsimage/1.png', 'appsimage/2.jpg', 'apps/8 Ball Pool.apk', 'Games'),
(51, 'bubble shoot', 'asdjl', 'l;kja;', 'appsimage/bulogo1.jpg', 'appsimage/logo.jpg', 'apps/Shoot Bubble Deluxe.apk', 'Games'),
(52, 'ski champion', 'asdlkj', 'a;lsjd', 'appsimage/ski_champion.jpg', 'appsimage/ski_champion.jpg', 'apps/Ski Champion.apk', 'Games'),
(53, 'sniper shooting', 'asdl', 'asdl;kj', 'appsimage/xtrem.jpg', 'appsimage/xtrem.jpg', 'apps/Xtrem Snowboarding.apk', 'Games'),
(54, 'subway surfer', 'Version :2.2<br/>\r\nSize :4.31MB<br/>\r\nUpdated :2014-02-16<br/>\r\nRequirements:Android2.2<br/>\r\nAuthor', 'aslkj', 'appsimage/subway.png', 'appsimage/subway.png', 'apps/subway.txt', 'Games'),
(55, 'table tennis', 'aslkf', 'qasdl', 'appsimage/table_tenis.jpg', 'appsimage/table_tenis.jpg', 'apps/Virtual Table Tennis 3D.apk', 'Games'),
(56, 'fast racing 3d', 'Version :1.01<br/>\r\nSize :16.20MB<br/>\r\nUpdated :2014-01-27<br/>\r\nRequirements:Android2.1<br/>\r\nAuth', '\r\n\r\nBurn up the street with the fastest and most exhilarating 3D<br/> \r\nracing action in Fast Racing today! Live your life a quarter<br/> \r\nmile at a time as you take over the streets in this #1 acclaimed<br/>\r\n3D racing game. Fast Racing combines stunning, high fidelity graphics<br/>\r\nwith addictive gameplay that will have you swerving through oncoming<br/>\r\ntraffic, collecting power-ups, and knocking other racers off the road.<br/>', 'appsimage/fast racing.jpg', 'appsimage/fast racing 3d Screen.png', 'apps/Fast Racing 3D.apk', 'Games');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_fname` varchar(40) NOT NULL,
  `user_lname` varchar(40) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `user_email` varchar(80) NOT NULL,
  `user_pass` varchar(20) NOT NULL,
  `user_gender` varchar(6) NOT NULL,
  `user_dob` varchar(12) NOT NULL,
  `user_role` int(2) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_fname`, `user_lname`, `user_name`, `user_email`, `user_pass`, `user_gender`, `user_dob`, `user_role`) VALUES
(9, 'sheriyar', 'shirazi', 'adil', '123', '123', 'm', '25-05-1992', 56),
(2, 'shirazi', 'shirazi', 'shery', 'sheryarshirazi@gmail.com', 'qwerty', 'm', '25-05-1992', 2),
(3, 'owais', 'ahmad', 'aavi', 'aavikhan@outlook.com', 'aavi123', 'm', '1-2-1993', 1),
(4, 'erum', 'rashid', 'erum', 'erum.rasheeduddin@gmail.com', 'helloworld', 'f', '25-9-2000', 11),
(10, 'adil', 'junani', 'junani', 'asad', 'asad', 'm', '25-05-1992', 30),
(11, 'mahad', 'nabi', 'mahad', 'asad', 'asad', 'm', '25-05-1992', 55),
(12, 'ahmad', 'faraz', 'ahmadfaraz', 'asad', 'asad', 'm', '25-05-1992', 55),
(15, 'shery', 'shirazi', 'af', 'ad', 'ad', 'm', '25-05-1992', 55),
(16, 'mark', 'zuker', 'mzberg', 'asad', 'asad', 'm', '25-05-1992', 56),
(17, 'ali', 'ahmad', 'aliahmad', 'asad', 'asad', 'm', '25-05-1992', 33),
(22, 'gohar', 'mumtaz', 'gohar', 'gohar@gmail.com', 'asad', 'male', '25-05-1992', 0),
(19, 'abdul', 'rehman', 'abdulrehman', 'asad', 'asad', 'm', '25-05-1992', 0),
(23, 'mohammad', 'ali', 'mali', 'mali@gmail.com', 'asad', 'male', '25-05-1992', 23),
(24, 'saqib', 'rehman', 'saqib', 'saqib@gmai.com', 'asad', 'male', '25-05-1992', 26);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
