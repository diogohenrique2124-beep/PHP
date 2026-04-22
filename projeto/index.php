<?php 
//Arquivos essenciais (NUNCA podem faltar)
require_once "conexao.php";
require_once "funcoes.php";

// Partes visuais
include "header.php";
include "menu.php";

//simulação d3e usuário
$usuario = "Wilton";
?>

<h1><?php echo $nomeSistema; ?></h1>

<p><?php echo saudacao($usuario);?></p>

<p>Data de acesso: <?php echo $dataHoje; ?></p>

<?php 
include "footer.php";
?>