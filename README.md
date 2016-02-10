# Catalyst-Script-Task
To insert contents of a CSV file into a MySQL database using PHP...

user_upload_v1.php: This script just tries to open the CSV file and outputs a message if successful.

user_upload_v2.php: This script creates "users" table in the "company" database.

user_upload_v3.php: This script opens "users.csv" file and prints all of its contents on the screen.

user_upload_v4.php: This version trims contents of the filds, capitalises first letters of name & surname fields, lowercases email field. It removes the header row(as it has been mentioned in Issue#1), and also validates email addresses.

user_upload_v5.php: This version is a draft for the final version, however, there are some critical issues with this version.
Issues: 
1-Invalid email still is entering into database,
2-Some names and surnames with apostrophe causing SQL syntax errors.

user_upload_v6.php: previous bugs regarding entering invalid email and apostrophe error has been fixed.

create_table.php: This script creates "users" table in the database.

dry_run.php: This script reads contents of a CSV file and outputs them onto the screen (no database entry).
