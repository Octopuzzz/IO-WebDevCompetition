<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/styles.css" rel="stylesheet">
    <title>IC Food</title>
</head>
<body>
    {{-- Navbar --}}
    <x-nav></x-nav>
    {{-- End Navbar --}}
    <div class="container">
        @yield('container')
    <x-menu></x-menu>
    </div>
</body>
</html>
