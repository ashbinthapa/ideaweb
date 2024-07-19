<!-- resources/views/partials/header.blade.php -->
<div class="container-ashbin">
    <p>{{ $formattedDate }}</p>
    <p>
        Latest:
</p>
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
<div class="website-header-main-title">
    <p>
	Improving Learning: Developing Measures of Accountability and Evaluating their Association with Student’s Gains in Achievement in Nepal
	</p>
</div>
<div class="header-image-container">
    <img src="{{ asset('uploads/idea header image.jpg') }}" alt="Idea-Iser">
</div>


</div>
<nav>
    <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/about') }}">About</a></li>
        <li><a href="{{ url('/contact') }}">Contact</a></li>
    </ul>
</nav>