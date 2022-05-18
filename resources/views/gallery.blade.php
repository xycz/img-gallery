<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>Image Gallery</title>

        {{-- Styles / Fonts --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>

    <body class="d-flex flex-column min-vh-100">
        <div id="app">
            <app/>
        </div>

        <!-- Footer-->
        <footer class="py-5 bg-dark mt-auto">
            <div class="container"><p class="m-0 text-center text-white"></p></div>
        </footer>
        
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>