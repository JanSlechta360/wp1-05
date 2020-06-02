<?php
$homelesmoney= 90;
$vodkacost= 100;
$cigareten= 110;
$vodkaandcigareten= $vodkacost + $cigareten;

if ($homelesmoney >= $vodkaandcigareten) {
    $answer="zakoupil oboje"; 
    $zbytek= $homelesmoney - $vodkaandcigareten;
} elseif ($homelesmoney >= $vodkacost) {
    $answer="zakoupil jen vodku";
    $zbytek= $homelesmoney - $vodkacost;
} else { $answer="ur broke";
    $zbytek= $homelesmoney;
} 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trafika</title>
</head>
    <body>
          homeles kapsy <?= $homelesmoney ?> </br>
          
          cena vodky <?= $vodkacost ?> </br>
          cena cigaret <?= $cigareten ?> </br>
          cena vodka a cigarety <?= $vodkaandcigareten ?> </br>

          <?= $answer ?> </br>  
          drobaky <?= $zbytek ?> </br>
        
    </body>
</html>