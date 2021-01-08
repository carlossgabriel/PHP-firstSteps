<?php
//Arrays associativos
//Sao arrays de arrays

$contas1 = [
    'nome' => 'Gabriel',
    'idade' => 20,
    'saldo'=> 1200
];
echo "Nome do titular da conta #1 = " . $contas1['nome'] . PHP_EOL;

$contas2 = [
    'nome' => 'Carla',
    'idade' => 24,
    'saldo' => 1500
];

$contasCorrentes = [$contas1, $contas2];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['nome'] . PHP_EOL . "Saldo na conta R$ " . $contasCorrentes[$i]['saldo'] . PHP_EOL ;

}