@extends('layouts.main')
@section('title', 'Welcome')
@section('content')

<div class="container">
    <div class="first">
        <h1>Escolha o tipo de documento desejado:</h1>
        <div class="buttons">
            <div class="rows">
                <div class="btn1">
                    <a href="/planoaula"><button class="btn">PLANO DE AULA</button></a>
                </div>
                <div class="btn2">
                    <a href="/parecer"><button class="btn">PARECER DESCRITIVO</button></a>
                </div>
            </div>
            <div class="rows">
                <div class="btn3">
                    <a href="/avaliativa"><button class="btn">FICHA AVALIATIVA</button></a>
                </div>
                <div class="btn4">
                    <a href="/portfolio"><button class="btn">PORTFÓLIO</button></a>
                </div>
            </div>
            <div class="btn5">
                <a href="/registro"><button class="btn">CADERNO REGISTRO</button></a>
            </div>
        </div>
    </div>
    <div class="second">
        <h1>EDITE E BAIXE SEUS DOCUMENTOS QUANDO TERMINAR</h1>
    </div>
</div>

<!-- Comment -->
{{-- yeaaaahhh --}}

@endsection
