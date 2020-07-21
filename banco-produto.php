<?php

function listaProdutos($conexao){
    $produtos = array();
    $query = "SELECT * FROM produtos";
    $result = mysqli_query($conexao, $query);



    while ($produto = mysqli_fetch_assoc($result)) {
        array_push($produtos, $produto);
    }


    return $produtos;
}

function insereProduto($conexao, $nome, $preco){
    $query = "INSERT INTO `produtos`(`nome`, `preco`) VALUES ('{$nome}', '{$preco}')";
    return mysqli_query($conexao, $query);
}
