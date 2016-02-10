<?php

echo "Uploading...<br>";

   $fp = fopen("/.../users.csv","r") or die("can not open file");

echo "CSV file is open...<br><br>";


while ($csv_line = fgetcsv($fp,1024)) {

// uppercases the first letters of name & surname
   $name = ucfirst(strtolower(trim("$csv_line[0]")));
   $surname = ucfirst(strtolower(trim("$csv_line[1]")));
   $email = strtolower(trim("$csv_line[2]"));

if($name.$surname.$email == "NameSurnameemail"){
continue;
} 

print $name.">>>".$surname.">>>".$email;


// Validating email
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
     echo(">>>$email is a valid email address <br><br>");
} else {
     echo(">>>$email is not a valid email address <br><br>");
     continue;
}

// adds escape character before an apostrophe
   $name = addcslashes($name,"'");
   $surname = addcslashes($surname,"'");
   $email = addcslashes($email,"'");


}


   fclose($fp) or die("can not close file");

echo "CSV file is closed!";

?>
