<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <title>Página inicial</title>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="#">
            @yield('titulo')

</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
        
                </ul>
                <ul class="navbar-nav ml-auto">
                   <li class="nav-item"> 
                    <a class="nav-link" href="login">Login</a>
                   </li>

                   <li class="nav-item"> 
                    <a class="nav-link" href="cadastro">Cadastro</a>
                   </li>

                   <li class="nav-item"> 
                    <a class="nav-link" href="index">Início</a>
                   </li>
                </ul>

            </div>
        </div>
    </nav>
        
<div>
    @yield('content')
</div>


</body>
</html>