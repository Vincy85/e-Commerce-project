<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>
    
    <!-- Fonts -->
   <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">-->

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('favicon.png')}}" type="image/x-icon">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
 
    <!-- Font Awesome Script -->     
    <script src="https://kit.fontawesome.com/b5123ed712.js" crossorigin="anonymous"></script>
</head>
<body>
    <x-layouts.header>

    </x-layouts.header>
    
    <main class="main-container">
        @yield('content');
    </main>
    
    <x-layouts.footer>
    </x-layouts.footer>
</body>
</html>