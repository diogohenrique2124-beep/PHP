<?php 
//variavel para armazenar resultado
$resultado="";
$numero=0;
if(isset($_POST["jogar"])){
    //sorteio inicial
    $numero = rand(1,100);
    while($numero < 1 || $numero >100){
        $numero = rand(1,100);
    }
    //garantindo com while(didático)
    if($numero ==7){
    $resultado = "Voce ganhou!!! Número sorteado:".$numero;

    } else {
         $resultado = "Tente novamente!!! Número sorteado:".$numero;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Jogo do Número 7</title>
</head>
<body>

    <h2>🎮 Jogo: Acerte o Número 7</h2>

    <form method="post">
        <button type="submit" name="jogar">Sortear Número</button>
    </form>

    <p><?php echo $resultado; ?></p>

</body>
</html>