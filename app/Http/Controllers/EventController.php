<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function BemVindo(string $nome, string $sobrenome=null){

        return view('ola')->with('nome', $nome)->with('sobrenome', $sobrenome);

    }

    public function Operadores($number1, $number2, $operador){

        return view('operadores')->with('number1', $number1)->with('number2', $number2)->with('operador', $operador);

    }

    public function Dados($nome, $sobrenome, $idade, $rm, $genero, $endereco){

        return view('dados-pessoas', ['nome'=>$nome, 'sobrenome'=>$sobrenome, 'idade'=>$idade, 'rm'=>$rm, 'genero'=>$genero, 'endereco'=>$endereco]);

    }
    public function Produtos($descricao, $categoria, $preco){
        return view('produtos',
        [
            'descricao' => $descricao,
            'categoria' => $categoria,
            'preco' => $preco
        ]);

    }
}
