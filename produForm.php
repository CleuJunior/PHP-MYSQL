<?php include 'cabecalho.php';
include 'conecta.php';
include 'banco-categoria.php'; 
$categorias = listaCategorias($conexao);

?>

    <h1>Formulário de produto</h1>
<form action="addProd.php" method="POST">
    <table class="table"> 
        <tr>
            <td>Nome:</td>
            <td><input type="text" name="nome" class="form-control"></td> 
        </tr>
        <tr>
            <td>Preço:</td>
            <td> <input type="number" name="preco" class="form-control"></td>            
        </tr>
        <tr>
            <td>Descrição:</td>
            <td> <input type="textarea" name="descricao" class="form-control"></td>            
        </tr>
        <tr>
            <td>Categoria:</td>
            <td> 
                <?php foreach ($categorias as $categoria): ?>
                <input type="radio" name="categoria_id" value="<?=$categoria['id'];?>"><?=$categoria['nome'];?><br>
                <?php endforeach; ?>
            </td>             
        </tr>
        <tr>
            <td> <input type="submit" value="Cadastrar" class="btn btn-primary"></td>
           
        </tr>     
    </table>

    
</form>
<?php include 'rodape.php'?>