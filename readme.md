# Matthew Turley's Personal Website

## To Setup
  - In a MySQL run init.sql on the database "webapp" to set up the database used for storing messages
  - In mail.php and viewmail.php set the username and password to the correct username and password for your MySQL database

## To Run
  - The main page is index.php
  - mail.php is only used for submission to the database (accepts a post request, processes the data, and submits it to the database via a Prepared Statement) and thus will display a blank page if opened in the browser.
  - To view any messages sent go to /viewmail.php, or on the database run "Select * from Messages;"

## Other Notes
  - While the form on index.php will inform you if the name or email is left blank, it still attempts to submit to the database. To mitigate this issue I wrote a trigger to block invalid messages from being stored on the database that will be set up upon running init.sql.
  - All data in the database is stored as the user types it, which can lead to attacks namely XSS. To ensure attacks are prevented the viewmail.php escapes all information retrieved from the database.
  - All user data submitted to the database is done via a prepared statement to prevent SQL injection attacks.
