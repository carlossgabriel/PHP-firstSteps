<?php

$idadeList = [21,22,23,22,10,45];

/*
Essa seria a forma extensa de se criar o codigo para atribuir os Personagens a cada idade armazenada na lista
$idadeGabriel = $idadeList[0];
$idadeMaria = $idadeList[1];
$idadeJoao = $idadeList[2];
*/

list($idadeGabriel, $idadeMaria, $idadeJoao) = $idadeList;

$idadeList[]= 20;

foreach ($idadeList as $idade){
    echo $idade . PHP_EOL;
}