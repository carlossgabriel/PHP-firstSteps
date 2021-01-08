<?php

$peso = 74;
$altura = 1.76;
$imc = $peso/($altura^2);

echo "Considerando que seu peso e igual a: $peso".PHP_EOL;
echo "Considerando que sua altura e igual a: $altura".PHP_EOL;

switch ($imc) {
    case ($imc < 18.5):
        echo "# ABAIXO DO PESO NORMAL" . PHP_EOL;
        break;
    case ($imc >  18.5 && $imc < 24.9):
        echo "# PESO NORMAL" . PHP_EOL;
        break;
    case ($imc > 24.9 && $imc < 29.9):
        echo "# EXCESSO DE PESO" . PHP_EOL;
        break;
    case ($imc > 29.9 && $imc < 34.9):
        echo "# OBESIDADE CLASSE 1" . PHP_EOL;
        break;
    case ($imc > 34.9 && $imc < 39.9):
        echo "# OBESIDADE CLASSE 2" . PHP_EOL;
        break;
    case ($imc > 39.9):
        echo "# OBESIDADE CLASSE 3" . PHP_EOL;
        break;
    default:
        throw new \Exception('Unexpected value');
}

