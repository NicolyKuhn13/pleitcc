@extends('layouts.main')
@section('title', 'Welcome')
@section('content')

<script src="https://kit.fontawesome.com/52d98fe718.js" crossorigin="anonymous"></script>
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
        <h1>EDITE E BAIXE <br> SEUS DOCUMENTOS <br> QUANDO TERMINAR</h1>
        <button class="btnn">FAÇA SEU CADASTRO</button>
        <br>
        <button class="btnn2">E TENHA ACESSO A DIVERSAS FUNCIONALIDADES</button>
        <br>
        <br>
        <br>
        <div class="aa">
            <i class="fa-solid fa-file"></i>
            <i class="fa-solid fa-floppy-disk"></i>
            <i class="fa-regular fa-calendar-days"></i>
        </div>

    </div>
</div>

<!-- Comment -->
{{-- yeaaaahhh --}}

@endsection
