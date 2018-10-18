<html>
    <head>
        <title>Minha Página - @yield('titulo')</title>
    </head>

    @section('barralateral')
        <p>Essa parte da seção é do template PAI</p>
    @show

    <body>
        <div>
            @yield('conteudo')
        </div>
    </body>
</html>