@extends('layout')
@section('storecontent')
<body>
    <header>
        <a href="#"></a> <nav>
            <ul>
                <li><a href="{{route('index')}}">Home</a></li>
                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Explore Our Products</h1>
        <div class="product-grid">
            <div class="product-card">
                <img src="product-image-1.jpg" alt="Product 1 image">
                <h3>Product 1 Name</h3>
                <p>Product 1 description goes here.</p>
                <span class="price">$19.99</span>
                <button>Add to Cart</button>
            </div>

            <div class="product-card">
                </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2023 Your Company Name</p>
    </footer>
</body>
@end
@section('title','store')