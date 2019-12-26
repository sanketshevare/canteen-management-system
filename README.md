# Canteen Management System 

Canteen Management System is used to place the food orders and has two parts to it, namely the admin side and user side. Admin can select the items for the day and also perform functionalities like adding user, removing user, adding food items , removing food items, also look at the current orders block wise.

User has the interface to check his/her balance and also order items.





***NOTE : Please read installation and execution steps present at the bottom before downloading. Thank you***

### Hardware Requirement (Minimum)
1. Operating System: Windows XP (32 or 64 bits)
2. HDD: 200 MB free space.
3. Memory: 512 MB RAM.
4. Full administrator Access.

## Installtion and execution procedure

- 1 : Install xampp and update google chrome [download latest chrome from here](https://www.google.com/chrome/).

- 2 : After installing xampp (Default directory : c:/xampp/) , download the project and paste it in directory : (c:/xampp/htdocs/).

- 3 : Set your xampp **username to root** and no password. [Instructions to change username and password](https://hsnyc.co/how-to-set-the-mysql-root-password-in-localhost-using-wamp/)

- 4 : Start wampServer64 from the desktop icon and open google chrome and type the following url without quotes: "http://localhost/phpmyadmin/" and enter root as username and press Go.

- 5 : Now first you have to Load the database in your local server and then you can run the project. 
     
     To load the database :
        
        - Click on +New on the left hand column
        - Give database name as "canteen_delivery_system" (without quotes and small case) 
        - After creating the database successfully, on the upper main menu panel, click on Import and then click "choose file" from file to import menu. Now browse to directory where you saved the project (expected directory: C:\xampp\htdocs\dbms\canteen_delivery_system.sql) and click on fifa.sql and then go down and click Go (Do not change any other settings).
        - After importing successfully, loading the database is complete.
      
     Run the project :
      
          - Open new tab in chrome
          - type the following url : http://localhost/dbms/login.php
          - enjoy.
          



