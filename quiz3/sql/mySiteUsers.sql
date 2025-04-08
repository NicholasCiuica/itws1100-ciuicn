CREATE TABLE `mySiteUsers` (
  `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `mySiteUsers`(`id`, `user`, `pass`, `name`, `type`) VALUES 
(0, "ciuicn", "secret", "Nicholas Ciuica", "admin"),
(1, "teacher", "1234", "Professor Plotka or TA Ola", "user");