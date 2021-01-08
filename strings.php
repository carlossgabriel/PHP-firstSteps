<?php

$idade = 20;
//Forma pouco prática , pois com muitas variáveis vai estar precisando concaternar muito
echo 'Olá Mundo! Minha idade é ' . $idade . ' anos';
echo "Olá Mundo!";
$nome = "Carlos";

//Melhor forma, que é pela descrição de strings com aspas duplas

echo "Minha idade é $idade";

// simbologia para quebra de linha \n => vem de new line
//Logo a melhor forma é:

echo "\nOlá Mundo!\n Meu nome é $nome";

//Para uma lista de caracteres especiais consultar o manual do php link => https://www.php.net/manual/pt_BR/language.types.string.php