<?php

//1. Faça um Programa que peça dois números e imprima o maior deles.
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
if ($n1>$n2) {
	echo $n1;
} else {
	echo $n2;
}

//2. Faça um Programa que peça um valor e mostre na tela se o valor é positivo ou negativo.
$n1 = $_POST["n1"];
if ($n1>0) {
	echo "Positivo";
} else {
	echo "Negativo";
}

//3. Faça um Programa que verifique se uma letra digitada é "F" ou "M". Conforme a letra escrever: F - Feminino, M - Masculino, Sexo Inválido.
$n1 = $_POST["n1"];
if ($n1 == "F") {
	echo "Feminino";
} else {
	if ($n1 == "M") {
		echo "Masculino";
	} else {
		echo "Inválido";
	}
}

//4. Faça um programa para a leitura de duas notas parciais de um aluno. O programa deve calcular a média alcançada por aluno e apresentar:

$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$media = ($n1 + $n2)/2;
echo $media;

   //i. A mensagem "Aprovado", se a média alcançada for maior ou igual a sete;   
   //ii. A mensagem "Reprovado", se a média for menor do que sete;
   //iii. A mensagem "Aprovado com Distinção", se a média for igual a dez.

if ($media>=7 && $media<10) {
	echo "Aprovado";
   } else { 
   	if ($media == 10) {
   		echo "Aprovado com Distinção";
   	} else {
   		echo "Reprovado";
   	}
   }
   
?>