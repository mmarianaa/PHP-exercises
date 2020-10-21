<?php

//1) Faça um programa, com uma função que necessite de três argumentos, e que forneça a soma desses três argumentos

function mensagem($nome, $idade, $cidade){
	echo "Sou $nome tenho $idade anos e moro em $cidade";
}
mensagem("Marcia", 46, "Lisboa");

//2) Faça um programa, com uma função que necessite de um argumento. A função retorna o valor de caractere ‘P’, se seu argumento for positivo, e ‘N’, se seu argumento for zero ou negativo

$n = $_POST["n"];
if ($n>0) {
	echo "P";
} else {
	echo "N";
}

//3) Faça um programa com uma função chamada somaImposto. A função possui dois parâmetros formais: taxaImposto, que é a quantia de imposto sobre vendas expressa em porcentagem e custo, que é o custo de um item antes do imposto. A função “altera” o valor de custo para incluir o imposto sobre vendas.

$taxaImposto = $_POST["taxaImposto"];
$custo = $_POST["custo"];
$somaImposto = $custo + ($custo * $taxaImposto / 100);
echo $somaImposto;

?>
