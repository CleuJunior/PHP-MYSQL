<?php include 'cabecalho.php' ?>
<?php
    function insereProduto($conexao, $nome, $preco){
        $query = "INSERT INTO `produtos`(`nome`, `preco`) VALUES ('{$nome}', '{$preco}')";
        return mysqli_query($conexao, $query);
    }

    $nome = $_GET['nome'];
    $preco = $_GET['preco'];

    $conexao = mysqli_connect('127.0.0.1', 'root', '123', 'loja');

    if(insereProduto($conexao,$nome, $preco)){
        ?> <p class="text-success">Produto <?= $nome; ?> adicionado e o preco de <?= $preco;?></p>
        <?php

    } else{
        $erroMsg = mysqli_error($conexao);
        ?> <p class="text-danger">Produto <?= $nome; ?> Produto não Adicionado <?= $erroMsg;?></p>
        <?php
       
    }
 
?>

<?php include 'rodape.php'?>