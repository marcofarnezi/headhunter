<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{
    public function index()
    {
        $articles = [
            [
                'title' => 'Titulo 1',
                'author' => 'Nome',
                'summary' => 'Bla bla bla bla bla bla balab balblalba'
            ],
            [
                'title' => 'Titulo 2',
                'author' => 'Nome',
                'summary' => 'Bla bla bla bla bla bla balab balblalba'
            ],
            [
                'title' => 'Titulo 3',
                'author' => 'Nome',
                'summary' => 'Bla bla bla bla bla bla balab balblalba'
            ]
        ];

        return view('blog.index', compact('articles'));
    }
}
