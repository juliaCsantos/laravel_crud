<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h1>Produtos</h1>

    <label for="lblNome">Nome:</label>
    <input type="text" name="nome" value="{{ $produto->nome }}">
    <br><br>
    <label for="lblvalor">Valor:</label> 
    <input type="text" name="valor" value="{{ $produto->valor }}">
    <br><br>
    <label for="lblQuantidade">Quantidade:</label>
    <input type="text" name="estoque" value="{{ $produto->estoque }}">
    <br><br>   
    <label for="lblFornecedor">Fornecedor:</label>
    <input type="text" name="fornecedor_id" value="{{ $produto->fornecedor_id }}">
    <br><br>    
</body>
</html>