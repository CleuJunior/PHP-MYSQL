<?php include 'cabecalho.php';
    include 'conecta.php'; 
    include 'banco-produto.php'; ?>
<?php

    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];
    $categoria_id = $_POST['categoria_id'];


    if(insereProduto($conexao,$nome, $preco, $descricao, $categoria_id)){
        ?> <p class="text-success">Produto <?= $nome; ?> adicionado e o preco de <?= $preco;?></p>
        <?php

    } else{
        $erroMsg = mysqli_error($conexao);
        ?> <p class="text-danger">Produto <?= $nome; ?> Produto não Adicionado <?= $erroMsg;?></p>
        <?php
       
    }
 
?>

<?php include 'rodape.php'?>