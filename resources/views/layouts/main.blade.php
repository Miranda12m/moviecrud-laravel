<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('MovieCatalog')</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>

    @include('partials.nav')  <!-- Include the navigation -->

    <div class="container">
        @yield('content')  <!-- Dynamic content will be injected here -->
    </div>

    <!-- @include('partials.footer')  Include the footer -->

    <!-- Bootstrap CSS -->
     <!-- Bootstrap CSS (if not already included) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Bootstrap Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>



</body>
</html>

