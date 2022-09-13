<!DOCTYPE html>

<title>Cadastro</title>
<style>
	body {
		color: #999;
		font-family: 'Roboto', sans-serif;
	}
    .form-control {
		border-color: #eee;
        min-height: 41px;
		box-shadow: none !important;
	}
    .form-control:focus {
		border-color: #5cd3b4;
	}
    .form-control, .btn {        
        border-radius: 3px;
    }
	.signup-form {
		width: 500px;
		margin: 0 auto;
		padding: 30px 0;
	}
    .signup-form h2 {
		color: #333;
        margin: 0 0 30px 0;
		display: inline-block;
		padding: 0 30px 10px 0;
		border-bottom: 3px solid #2781DC;
    }
    .signup-form form {
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form .form-group {
		margin-bottom: 20px;
	}
	.signup-form label {
		font-weight: normal;
		font-size: 13px;
	}
    .signup-form input[type="checkbox"] {
		margin-top: 2px;
	}
    .signup-form .btn {        
        font-size: 16px;
        font-weight: bold;
		border: none;
		margin-top: 20px;
		min-width: 140px;
    }
	.signup-form .btn:hover, .signup-form .btn:focus {
        outline: none !important;
	}
    .signup-form a {
		color: #2781DC;
		text-decoration: underline;
	}
	.signup-form a:hover {
		text-decoration: none;
	}
    .signup-form form a {
		color: #2781DC;
		text-decoration: none;
	}	
	.signup-form form a:hover {
		text-decoration: underline;
	}
</style>
@extends('layout')


@section('titulo')
 Cadastrar-se
@endsection


@section('content')
<form action="cadastro" method ="POST">
    @csrf
    <div class="signup-form">
    <form action="/examples/actions/confirmation.php" method="post" class="form-horizontal">
		<div class="col-xs-8 col-xs-offset-4">
			<h2>Registrar-se</h2>
		</div>		
        <div class="form-group">
			<label class="control-label col-xs-4">Nome</label>
			<div class="col-xs-8">
                <input type="text" class="form-control" name="name" placeholder = "Nome">
            </div>        	
        </div>
        <div class="form-group">
			<label class="control-label col-xs-4">CPF</label>
			<div class="col-xs-8">
                <input type="text" class="form-control" name="cpf" placeholder = "CPF">
            </div>        	
        </div>
        <div class="form-group">
			<label class="control-label col-xs-4">Telefone</label>
			<div class="col-xs-8">
                <input type="text" class="form-control" name="cellphone" placeholder = "Telefone">
            </div>        	
        </div>
		<div class="form-group">
			<label class="control-label col-xs-4">Email Address</label>
			<div class="col-xs-8">
                <input type="email" class="form-control" name="email" required="required" placeholder = "E-mail">
            </div>        	
        </div>
		<div class="form-group">
			<label class="control-label col-xs-4">Password</label>
			<div class="col-xs-8">
                <input type="password" class="form-control" name="password" required="required" placeholder = "Senha">
            </div>        	
		<div class="form-group">
			<div class="col-xs-8 col-xs-offset-4">
				<p><label class="checkbox-inline"><input type="checkbox" required="required"> Aceito os <a href="#">Termos de uso</a> &amp; <a href="#">Política de privacidade</a>.</label></p>
				<button type="submit" class="btn btn-primary btn-lg">Registrar-se</button>
			</div>  
		</div>		      
    </form>
	<div class="text-center">Já posssui conta? <a href="login">Logue-se aqui</a></div>
</div>
</form>


@endsection
