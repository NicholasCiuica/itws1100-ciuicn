-- create the tables for our actors' characters
CREATE TABLE `actors` (
   `actorid` int(10) unsigned NOT NULL AUTO_INCREMENT,
   `first` varchar(100) NOT NULL,
   `last` varchar(100) NOT NULL,
   `dob` date NOT NULL,
   PRIMARY KEY (`actorid`)
)