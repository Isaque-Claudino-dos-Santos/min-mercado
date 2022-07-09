<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Produto;
use App\Models\User;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtos = Produto::all(['id','marca','preco','tipo']);
        return view('produtos.index', compact('produtos'));
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(StorePostRequest $request)
    {
        $validated = $request->validated();
        // Produto::create($request->all());
    }
}
