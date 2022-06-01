<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

    <title>Laravel</title>
</head>
<body>
    <ul>
            @foreach($produtos as $produto)
            <li>
                {{$produto->id}} |
                {{$produto->nome}} |
                {{$produto->valor}} |
                {{$produto->estoque}} |
                {{$produto->fornecedor_id}} |
                
                <a href="/excluir-produto/{{$produto->id}}">Excluir</a>
                <a href="/editar-produto/{{$produto->id}}">Editar</a>
            </li>
            @endforeach
    </ul>
    <a href="/cadastrar">Cadastrar</a>
    <ul>
        @foreach($fornecedors as $fornecedor)
        <li>
            {{$fornecedor->id}} |
            {{$fornecedor->nome}} |
            {{$fornecedor->telefone}} |
        </li>
        @endforeach
    </ul>
</body>

<style>
    *{
        margin:0;
        padding:0;
        box-sizing: border-box;
    }
    html, body{
        min-height: 100vh;
    }
    body{
        background-color: #B0E0E6;
        display:flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    a{
        background-color: #FFE4E1;
        padding: 4px;;
        font-weight: 500;
        text-decoration: none;
    }
    li{
        font-size: medium;
        font-weight: 500;
    }
</style>
</html>