<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VpessoaUsuario;
use Illuminate\Support\Facades\Auth;

class VpessoaUsuarioController extends Controller
{
    //
    public function index(VpessoaUsuario $vpessoaUsuario){

        $vpessoaUsuarios = $vpessoaUsuario->where('apelido',Auth::user()->email)->get();
        

      
        return view('dashboard',compact('vpessoaUsuarios'));
    }
}
