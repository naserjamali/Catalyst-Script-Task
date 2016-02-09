<?php

echo "Uploading...<br>";

   $fp = fopen("users.csv","r") or die("can not open file");

echo "File is open...";

   fclose($fp) or die("can not close file");
   
?>
