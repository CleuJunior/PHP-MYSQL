<?php include 'cabecalho.php' ?>
        <h1>Formulario de produto</h1>
<form action="addProd.php" method="get">
    Nome: <input type="text" name="nome"><br>
    Preço: <input type="number" name="preco"><br><br>
    <input type="submit" value="Enviar">
    
</form>
<?php include 'rodape.php'?>