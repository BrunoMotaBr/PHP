<?php
$alunos = [
    "Bruno",
    "Eliza",
    "Joao",
    "Paulo",
    "Pedro",
    "Eliana",
    "Antonio"
];

for($i = 0; $i < count($alunos); $i += 1){
    echo "O $alunos[$i] é o número $i". PHP_EOL;
}