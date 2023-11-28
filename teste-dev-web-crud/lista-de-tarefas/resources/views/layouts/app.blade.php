<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Lista de Tarefas</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            padding: 20px;
        }

        nav {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        @component('componente_navbar', ['current' => $current])
        @endcomponent
        <main role="main">
            @hasSection('body')
                @yield('body')
            @endif
        </main>
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script>
        const elemento = document.querySelectorAll(".validate-message");
        for (let i = 0; i < elemento.length; i++) {
            elemento[i].addEventListener('blur', () => {
                elemento[i].classList.remove('is-invalid');
            });
        }
    </script>
</body>

</html>
