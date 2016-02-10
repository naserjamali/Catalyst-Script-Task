<?php
echo "Uploading...<br>";

   $fp = fopen("users.csv","r") or die("can not open file");

echo "CSV file is open...";


while ($csv_line = fgetcsv($fp,1024)) {

   $str1 = trim("$csv_line[0]");
   $str2 = trim("$csv_line[1]");
   $str3 = trim("$csv_line[2]");

if($str1.$str2.$str3 == "namesurnameemail"){
continue;
} 

print $str1.">>>".$str2.">>>".$str3. "<BR>";

}

   fclose($fp) or die("can not close file");

echo "CSV file is closed!";

?>
