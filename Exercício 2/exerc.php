<?php 

//1) Faça um Programa que mostre a mensagem "Alo mundo" na tela.
echo "Alo mundo <br>"; 

//2) Faça um Programa que peça dois números e imprima a soma.
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$soma = $n1 + $n2;
echo $soma;

//3) Faça um Programa que peça o raio de um círculo, calcule e mostre sua área.
$n1 = $_POST["n1"];
$pi=3.141592;
$area = ($pi*($n1**2));
echo $area;

//4) Faça um Programa que peça a temperatura em graus Farenheit, transforme e mostre a temperatura em graus Celsius. C = (5 * (F-32) / 9).
$n1 = $_POST["n1"];
$C = (5 * ($n1-32) / 9);
echo $C;

//5) Faça um Programa que peça 2 números inteiros e um número real. Calcule e mostre:
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];

//a) o produto do dobro do primeiro com metade do segundo.
$letraA = ((2*($n1))*$n2/2);
echo $letraA;

//b) a soma do triplo do primeiro com o terceiro.
$letraB = (3*($n1)+$n3);
echo $letraB;

//c) o terceiro elevado ao cubo.
$letraC = (($n3)**3);
echo $letraC;

?>

