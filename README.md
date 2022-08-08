<h1>Hospital Management System</h1>

The aim of this project is to design and implement a database for a hospital management system, complete with a fully functional GUI that allows users access to and control over the database, in accordance to their roles and permissions. This complete system eases the management of a hospital. While the project has been scaled down for the sake of timely completion, the underlying principles and functionalities are easily scalable. There are 4 types of users in this system, each with their own login credentials. These users are:
<ul>
  <li>Doctor
</ul>

The project was executed using a combination of PHP, HTML, CSS, MySQL, and Bootstrap. PHP is a server-side, general-purpose scripting language that was embedded into the base HTML in order to add dynamic functionality to the GUI and allow calculated modifications to occur in real-time, depending on user interaction and state of the system. PHPMyAdmin, which is a free software tool, was used in order to administer the database over the web. The Bootstrap CDN was used in order to build upon the Bootstrap framework, thereby introducing responsive design from the elemental level, as well as permitting the use of various Bootstrap components. This permitted quick and efficient frontend development. 



The Entity-Relationship diagram created to model the database is given below.

![ER Diagram](https://user-images.githubusercontent.com/67223688/183329189-0a9b73c0-7827-4e3f-9778-727e01c3b248.png)

<h2>The following steps need to be undertaken in order to recreate the Hospital Management System project</h2>

Step 1: Installing and Configuring XAMP/WAMP
In order for the project to work, XAMP (MacOS) or WAMP (Windows) needs to be installed. Once done, the hms folder must be added to the directory. In order to do this, 

Step 2: Initializing the Required Servers
From the XAMP/WAMP manager, initialize the MySQL Database and Apache Web servers.

Step 3: Setting up the Database
From the web browser, go to localhost/phpmyadmin/ in order to access the database manager. Here, import the hms_db.sql file attached in this folder. This will recreate the database. 

Step 4: Using the HMS
Once the 3 steps above are successfully completed, the system is ready for use. In order to begin, go to localhost/hms/ in order to begin a session at the login page.

Step 5: Ending Session
Once done, stop the servers from running by controlling their active states in the XAMP/WAMP manager.
