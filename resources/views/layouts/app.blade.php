<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mon Application')</title>
    <!-- Ajoutez ici vos balises meta, liens CSS, scripts, etc. -->

    <!-- Exemple d'inclusion de fichiers CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
</head>
<body>
    <!-- L'élément où votre application React sera intégrée -->
    <div id="react-app">
        <main class="py-4">
                @yield('content')
        </main>
    </div>
    

    <!-- Vous pouvez ajouter d'autres éléments HTML ici -->

    <!-- Inclure le script pour charger votre application React depuis le dossier public -->
    <script src="{{ asset('mon-app-react/js/app.js') }}"></script>
    <script src="{{ asset('mon-app-react/static/js/main.js') }}"></script>

    <!-- Vous pouvez ajouter d'autres scripts ici, par exemple, pour jQuery ou Bootstrap -->
</body>
</html>
