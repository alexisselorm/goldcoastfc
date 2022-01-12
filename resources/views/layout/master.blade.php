<!DOCTYPE html>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- MDBootstrap CSS -->

    <!-- Fontawesome CSS -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>

    <!-- External CSS -->
    <link rel="stylesheet" href="/style.css">

    {{-- Tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>

{{-- AlpineJS --}}
<script defer src="https://unpkg.com/alpinejs@3.7.1/dist/cdn.min.js"></script>


    <!-- JQuery -->
    <script src="/node_modules/jquery/dist/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noticia+Text&display=swap" rel="stylesheet">
    <title>Gold Coast FC</title>
</head>

<body>
  @include('components.top-nav')
  @include('components.main-nav')
    @yield('content')

    @include('components.scripts')  
    @include('components.footer')

   @include('components.flash')
</body>
</html>
