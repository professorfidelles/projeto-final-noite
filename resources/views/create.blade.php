@extends('template.layout')

@section('content')
    <form action="{{ route('alunos-store') }}" class="container mt-5 p-5" method="post">
        <h2> Cadastrar novo Aluno </h2>
        @csrf
        <label class="form-label"> Nome </label>
        <input type="text" name="nome" class="form-control">
        <label class="form-label"> Cpf </label>
        <input type="text" name="cpf" class="form-control">
        <label class="form-label"> Curso </label>
        <input type="text" name="curso" class="form-control">
        <button class="btn btn-primary form-control mt-2"> Cadastrar </button> 
    </form>
@endsection