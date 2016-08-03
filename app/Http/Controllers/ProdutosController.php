<?php

namespace App\Http\Controllers;

use App\Produtos;
use App\Http\Requests\ProdutosRequest;
use App\Tag;

class ProdutosController extends Controller
{
    private $produto;

    public function __construct(Produtos $produto)
    {
        $this->produto = $produto;
    }

    public function index()
    {
        $produtos = $this->produto->paginate(5);
        return view('admin.produtos.index', compact('produtos'));
    }

    public function create()
    {
        return view('admin.produtos.create');
    }

    public function store(ProdutosRequest $request)
    {        
        print_r('teste');
        $produto = $this->produto->create($request->all());        

        return redirect()->route('admin.produtos.index');
    }

    public function edit($id)
    {
        $produto  = $this->produto->find($id);

        return view('admin.produtos.edit', compact('produto'));
    }

    public function update($id, ProdutosRequest $request)
    {
        $this->produto->find($id)->update($request->all());                

        return redirect()->route('admin.produtos.index');
    }

    public function destroy($id)
    {
        $this->produto->find($id)->delete();

        return redirect()->route('admin.produtos.index');
    }

    public function descricao($id)
    {                      
        return $this->produto->find($id)->descricao;       
    }
        
}
