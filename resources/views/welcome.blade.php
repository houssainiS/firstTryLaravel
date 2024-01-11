@extends('layout')
@section('title','home')
@section('bodycontent')
<body>
    <header>
        <a href="#"></a> <nav>
            <ul>
                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
                <li><a href="{{route('store')}}">Store</a></li>
                <li><a href="{{route('computers.index')}}">Computers </a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="hero-section">
            <img src="welcome-image.jpg" alt="Welcome image">
            <h2>Your journey begins here</h2>
            <p>Discover the possibilities and explore what we have to offer.</p>
            <button>Get Started</button>
        </div>

        </main>

    <footer>
        <p>&copy; 2023 Your Company Name</p>
    </footer>
</body>

@endsection
