-- create the table for our movie-actor relations
-- uses a composite primary key because each movie has multiple actors
CREATE TABLE `movie_actors` (
   `movieid` int(10) unsigned NOT NULL,
   `actorid` int(10) unsigned NOT NULL,
   PRIMARY KEY (`actorid`, `movieid`)
);
-- insert data into the table
INSERT INTO movie_actors
VALUES (1, 6),
   (2, 1),
   (3, 5),
   (4, 3),
   (4, 4),
   (5, 2);