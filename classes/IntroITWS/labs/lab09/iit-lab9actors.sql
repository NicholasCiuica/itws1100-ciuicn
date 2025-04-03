-- create the tables for our actors
CREATE TABLE `actors` (
   `actorid` int(10) unsigned NOT NULL AUTO_INCREMENT,
   `last_name` varchar(100) NOT NULL,
   `first_names` varchar(100) NOT NULL,
   `dob` date NOT NULL,
   PRIMARY KEY (`actorid`)
);
-- insert data into the tables
INSERT INTO actors
VALUES (1, "Johansson", "Scarlet", "1984-11-22"),
   (2, "Clooney", "George", "1961-05-06"),
   (3, "McKellen", "Ian", "1939-05-25"),
   (4, "Mortensen", "Viggo", "1958-10-20"),
   (5, "Goodman", "John", "1952-06-20"),
   (6, "Blanchett", "Cate", "1969-05-14");