<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        @include('partials.header')
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        @include('partials.footer')
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        const items = document.querySelectorAll('.ticker-item');
        let currentIndex = 0;

        function showNextItem() {
            items.forEach((item, index) => {
                item.style.top = index === currentIndex ? '0' : '50px';
            });
            currentIndex = (currentIndex + 1) % items.length;
        }

        setInterval(showNextItem, 3000); // Change item every 2 seconds

        // Initialize ticker
        showNextItem();
    </script>
</body>
</html>
