<!-- resources/views/partials/header.blade.php -->
<div class="container">
    <p>{{ $formattedDate }}</p>    
</div>
<nav>
    <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/about') }}">About</a></li>
        <li><a href="{{ url('/contact') }}">Contact</a></li>
    </ul>
</nav>