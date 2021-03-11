<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="app.css">
        <title>@yield('title', env('APP_NAME'))</title>
    </head>
    <body>
        <h1>Le blog de Jean-Phi</h1>
        <header>
        </header>
        @yield('content')
        <footer>
        <p>&copy; Copyright {{ date('Y') }} </p>
        </footer>
    </body>
</html>
