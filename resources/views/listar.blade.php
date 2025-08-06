@extends('template.layout')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Cpf</th>
            <th scope="col">Curso</th>
        </tr>
    </thead>
    <tbody>
        @foreach($alunos as $aluno)
        <tr>
            <th scope="row"> {{ $aluno->id }} </th>
            <td> {{ $aluno->nome }} </td>
            <td> {{ $aluno->cpf }} </td>
            <td> {{ $aluno->curso }} </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection