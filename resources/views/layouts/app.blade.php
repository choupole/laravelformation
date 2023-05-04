{{-- notre template pour toute nos pages  --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon super site</title>
</head>
<body>
    {{-- ici on est entrain d'inclure un fichier navbar qui se trouve dans partials avec notre menu de navigation  --}}
    @include('partials.navbar')
    {{-- ici on choisi la partie qui va changer pour chaque page  --}}
     @yield('content')
</body>
</html>