<?php

//1) Faça um Programa que leia um vetor de 5 números inteiros e mostre-os.

$lista = array(5,10,15,20,25);
var_dump($lista);
echo "<br>";

foreach ($lista as $value) {
	echo $value."<br>";
}

//2) Faça um Programa que leia um vetor de 10 números reais e mostre-os na ordem inversa.

$lista  = array(1,2,3,4,5,6,7,8,9,10);
var_dump($lista);
echo "<br>";

foreach (array_reverse($lista) as $value) {
	echo $value."<br>";
}

//3) Faça um Programa que leia 4 notas, mostre as notas e a média na tela.

$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];
$n4 = $_POST["n4"];

$lista = array("$n1","$n2","$n3","$n4");
foreach ($lista as $value) {
	echo $value."<br>";
}	
$media = ($n1 + $n2 + $n3 + $n4 / 4);
echo $media;

//4) Faça um Programa que leia um vetor de 5 números inteiros, mostre a soma, a multiplicação e os números.

$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];
$n4 = $_POST["n4"];
$n5 = $_POST["n5"];

$lista = array("$n1","$n2","$n3","$n4","$n5");
foreach ($lista as $value) {
	echo $value."<br>";
}	
$soma = ($n1 + $n2 + $n3 + $n4);
echo $soma."<br>";
$multiplicação = ($n1 * $n2 * $n3 * $n4);
echo $multiplicação;

?>