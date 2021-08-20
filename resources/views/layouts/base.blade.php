<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/@yield('home').css">
    <link rel="stylesheet" href="/css/authors.css">
    <link rel="stylesheet" href="/css/@yield('authors').css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Cabin|Roboto:400,700|Roboto+Condensed:400,700" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="/characters">Les Personnages</a></li>
                <li><a href="/authors">Les auteurs</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
