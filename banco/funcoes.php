<?php

function exibeMensagem($mensagem){
    echo $mensagem . '<br>';
}

function exibeConta (array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo $saldo </li>";
}

function sacar (array $conta, float $valorSaque): array
{
    if ($conta['saldo'] < $valorSaque){
        exibeMensagem("Voce nao pode sacar valor > {$conta['saldo']} da conta do titular {$conta['titular']}" );
    } else {
        $conta['saldo'] -= $valorSaque;
    }
    return $conta;
}

function depositar (array $conta, float $valorDeposito): array
{
    if ($valorDeposito<=0){
        exibeMensagem("Voce nao pode realizar depositos negativos");
    }
    $conta['saldo'] += $valorDeposito;
    exibeMensagem("Foi depositado na conta {$conta['titular']} um valor de $valorDeposito e o saldo atual agora eh de R$ {$conta['saldo']}");
    return $conta;
}

/*Atentar para a questao de referencia de memoria
Quando o parametro informado nao tem o "&", significa que esta sendo passado
a informacao de uma copia do array.
Quando o "&" eh informado, significa que ele esta passando o acesso da memoria desse array
permitindo sua edicao
*/

//Essa passagem de dados por referencia precisa ser estudada pra questao de Orientacao a Objeto pela funcionalidade de acessar diretamente a memoria

function titularLetrasMaiusculas (array &$conta){
    $conta['titular'] = strtoupper($conta['titular']);
}