-- create the table for our actors
CREATE TABLE `actors` (
   `actorid` int(10) unsigned NOT NULL AUTO_INCREMENT,
   `last_name` varchar(100) NOT NULL,
   `first_names` varchar(100) NOT NULL,
   `dob` date NOT NULL,
   PRIMARY KEY (`actorid`)
);
-- insert data into the table
INSERT INTO actors
VALUES (1, "Pugh", "Florence", "1996-01-03"),
   (2, "Kendrick", "Anna", "1985-08-09"),
   (3, "McKellen", "Ian", "1939-05-25"),
   (4, "Mortensen", "Viggo", "1958-10-20"),
   (5, "Goodman", "John", "1952-06-20"),
   (6, "Rush", "Geoffrey", "1951-07-06");