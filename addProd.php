<?php include 'cabecalho.php' ?>
<?php
    $nome = $_GET['nome'];
    $preco = $_GET['preco'];

?>
        <p class="alert-success">Produto <?= $nome; ?> adicionado e o preco de <?= $preco;?></p>
<?php include 'rodape.php'?>