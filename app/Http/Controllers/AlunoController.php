<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index(){
        $alunos = Aluno::all();
        return view('listar' , compact('alunos'));
    }

    public function create(){
        return view('create');
    }
}
