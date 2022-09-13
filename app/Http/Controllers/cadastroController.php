<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cadastro;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class cadastroController extends Controller
{
    public function cadastro(){
        return view('cadastro');
    }
    public function store(Request $request){   
      $cadastro = new Cadastro();
      $cadastro->name = $request->input('name');
      $cadastro->cpf = $request->input('cpf');
      $cadastro->cellphone = $request->input('cellphone');
      $cadastro->email = $request->input('email');
      $cadastro->password = Hash::make($request->password);
      $cadastro->save();
      return redirect('/index');
    }

    public function login(){
      return view('login');
    }

    function auth(Request $request){
      $cadastro = Cadastro::where(['email' => $request->email])->first();
      if(!$cadastro || !Hash::check($request->password, $cadastro->password)){
        return "Erro";
      }else{
        $request->session()->put('user', $cadastro);
        return redirect('/index');
      }

    }
}


