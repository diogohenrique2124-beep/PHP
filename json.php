<?php 
$dados=['valor 1','valor 2'];
var_dump($dados);
echo "<br>";
$valor=json_encode($dados);
var_dump($valor);
echo"<br>";
$array=json_decode($valor);
var_dump($array);
?>