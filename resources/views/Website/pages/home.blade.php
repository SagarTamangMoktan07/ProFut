@extends('Website.layouts.Master')
@section('content')
<!-- Hero Section with Background Video -->
<section class="hero-section">
    <video autoplay muted loop id="background-video">
        <source src="{{ asset('bg.mp4') }}" type="video/mp4">
    </video>
    <div class="overlay"></div>
    <div class="hero-content">
        <div class="container text-center">
            <h1>Welcome to SportEase</h1>
            <p>Your trusted solution for seamless sports facility bookings.</p>
            <a href="#" class="books">Book Now</a>
        </div>
    </div>
</section>
@endsection
