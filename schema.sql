CREATE TABLE IF NOT EXIST `users` (
  `id` int(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `created_at` varchar(225) DEFAULT NULL,
  `updated_at` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
);
