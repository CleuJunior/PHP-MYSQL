<?php include 'cabecalho.php'; 
    include 'conecta.php'; 
    include 'banco-produto.php';

$id = $_POST['id'];

removeProduto($conexao, $id);
header("Location: produto_lista.php?removido=true");
die();
?>




