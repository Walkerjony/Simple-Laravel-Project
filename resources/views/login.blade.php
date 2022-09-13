<!DOCTYPE html>
@extends('layout')


@section('titulo')
    Logar-se
@endsection


@section ('content')

<form action="login" method = "POST">
    @csrf
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong border border-primary" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Login</h3>

            <div class="form-outline mb-4">
              <input type="email" id = "email" class="form-control form-control-lg" name = "email" placeholder = "Email: " />
              <label class="form-label" for="typeEmailX-2"></label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="password" class="form-control form-control-lg" name = "password" placeholder = "Senha: " />
              <label class="form-label" for="typePasswordX-2"></label>
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>

            <hr class="my-4">

            <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
              type="submit"> <a class = "text-decoration-none text-white" href="cadastro">Não possui conta? Crie!</a></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>
@endsection