<?php

function listaProdutos($conexao){
    $produtos = array();
    $query = "SELECT produto.*, categoria.nome AS categoria_nome FROM produtos AS produto JOIN categorias as categoria ON
    categoria.id = produto.categoria_id";
    $result = mysqli_query($conexao, $query);



    while ($produto = mysqli_fetch_assoc($result)) {
        array_push($produtos, $produto);
    }


    return $produtos;
}

function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id){
    $query = "INSERT INTO `produtos`(`nome`, `preco`, `descricao`, `categoria_id`) VALUES ('{$nome}',
    '{$preco}', '{$descricao}', '{$categoria_id}')";
    return mysqli_query($conexao, $query);
}

function removeProduto($conexao, $id){
    $query = "DELETE FROM `produtos` WHERE id = {$id}";
    return mysqli_query($conexao, $query);
}
