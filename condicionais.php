<?php
$idade = 16;
$acompanhado = 1;

if($idade == 18 or $idade > 18){
    echo "Você pode entrar!!";
}
else if($idade >= 16 && $acompanhado >= 1){
     echo "Você pode entrar!!";
}else{
    echo "Você não pode entrar!!";
}