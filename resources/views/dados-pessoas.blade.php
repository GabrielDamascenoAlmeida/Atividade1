<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Usuário</title>
    <!-- <link href="/Projeto/app/Http/Controllers/EventController.php"> -->
</head>
<body>
    <h1>Digite: </h1>
    <ul>
        <li>"m" ou "f" para gênero</li>
    </ul>
    <h1>Dados de pessoas</h1>
    <a href="/">Voltar para a tela principal</a>
    <h2>Dados do usuário:</h2>
        <ul>
            <li>Nome: {{$nome}}</li>
            <li>Sobrenome: {{$sobrenome}}</li>
            <li>Idade: {{$idade}}</li>
            <li>Rm: {{$rm}}</li>
            <li>Gênero: {{$genero}}</li>
            <li>Endereço: {{$endereco}}</li>
        </ul>
</body>
</html>
