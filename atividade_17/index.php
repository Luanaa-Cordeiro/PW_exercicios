<?php
$quant = 0;
for($i=0; $i < 80; $i++){
    $numero = rand(1,300);

    if($numero >= 10 && $numero <=150){
        $quant++;
        
    }
    
}

echo "Foram gerados". " ". " ". $quant ." "."números" . "entre 10 e 150" . "<br>";

