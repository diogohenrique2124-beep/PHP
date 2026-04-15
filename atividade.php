<?php 
$resultado = "";

if(isset($_POST["enviar"])){
    $frase = $_POST["frase"];


?> 
<!DOCTYPE html> 
<html> 
<head> 
<meta charset="UTF-8"> 
<title>Exercício Strings PHP</title> 
</head> 
<body> 
<h2>Trabalhando com Strings</h2> 
<form method="post"> 
Digite uma frase: <br><br> 
<input type="text" name="frase" size="40" required> 
<br><br> 
<button type="submit" name="enviar">Processar</button> 
</form> 
<br> 
<div> 
<?php echo $resultado; 
    //A frase sem espaços extras  
    //removido espaços extras
    $fraselimpa = trim($frase);
    echo '<br>';
// Quantidade de caracteres  
    echo "Total de letras: ". strlen($frase);
    echo '<br>';
// Frase em maiúsculo  
    echo strtoupper($frase);
     echo '<br>';

// Frase em minúsculo 
    echo strtolower($frase);
    echo '<br>';

// Primeira letra de cada palavra maiúscula 
    echo ucfirst($frase);
}
?> 
</div> 
</body> 
</html>