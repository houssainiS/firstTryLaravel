@extends('layout')
@section('title','contact')
@section('contactcontent')
<body>
    <header>
        <a href="#"></a> <nav>
            <ul>
                <li><a href="{{route('index')}}">Home</a></li>
                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('store')}}">Store</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Get in Touch</h1>
        <div class="contact-form">
            <form action="submit-contact.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit">Send Message</button>
            </form>
        </div>

        <div class="contact-info">
            <h2>Other Ways to Connect</h2>
            <ul>
                <li><i class="fa fa-phone"></i> <a href="tel:+1234567890">Phone: +1 234-567-890</a></li>
                <li><i class="fa fa-envelope"></i> <a href="mailto:info@yourcompany.com">Email: info@yourcompany.com</a></li>
                <li><i class="fa fa-map-marker"></i> Address: 123 Main Street, City, State, ZIP</li>
            </ul>
        </div>
    </main>

    <footer>
        <p>&copy; 2023 Your Company Name</p>
    </footer>
</body>
@endsection
