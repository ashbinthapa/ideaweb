<!-- resources/views/partials/header.blade.php -->
<div class="container">
    <p>{{ $formattedDate }}</p>    
</div>
<div>

    <div class="ticker">
        <div class="ticker__wrap">
            <div class="ticker__item">Breaking News: Stock prices are rising!</div>
            <div class="ticker__item">Weather Update: Expect thunderstorms this evening.</div>
            <div class="ticker__item">Sports: Local team wins championship!</div>
            <div class="ticker__item">Tech: New smartphone model released today.</div>
        </div>
    </div>
    <script>
       document.addEventListener('DOMContentLoaded', function() {
    const tickerWrap = document.querySelector('.ticker__wrap');
    const tickerItems = document.querySelectorAll('.ticker__item');

    function cloneTickerItems() {
        tickerItems.forEach(item => {
            const clone = item.cloneNode(true);
            tickerWrap.appendChild(clone);
        });
    }

    cloneTickerItems();
});

});
    </script>


</div>
<nav>
    <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/about') }}">About</a></li>
        <li><a href="{{ url('/contact') }}">Contact</a></li>
    </ul>
</nav>