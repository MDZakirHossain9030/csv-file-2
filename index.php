





<?php


// I want to show list of student
echo "<pre>";
$file = fopen(filename:"zakir.csv", mode:"r") or die("nai");

while(($line = fgets($file)) !==false){
   var_dump($line) ;
}

fclose($file);

echo "=====================<br><br>";



// I want to show list of student like arry
$file = fopen(filename:"zakir.csv", mode:"r") or die("nai");

while(($line = fgetcsv($file)) !==false){
    var_dump($line);
}

fclose($file);

echo "=====================<br><br>";






// I want to show each word 
$file = fopen(filename:"zakir.csv", mode:"r") or die("nai");

while(($line = fgetc($file)) !==false){
   var_dump($line) ;
}


fclose($file);








?>
