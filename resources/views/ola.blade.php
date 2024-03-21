<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá</title>
</head>
<body>
    @if($sobrenome == null)
        <h1>Olá {{$nome}} Seja Bem Vindo</h1>

    @else
        <h1>Bem vindo {{$nome}} {{$sobrenome}}</h1>

    @endif
    <a href="/">Voltar para a tela principal</a>
    </body>
</html>
