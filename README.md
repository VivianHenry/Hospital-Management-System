<h1>Hospital Management System</h1>

<h2>Introduction</h2>

The aim of this project is to design and implement a database for a hospital management system, complete with a fully functional GUI that allows users access to and control over the database, in accordance to their roles and permissions. This complete system eases the management of a hospital. While the project has been scaled down for the sake of timely completion, the underlying principles and functionalities are easily scalable. There are 4 types of users in this system, each with their own login credentials. These users are:
<ul>
  <li>Admin
  <li>Doctor
  <li>Patient
  <li>Cashier
</ul>

Administrators have the ultimate control over the database. Each admin will have their own login credentials. Each patient will have a unique patient ID. The complete biodata of a patient will be saved that includes details such as patient ID, name, age, gender, weight, address, phone number, and account password. Doctors will handle patients. Each doctor will have a unique doctor ID. Details that include doctor ID, name, account password, gender, joining date, and phone number will be saved. Each doctor will belong to one department and will be capable of treating more than one patient. Cashiers complete the list of members in this hospital ecosystem. Their details, that include cashier ID, name, account password, gender, and contact number will be saved in the database.

The project was executed using a combination of PHP, HTML, CSS, MySQL, and Bootstrap. PHP is a server-side, general-purpose scripting language that was embedded into the base HTML in order to add dynamic functionality to the GUI and allow calculated modifications to occur in real-time, depending on user interaction and state of the system. PHPMyAdmin, which is a free software tool, was used in order to administer the database over the web. The Bootstrap CDN was used in order to build upon the Bootstrap framework, thereby introducing responsive design from the elemental level, as well as permitting the use of various Bootstrap components. This permitted quick and efficient frontend development. 

<h2>Glimpse of the System</h2>

The Entity-Relationship diagram created to model the database is given below.

<img width="800" alt="image" src="https://user-images.githubusercontent.com/67223688/183331503-01780f01-67fb-4f70-a040-3093b61ba101.png">

Sample images of the GUI is given below.

<img width="800" alt="image" src="https://user-images.githubusercontent.com/67223688/183330916-20edc03f-e93c-4739-b746-6cbcad4aa7a4.png">

<img width="800" alt="image" src="https://user-images.githubusercontent.com/67223688/183331007-c0fb6535-b904-4fc9-8664-8fd59e7f9743.png">

<img width="800" alt="image" src="https://user-images.githubusercontent.com/67223688/183331091-bdcee2f5-0cbe-4007-b8c7-f41adc67140e.png">

<img width="800" alt="image" src="https://user-images.githubusercontent.com/67223688/183331115-2272971f-854f-4ef2-8a04-cb349b8fce03.png">

<img width="800" alt="image" src="https://user-images.githubusercontent.com/67223688/183331127-1bd14b39-e69c-4cb9-ab02-32c95a67ab8a.png">

<h2>Note</h2>

The following steps need to be undertaken in order to recreate the Hospital Management System project

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
