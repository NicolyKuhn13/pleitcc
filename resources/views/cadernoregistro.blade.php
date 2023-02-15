@extends('layouts.archive')
@section('title', 'Parecer Descritivo')
@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.umd.min.js"></script>
<script>
    function AssignValues() {
        localStorage.setItem("school", document.form.school.value);
        localStorage.setItem("student", document.form.student.value);
        localStorage.setItem("data", document.form.data.value);
        localStorage.setItem("titulo", document.form.titulo.value);
        localStorage.setItem("textbody", document.form.textbody.value);
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

    function Titulo() {
        alert("Value 1 is " + localStorage.getItem("titulo"));
    }

    function TextBody() {
        alert("Value 1 is " + localStorage.getItem("textbody"));
    }

</script>


    <form name="form">
        <div class="answer">
            <div class="one">

                <br>

                <label>Título</label>
                <input type="text" name="titulo" placeholder="Título do Documento" class="inputs">        

                <br>

                <label>Escola</label>
                <input type="text" name="school" placeholder="Nome da Instituição" class="inputs">

                <br>

                <label>Aluno</label>
                <input type="text" name="student" placeholder="Nome do Estudante" class="inputs">
        
                <br>

                <label>Data</label>
                <input type="date" name="data" placeholder="Escolha a data">

                <br>

                
                <input type="button" value="Título" onClick="Titulo()" class="btn">
                <input type="button" value="Escola" onClick="Escola()" class="btn">
                <br>
                <input type="button" value="Aluno" onClick="Estudante()" class="btn">
                <input type="button" value="Data" onClick="Data()" class="btn">
                <input type="button" value="Texto" onClick="TextBody()" class="btn">
            </div>

            <div class="two">
                <div>
                    <label>Corpo do Texto</label>
                    <br>
                    <textarea id="text" name="textbody" rows="4" cols="50"></textarea>
                </div>
            </div>

        </div>
        <div class="show">
            <input type="button" value="SALVAR"  onClick="AssignValues()" class="btn">
            <button onclick="gerarPdf()" class="btn">Download</button>
        
    </form>

    <script>
        function gerarPdf(){

            import { jsPDF } from "jspdf";
            const doc = new jsPDF();

            doc.text("Hello World", 10, 10);
            doc.save("a4.pdf");
        }
    </script>

@endsection