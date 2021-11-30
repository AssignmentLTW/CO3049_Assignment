CREATE DATABASE IF NOT EXISTS `member` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `member`;

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `town` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `admin` varchar(2)  DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users` (`username`, `password`, `email`, `fullName`, `phone`, `town`, `city`, `district`,`admin`) VALUES
('ductam', '1111', 'tam@gmail.com', NULL, NULL, NULL, NULL, NULL,'Y');