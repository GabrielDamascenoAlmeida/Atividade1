<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Digite:</h1>
    <ul>
        <li>"soma" para soma</li>
        <li>"subtracao" para subtração</li>
        <li>"multiplicacao" para multiplicação</li>
        <li>"divisao" para divisão</li>
    </ul>
    <h1>O resultado de sua operação é: </h1>
        @php
            $soma = $number1 + $number2;
            $subtracao = $number1 - $number2;
            $multiplicacao = $number1 * $number2;
            $divisao = $number1 / $number2;
        @endphp

        @if($operador == "soma")
            <p>A soma dos números é {{$soma}}</p>
        @endif

        @if($operador == "subtracao")
            <p>A subtrção dos números é {{$subtracao}}
        @endif

        @if($operador == "multiplicacao")
            <p>A multiplicação dos números é {{$multiplicacao}}</p>
        @endif

        @if($operador == "divisao")
            <p>A divisão dos números é {{$divisao}}</p>

        @endif
        <a href="/">Voltar para a tela principal</a>
</body>
</html>
