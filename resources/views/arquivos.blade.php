@extends('layouts.main')
@section('title', 'PLEI - Home')
@section('content')

<img src="../images/pleiofc.png">

<h1>O PLEI é uma plataforma onde você pode implementar os seus documentos sem se preocupar</h1>
<h2>Escolha o formato do documento desejado</h2>


@if($busca != '')
<p>O usuário está buscando por {{$busca}}</p>
@endif
<!-- Comment -->
{{-- yeaaaahhh --}}

@endsection
