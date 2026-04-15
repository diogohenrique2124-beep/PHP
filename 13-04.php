<?php 
//constantes

define('NOME',"Wilton");//modo de execução
echo(NOME);
echo('<br>');
const VALOR = 10;
echo VALOR;

//CAST

$valor = 10.5;
var_dump($valor);
echo('<br>');


$valor = 100;
var_dump($valor);
echo('<br>');
$texto =(string) $valor;
var_dump($texto);
echo('<br>');

$valor = 0;
$bool = (bool) $valor;
var_dump($bool);
echo('<br>');

//array

$nomes = ["ti101", true, 100];
print_r($nomes);
$nomes = ["nome"=>"Wilton",
          "ID"=>"101",
          "CPF"=>"123456"];

echo '<pre>';
print_r ($nomes);
echo '</pre>';

$nomes =[];
//=> "aponta para" associar uma chave com um valor


//FUÇÃO

function olaMundo(){
    echo"Olá Mundo";
}

function olaTi101(){
    echo"Olá TI101";
}

function olaWell(){
    echo"Olá Well";
}

olaMundo();
echo "<br>";
olaTi101();
echo "<br>";
olaWell();

//FUÇÃO PASSAGEM DE PARAMETRO

function saudacao($nome){
    echo("Olá ".$nome);
}

saudacao("Diogo");

function somar($a,$b){
    return $a+$b;
}

$resultado = somar(5,5);
echo ("Resultado da soma = ".$resultado);
echo "<br>";

function subtrair($a,$b){
    return $a-$b;
}

$resultado = subtrair(5,5);
echo ("Resultado da subtração = ".$resultado);
echo "<br>";
function dividir($a,$b){
    return $a/$b;
}

$resultado = dividir(5,5);
echo ("Resultado da divisão = ".$resultado);
echo "<br>";
function multiplicar($a,$b){
    return $a*$b;
}

$resultado = multiplicar(5,5);
echo ("Resultado da multiplicação = ".$resultado);


function calcularMedia($n1,$n2,$n3){
    return ($n1 + $n2 +$n3) /3 ;
} 
$media = calcularMedia(5,7,8);

echo ("Resultado da Média = ".$media);
echo "<br>";

//FUNÇÃO PARA CONVERTER PARA MAIÚSCULO
function maiusculo($texto){
    return strtolower($texto);
}

echo maiusculo ("Programando com Php");
?>