<?php

$contas1 = [
    'nome' => 'Gabriel',
    'idade' => 20,
    'saldo'=> 1200
];

$contas2 = [
    'nome' => 'Carla',
    'idade' => 24,
    'saldo' => 1500
];
/*O codigo abaixo pode ser substituido pela atribuicao direta do array da seguinte forma:
$contasCorrentes = [
    12345678910 => [
        'nome' => 'Gabriel',
        'idade' => 20,
        'saldo'=> 1200
    ];
    45687912312 => [
        'nome' => 'Carla',
        'idade' => 24,
        'saldo' => 1500
    ];
];
*/

$contasCorrentes = [
    12345678910 => $contas1,
    45687912312 => $contas2
];

$contasCorrentes[] = [
    'nome' => 'Caio',
    'idade' => '16',
    'saldo' => 600
];

foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf . PHP_EOL . $conta['nome'] . PHP_EOL . $conta['idade'] . PHP_EOL . $conta['saldo'] . PHP_EOL . "========" . PHP_EOL;
}

