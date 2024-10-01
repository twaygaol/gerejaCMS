@extends('layouts.app')

@section('content')
<div class="fullwidth-block">
    <div class="container">
        <h2 class="section-title">Contact Us</h2>
        <form action="{{ route('contact.submit') }}" method="POST" class="contact-form">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label for="name">Your Name:</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="email">Your Email:</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
            </div>
            <label for="message">Your Message:</label>
            <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
            <button type="submit" class="button">Send Message</button>
        </form>
    </div>
</div>
@endsection
