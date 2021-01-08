<?php

$ageList = [21, 23, 19];

$qualquerIdade = $ageList[0];

for ($i = 0; $i < 3; $i++){
    echo $ageList[$i] . PHP_EOL;
}
//para saber a quantidade de itens da lista utiliza-se a funcao:

echo count($ageList). PHP_EOL;

//logo o codigo pode ser substituido pela seguinte implementacao sem ser necessario saber o tamanho da lista:
for ($i = 0; $i < count($ageList); $i++){
    echo $ageList[$i] . PHP_EOL;
}