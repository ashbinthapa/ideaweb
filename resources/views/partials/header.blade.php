<!-- resources/views/partials/header.blade.php -->
<div class="container">
    <p>{{ $formattedDate }}</p>    
</div>
<div class="container">
    <div>
        Latest:
    </div>
    <div class="ticker-container">
        <div class="ticker-item">Apple in a Basket</div>
        <div class="ticker-item">Boy at the Park</div>
        <div class="ticker-item">Cat on the Rooftop</div>
        <div class="ticker-item">Dog in the Kennel</div>
        <div class="ticker-item">Eggs in the Bowl</div>
    </div>
    <div>
        <i class="fa fa-facebook-square" aria-hidden="true">kdngjlk</i>

    </div>
        
</div>

    
</div>
<nav>
    <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/about') }}">About</a></li>
        <li><a href="{{ url('/contact') }}">Contact</a></li>
    </ul>
</nav>