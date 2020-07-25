<?php

function listaCategorias($conexao){
    $categorias = array();
    $query = "SELECT * FROM categorias";
    $result = mysqli_query($conexao, $query);

    while($categoria = mysqli_fetch_assoc($result)){
        array_push($categorias, $categoria);
    }
    return $categorias;
}