<?php
echo "Uploading...<br>";

   $fp = fopen("users.csv","r") or die("can not open file");

echo "CSV file is open...";

while ($csv_line = fgetcsv($fp,1024)) {

print $csv_line[0] .">>>". $csv_line[1].">>>". $csv_line[2] . "<BR>";

}

   fclose($fp) or die("can not close file");

echo "CSV file is closed!";

?>
