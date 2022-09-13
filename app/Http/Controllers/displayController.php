<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cadastro;

class displayController extends Controller
{
    public function index(){
    return view('index');
    }

    public function sobre(){
    return view('sobre');
    }

    public function dados(){
        
        $cadastro = Cadastro::all();
        return view('dados', compact('cadastro')); 
    }
}
