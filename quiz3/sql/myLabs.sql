CREATE TABLE `myLabs` (
  `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `desc` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `myLabs`(`id`, `title`, `desc`, `link`) VALUES 
(0, "Lab 1", "Setup", "lab01/"),
(1, "Lab 2", "Resume", "lab02/"),
(2, "Lab 3", "Site Architecture", "lab03/"),
(3, "Lab 4", "RSS/Atom XML Feeds", "lab04/"),
(4, "Lab 5", "JavaScript", "lab05/"),
(5, "Lab 6", "JQuery", "lab06/"),
(6, "Lab 7", "Team Project Mockups", "lab07/"),
(7, "Lab 8", "JSON/AJAX", "lab08/"),
(8, "Lab 9", "SQL/PHP", "lab09/"),
(9, "Lab 10", "Website Deployment", "lab10/"),
(10, "Group Project", "Team 9", "group_project");