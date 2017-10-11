# php-login

Simple PHP account registration and login.
The only requirement is an SQL database to save user accounts etc...
____

## Files

1. Root Folder
    * index.php - Home page
    * contact.php - Contact form
    * forgot-password.php - Password retrieval with username
    * login.php - Logic for logging in and session management
    * register.php - Logic for registration, saves user account in SQL database
2. Includes
    * auth.php - Login authorization
    * check.php - Username check for registration
    * db-connect.php - SQL connection to database
    * logout.php - Logout function. Destroys stored session
    * php-mailer-autoload.php - Mail function
