<?php

// Trabalhando com datas no PHP
echo date("d/m/Y");
$data = date("d/m/Y");
echo '<br>';
echo ("Data de hoje = ".$data);
/*
| Código | Significado     | Exemplo |
| ------ | --------------- | ------- |
| d      | dia             | 15      |
| m      | mês             | 04      |
| Y      | ano (4 dígitos) | 2026    |
| H      | hora (24h)      | 15      |
| i      | minutos         | 30      |
| s      | segundos        | 45      |*/

echo '<br>';
date_default_timezone_set("America/Sao_Paulo");
echo date("d/m/Y H:i:s");

//---------------------------------------------------------

//forma moderna de trabalhar com date
$data = new DateTime();
echo ("data atual = ".$data);

echo $data->format("d/m/Y");        

//---------------------------------------------------------

// Ver diferença de dias
$data1 = new DateTime("2026-04-01");

$data2 = new DateTime("2026-04-15");

$diferenca = $data1->diff($data2);

echo $diferenca->days." dias ";

$dataNascimento = new DateTime("2008-11-24");

$hoje = new DateTime();

$idade = $hoje->diff($dataNascimento);

echo " Idade: ".$idade->y ." anos ";

//---------------------------------------------------------

//string

//strlen() ---> tamanho da string


$nome = "  diogo";
echo strlen($nome);
echo '<br>';

echo strtoupper($nome);

echo '<br>';
echo strtolower($nome);

echo '<br>';
echo ucfirst($nome);

echo '<br>';
echo ucwords($nome);

echo '<br>';
echo trim($nome);

//strpos() ---> procurar texto
echo strpos("Programando com PHP", "PHP");

$texto = "PHP,HTML,CSS";
echo '<br>';
$array = explode(",",$texto);
echo '<br>';

print_r($array);

//ATIVIDADE
//explode() ---> transformar em array
$texto = "PHP, é, uma, linguagem, de, programação, usada, principalmente, para, desenvolver, sites, e, 
 sistemas, web, O, nome, PHP, significa, Hypertext, Preprocessor, Ela, é, uma, linguagem, do, lado, do, servidor, ou, seja, o, código, é, executado, 
no, servidor, onde, o, site, está, hospedado, e, não, diretamente, no, navegador, do, usuário";
 echo '<br>';
 $array = explode(",",$texto);
echo '<br>';

print_r($array);

//implode() ---> juntar array em string
$array = ["PHP,HTML,CSS"];
echo implode ("-", $array);

$nome = "  diogo souza  ";
echo "Original:$nome <br>";

$nome = trim($nome);
echo "Sem espaços: $nome <br>";

$nome = ucwords($nome);
echo "Formatando: $nome <br>";

echo "Total de letras: ". strlen($nome);

?>

</body>
</html>