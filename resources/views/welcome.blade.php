@extends('layouts.main')
@section('title', 'Welcome')
@section('content')

<header>
    <a href="login"> Login |</a>
    <p>Cadastrar</p>
</header>
<div class="container">
    <div class="first">
        <h1>Escolha o tipo de documento desejado:</h1>
        <div class="buttons">
            <div class="rows">
                <div class="btn1">
                    <button class="btn">PLANO DE AULA</button>
                </div>
                <div class="btn2">
                    <button class="btn">PLANO DE AULA</button>
                </div>
            </div>
            <div class="rows">
                <div class="btn3">
                    <button class="btn">PLANO DE AULA</button>
                </div>
                <div class="btn4">
                    <button class="btn">PLANO DE AULA</button>
                </div>
            </div>
            <div class="btn5">
                <button class="btn">PLANO DE AULA</button>
            </div>
        </div>
    </div>
    <div class="second">

    </div>
</div>

<!-- Comment -->
{{-- yeaaaahhh --}}

@endsection
