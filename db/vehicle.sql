

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE uutf8mb4_general_ci NOT NULL,
  `user_level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=uutf8mb4_general_ci;

INSERT INTO `users` (`id`, `username`, `password`, `name`, `user_level`) VALUES
(1, 'ba.bsk', 'scbd123', 'B-SkillFul', 'bsk'),
(2, 'admin', '$wiSS@33', 'Admin', 'ba'),
(3, 'ba.coof', 'scbd123', 'CoOf', 'coof'),
(4, 'scbd_dr', 'scbd123', 'Drivers', 'driver'),
(5, 'ba.dblp', 'scbd123', 'DBLP', 'dblp'),
(6, 'ba.m4c', 'scbd123', 'M4C', 'm4c'),
(7, 'ba.led', 'scbd123', 'PRABRIDDHI', 'led'),
(8, 'ba.badip', 'scbd123', 'BMMDP', 'badip');

