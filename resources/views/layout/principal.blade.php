<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="/css/app.css" rel="stylesheet" />  
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <title>Controle de estoque</title>
    </head>
    <body>        
        <div class="container">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="/">Estoque Laravel</a> 
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{action('ProdutoController@lista')}}">Listagem</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{action('ProdutoController@novo')}}">Novo</a>
                        </li>
                    </ul>
                </div>
            </nav>
            
            @yield('conteudo')

            <footer class="footer">
                <p>©Estoque Laravel.</p>
            </footer>
        </div>
    </body>
</html>