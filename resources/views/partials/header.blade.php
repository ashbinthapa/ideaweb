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
    <div class="header-facebook-icon">
        <a href="https://www.facebook.com/isernepalofficial/?ref=aymt_homepage_panel&eid=ARCZ8VyOFfG6ZEJl7hyyqg7-0wlTGyxtRQQwQU2psMbjH59aUSY-HQ5o-YnV3JiVR1NXkPDdzVzzR-06">
            <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
        </a>
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