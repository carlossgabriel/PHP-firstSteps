<?php

$idade = 17;
$nome = 'Gabriel';
$numeroDePessoas = 2;

echo "Você só pode entrar a partir de 18 anos. OU tiver mais de 16 e estiver acompanhado" . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. \n \nPode entrar sozinho.\n";
}else if ($idade >= 16 && $numeroDePessoas > 1){
        echo "\nPodem entrar na casa";
    }else {
    echo "\nEntrada bloqueada";
}

//A ausencia de chaves é permitida quando a ação de instrução tem somente uma linha

$mensagem = $idade < 18 ? "Você é menor de idade" : "Você é maior de idade";
