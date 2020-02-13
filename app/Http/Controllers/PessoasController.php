<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PessoasController extends Controller
{
    public function listarPessoas(){
        $pessoas = ["Diego", "Isabelle", "Everton"];
 
        return view('pessoas.index', ['pessoas'=>$pessoas]);
    }
}
