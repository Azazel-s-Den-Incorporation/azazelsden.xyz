CREATE DATABASE IF NOT EXISTS `phplogin` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `phplogin`;

CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'Member',
  `approved` tinyint(1) NOT NULL DEFAULT 1,
  `activation_code` varchar(255) NOT NULL DEFAULT '',
  `remember_me_code` varchar(255) NOT NULL DEFAULT '',
  `reset_code` varchar(255) NOT NULL DEFAULT '',
  `last_seen` datetime NOT NULL,
  `registered` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `accounts` (`id`, `username`, `password`, `email`, `role`, `approved`, `activation_code`, `remember_me_code`, `reset_code`, `last_seen`, `registered`) VALUES
(1, 'admin', '$2y$10$ZU7Jq5yZ1U/ifeJoJzvLbenjRyJVkSzmQKQc.X0KDPkfR3qs/iA7O', 'admin@example.com', 'Admin', 1, 'activated', '', '', '2024-01-01 00:00:00', '2024-01-01 00:00:00'),
(2, 'member', '$2y$10$yWKu95tLTnqdNhR/XfHtEekrjKJg2iVa8p65Da/EoijSPaFkRnmRG', 'member@example.com', 'Member', 1, 'activated', '', '', '2024-01-01 00:00:00', '2024-01-01 00:00:00');