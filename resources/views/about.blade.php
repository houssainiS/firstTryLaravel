@extends('layout')
@section('title','about')
@section('aboutcontent')
<body>
    <header>
        <a href="#"></a> <nav>
        <ul>
                <li><a href="{{route('index')}}">Home</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
                <li><a href="{{route('store')}}">Store</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Our Story</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus sapien eu neque sagittis, ut ullamcorper lectus condimentum. Duis ac
            laoreet justo.</p>

        <div class="about-section">
            <img src="about-image-1.jpg" alt="About image 1">
            <h2>Our Mission</h2>
            <p>Maecenas eu turpis vitae odio vestibulum ullamcorper. Nullam faucibus sapien eu neque sagittis, ut ullamcorper lectus condimentum.</p>
        </div>

        <div class="about-section">
            <img src="about-image-2.jpg" alt="About image 2">
            <h2>Our Values</h2>
            <p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing.</p>
        </div>

        <div class="about-team">
            <h2>Meet Our Team</h2>
            <div class="team-member">
                <img src="team-member-1.jpg" alt="Team member 1">
                <h3>John Doe</h3>
                <p>CEO & Founder</p>
            </div>
            </div>
    </main>

    <footer>
        <p>&copy; 2023 Your Company Name</p>
    </footer>
</body>
@endsection
