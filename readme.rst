Visitors Management System (VMS)
--------------------------------
VMS is the web_based system for management of visitors.
scope: IPRC Tumba 

How to run the Visitors Management System (VMS) Project

1. Download the  zip file

2. Extract the file and copy folder

3.Paste inside root directory(for xampp xampp/htdocs, for wamp wamp/www)

4. Open PHPMyAdmin (http://localhost/phpmyadmin)

5. Create a database with name cvmsdb

6. Import cvmsdb.sql file(given inside the zip package in database file folder)

7.Run the script http://localhost/Php_cat2_vms-main (frontend)

Credential for admin panel :
---------------------------
Username: admin 

Password: 123
        
TOOLS USED
==========
Framework: Codeigniter (version 3)

Front-end: HTML/CSS, Bootstrap

back-end:Mysql,php,javascript

Use case:
========
-register visitors

-manage admin profile

-manage visitors

-report

Users:
------
Admin : is only users allowed to login

Visitors: not allowed to login, provide information to
          admin.

Features Hierarchy
---------------------
Admin Control Structure
View reports(current, last day, last 7 day, all days,search between date)
Add visitors
Check exits visitors
View admin profile
View visitors information
Edit admin profile
Login/Logout

#Authors:-Audace SANGANO          (18RP06232)
         -Emmanuel UWIRINGIYIMANA (18RP01426)
