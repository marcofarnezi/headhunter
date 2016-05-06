<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TesteController extends Controller
{
    public function index($nome)
    {
        return view('teste.index', ['nome' => $nome]);
    }

    public function notas()
    {
        $notas = [
            "Anotação 1",
            "Anotação 2",
            "Anotação 3",
            "Anotação 4",
            "Anotação 5",
        ];
        return view('teste.notas', compact('notas'));
    }
}