<?php include 'cabecalho.php';
    include 'conecta.php'; 
    include 'banco-produto.php'; ?>
<?php

    $nome = $_GET['nome'];
    $preco = $_GET['preco'];


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