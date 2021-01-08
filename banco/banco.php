<?php
//Subrotina executa a instrucao passada para ela dentro da funcao e nao retorna nada
//A funcao executa e retorna um valor;
//Para um arquivo que nao tem obrigatoriedade para o funcionamento do codigo, usar o recurso include
//include 'funcoes.php';
//Para arquivos que sao necessarios ao funcionamento do codigo, usar o require:

require_once 'funcoes.php';

$contaCorrente = [
    '12378945610' => [
        'titular' => 'Gabriel',
        'idade' => 20,
        'saldo' => 1650
    ],
    '98765432110' => [
        'titular' => 'Carla',
        'idade' => 24,
        'saldo' => 2350
    ],
    '15975398710' => [
        'titular' => 'Caio',
        'idade' => 16,
        'saldo' => 3750
    ]
];

$contaCorrente['12378945610'] = depositar($contaCorrente['12378945610'], 2500);
$contaCorrente['15975398710'] = sacar($contaCorrente['15975398710'], 5000);

titularLetrasMaiusculas($contaCorrente['12378945610']);

//Para remover um dado salvo em memora ou item atribuido numa lista utilizar funcao :
unset($contaCorrente['98765432110']);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>
    <?php foreach($contaCorrente as $cpf => $conta) { ?>
    <dt>
        <h3><?= $conta['titular']; ?> - <?php echo $cpf; ?></h3>
     </dt>
    <dd>
         Saldo: <?= $conta['saldo'];?>
    </dd>
    <?php } ?>

</body>
</html>
