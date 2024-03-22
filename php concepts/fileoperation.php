<?php
   $openfile=fopen("dummy.txt",'r') or die("Unable to open file");
   while(!feof($openfile)){
        echo fgets($openfile);      
        echo "<br>";  
   }
   echo "<h1>file ended</h1>";
   fclose($openfile);
   $openfile=fopen("newfile.txt","a") or die("Unable to open file");
   $txt = " Welcome Sherwinsca \n";
   $writefile=fwrite($openfile,$txt);
   fclose($openfile);