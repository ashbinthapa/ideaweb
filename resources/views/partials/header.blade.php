<!-- resources/views/partials/header.blade.php -->
<div class="container">
    <p>{{ $formattedDate }}</p>    
</div>
<div class="container">
<div class="ticker-container">
        <div class="ticker-item">Apple in a Basket</div>
        <div class="ticker-item">Boy at the Park</div>
        <div class="ticker-item">Cat on the Rooftop</div>
        <div class="ticker-item">Dog in the Kennel</div>
        <div class="ticker-item">Eggs in the Bowl</div>
    </div>

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
</div>
<nav>
    <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/about') }}">About</a></li>
        <li><a href="{{ url('/contact') }}">Contact</a></li>
    </ul>
</nav>