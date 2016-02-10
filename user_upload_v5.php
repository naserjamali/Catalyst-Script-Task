<?php
echo "Uploading...<br>";

   $fp = fopen("users.csv","r") or die("can not open file");

echo "CSV file is open...<br>";

//Difining constants
$servername = "localhost";
$username = "root";
$password = "***password***";
$dbname = "company";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE users ( 
name VARCHAR(30) NOT NULL,
surname VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL UNIQUE
)";

if ($conn->query($sql) === TRUE) {
    echo "Table users created successfully!";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();


   $conn = mysql_connect($servername, $username, $password);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

while ($csv_line = fgetcsv($fp,1024)) {

   $name = ucfirst(strtolower(trim("$csv_line[0]")));
   $surname = ucfirst(strtolower(trim("$csv_line[1]")));
   $email = strtolower(trim("$csv_line[2]"));

if($name.$surname.$email == "NameSurnameemail"){
continue;
} 

print $name.">>>".$surname.">>>".$email;


// Validating email
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
     echo(">>>$email is a valid email address <br>");
} else {
     echo(">>>$email is not a valid email address <br>");
}


   $sql = "INSERT INTO users (name,surname,email) VALUES ('$name','$surname','$email')";
      
   mysql_select_db($dbname);
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      echo "Could not enter data: " . mysql_error()."<br>";
   }
   
   echo "Entered data successfully\n";
   
}

   mysql_close($conn);


   fclose($fp) or die("can not close file");

echo "CSV file is closed!";

?>
