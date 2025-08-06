@extends('template.layout')

@section('content')
    <form action="">
        @csrf
        <label> Nome </label>
        <input type="text" name="nome">
        <label> Cpf </label>
        <input type="text" name="cpf">
        <label> Curso </label>
        <input type="text" name="curso">
        <button> Cadastrar </button> 
    </form>
@endsection