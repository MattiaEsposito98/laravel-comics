<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Titolo Predefinito')</title>
    @Vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<style>
    html,
    body {
        height: 100%;
    }

    body {
        display: flex;
        flex-direction: column;
    }

    main {
        flex-grow: 1;
        /* Fa in modo che il contenuto occupi lo spazio disponibile */
    }
</style>

<body>
    <header>
        @include('partials.header')
    </header>

    <main>
        @yield('content')
        @include('partials.jumbotron')
    </main>

    <footer>
        @include('partials.footer')
    </footer>
</body>

</html>
