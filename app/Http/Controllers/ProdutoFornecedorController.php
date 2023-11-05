<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdutoFornecedor;

class ProdutoFornecedorController extends Controller
{
    public function index(){

        $produtoFornecedors = ProdutoFornecedor::with(['pessoa','produto','endereco'])->limit(5)->get();
       
        return view('welcome',compact('produtoFornecedors'));
    }
}
