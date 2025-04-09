My new website homepage (index.html in iit) contains a sign-in form that submits a post request back to the homepage.
When the homepage is loaded with a post request, I try to find the user's credentials in the mySiteUsers database table.
If I find the user, I sign them in and keep them signed in using session storage.

If a user goes to the labs homepage (now index.php in classes/IntroITWS/) while they are signed in as an admin user,
I add a form to add new labs. Each lab is listed on this page, and admins have the option to delete labs by clicking the deleteLab
button assigned to the lab they want to delete.

My quiz3 folder conains my archived index.html website homepage, a folder of included php modules for building all my sites,
and a folder of sql commands that I used to make and populate my database tables.
It also contains my database's contents at the time of submission and the CREATE commands used to make them (ciuicn-mySite.sql).
Additionally, it contains conn.php, which contains my database credentials, delete-lab.js, which triggers delete-lab.php whenever
a deleteLab button is clicked on my labs homepage, and sanitize.php, which includes a php function that removes reserved or unsafe
characters from an input string so that it may be used as a url.

I did not see a use for the myFooters or myProjects database tables when following the quiz instructions so I ended up not creating them.

**Credentials for my sign-in feature, added to mySiteUsers using SQL:**

INSERT INTO `mySiteUsers`(`id`, `user`, `pass`, `name`, `type`) VALUES   
(0, "ciuicn", "secret", "Nicholas Ciuica", "admin"),    
(1, "teacher", "guess", "Professor Plotka or TA Ola", "user");    

I used sample code from Lab 9 and various online sources to convert my web server's iit directory into a fully modularized, PHP-integrated website.

Using server root to get to includes  
>https://stackoverflow.com/questions/3952590/php-how-to-find-application-root     

Using session superglobal for all pages that care about who's signed in
>https://stackoverflow.com/questions/7129498/write-session-start-on-1-page-or-all-pages    
https://www.w3schools.com/php/php_sessions.asp    

I love ternary operators! glad PHP has them  
>https://www.php.net/manual/en/language.operators.comparison.php   

empty is cool because it checks if a variable isn't set or converts to false
>https://www.php.net/manual/en/function.empty.php   

These sources helped me formulate my SQL queries  
>https://stackoverflow.com/questions/4253960/sql-how-to-properly-check-if-a-record-exists   
https://stackoverflow.com/questions/11784289/    does-it-make-sense-to-use-limit-1-in-a-query-select-1 

Sanitizing links of unsafe or reserved characters
>//https://stackoverflow.com/questions/695438/what-are-the-safe-characters-for-making-urls
