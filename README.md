# login-form
Simple PHP Login Form

### Demo: https://areebghani.github.io/login-form/

## How To Use

1. Download XAMPP from https://www.apachefriends.org/download.html

2. Install it in C:/ drive.

3. Download the files.

4. Create a new folder in C:\xampp\htdocs\ and copy thes files in that folder.

5. Run the XAMPP and start the APACHE and MYSQL.

6. Click on the MYSQL admin button, this will open the phpmyadmin in your Browser.

7. From left side click on New and write the databse name "formdb" and click Create.

8. Give the table name "registered_users" and select 4 columns and click Go.

9. Enter => [ "id", "int(255)", "primary", "auto increment (A.I)" ]

10. Enter => [ "Names", "varchar(255)" ]

11. Enter => [ "Emails", "varchar(255)" ]

12. Enter => [ "Password", "varchar(255)" ]

13. Now click Go and your table is created.

14. You have to signup first before login. So, GoTo C:\xampp\mysql\bin using cmd and enter "mysql -u root -p -h localhost" and press enter when ask password.

15. Enter "show databases;"

16. Select DataBase by entering "use formdb;"

17. To view your table, enter "select * from registered_users;"

18. Now Enter the command: INSERT INTO registered_users (id, Names, Emails, Password) VALUES (1, 'Your Name', 'Your Email', 'Your Password')

19. Now Copy file path of login.html and run it on your Browser.

16. Replace the "file:///C:/xampp/htdocs" with "localhost".

##  

## And You Are Done 😊
