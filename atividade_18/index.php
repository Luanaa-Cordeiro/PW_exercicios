<?php
$menor = 0;
$maior = 0;
for($i=0; $i < 75; $i++){
    $numero = rand(1,100);

    if($numero >= 18){
        $maior++;
        
    } else{
        $menor++;
    }
    
}

echo "$maior pessoas são maiores de idade";
echo "<br>";
echo "$menor pessoas são maiores de idade";
