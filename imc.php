<?php

$altura = 1.78; 
$peso = 100;

$IMC = $peso / ($altura * $altura);

echo "Seu IMC é = $IMC" . PHP_EOL;
if($IMC < 18.5){
    echo "Você esta abaixo do peso ideal";
}
else if ($IMC > 24.9 and $IMC < 29.9){
    echo "Você esta acima do peso ideal";
}
else if ($IMC > 30){
    echo "Você esta acima do peso ideal em obesidade";
}
else{
    echo "Você esta no peso ideal";
}