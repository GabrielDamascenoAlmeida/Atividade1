<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>

</head>
<body>
    <h1>Aqui está a lista de produtos cadastrados</h1><br>
    <table>
    <tr>
        <th>Descrição</th>
        <th>Categoria</th>
        <th>Preço</th>
    </tr>
    <tr>
        <td>{{$descricao}}</td>
        <td>{{$categoria}}</td>
        <td>{{$preco}}</td>
    </tr>
    </table>
</body>
</html>
