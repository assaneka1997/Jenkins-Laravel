<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'accueil')</title>
    <link rel="stylesheet" href="{{asset('css/design.css')}}">
</head>
<body>
    <header>Gestion des utilisateurs</header>
    <nav>
        <ul>
            <li><a href="/">Accueil</a></li>
            <li><a href="/users/liste">Liste</a></li>
            <li><a href="/users/create">Ajouter</a></li>
        </ul>
    </nav>
    <section>
        @if (session('message'))
        <div class="alert alert-{{session('status')? 'success': 'danger'}}">
            {{session('message')}}
        </div>
        @endif
        <h1 id="titre-principal">@yield('titre')</h1>
        @yield('contenu')
    </section>
    <footer>VISION TECH &copy; Septembre 2024</footer>
</body>
</html>
