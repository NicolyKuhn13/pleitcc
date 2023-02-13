@extends('layouts.archive')
@section('title', 'Ficha Avaliativa')
@section('content')

<script>
    function AssignValues() {
        localStorage.setItem("school", document.form.school.value);
        localStorage.setItem("student", document.form.student.value);
        localStorage.setItem("data", document.form.data.value);
    }

    function Escola() {
        alert("Value 1 is " + localStorage.getItem("school"));
    }
    function Estudante() {
        alert("Value 1 is " + localStorage.getItem("student"));
    }
    function Data() {
        alert("Value 1 is " + localStorage.getItem("data"));
    }
</script>

    <form name="form">
        <div class="answer">

            <label>Título</label>
            <input type="text" name="input" placeholder="Título do Documento">        

            <label>Escola</label>
            <input type="text" name="school" placeholder="Nome da Instituição">

            <br>

            <label>Aluno</label>
            <input type="text" name="student" placeholder="Nome do Estudante">
    
            <br>

            <label>Data</label>
            <input type="date" name="data" placeholder="Escolha a data">

            <br>

            <input type="button" value="Assign values"  onClick="AssignValues()">
            <input type="button" value="Show value 1" onClick="Escola()">
            <input type="button" value="Show value 2" onClick="Estudante()">
            <input type="button" value="Show value 3" onClick="Data()">

        </div>
    </form>


@endsection