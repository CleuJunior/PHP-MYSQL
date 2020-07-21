<?php include 'cabecalho.php' ?>
        <h1>Formulário de produto</h1>
<form action="addProd.php" method="get">
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
            <td> <input type="submit" value="Cadastrar" class="btn btn-primary"></td>
           
        </tr>     
    </table>

    
</form>
<?php include 'rodape.php'?>