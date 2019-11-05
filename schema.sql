CREATE TABLE IF NOT EXISTS db.users
(
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `created_at` varchar(225) DEFAULT NULL,
  `updated_at` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
);