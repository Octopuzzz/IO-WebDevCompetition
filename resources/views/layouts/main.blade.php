<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
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
    {{-- footer --}}
    <footer class="footer">
        <div class="footer-text">
            <span>
                &copy; 2022 ICFOOD, All rights reserved
            </span>
        </div>
        <div class="footer-media">
            <ul>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-youtube"></i>
                <i class="fab fa-facebook"></i>
                <i class="fab fa-linkedin"></i>
            </ul>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/js/all.min.js"></script>
</body>
</html>
