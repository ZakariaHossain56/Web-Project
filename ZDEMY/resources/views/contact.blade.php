@extends('layout')

    @section('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    @endsection



@section('content')
    <section class="contact">
        <div class="container contact__container">
            <aside class="contact__aside">
                <div class="aside__image">
                    <img src="{{asset('images/contact.svg')}}">
                </div>
                <h2>Contact Us</h2>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Dolorum autem veniam exercitationem tempore placeat fugit
                    officiis consequatur vel maiores voluptate.
                </p>
                <ul class="contact__details">
                    <li>
                        <i class="fa-solid fa-phone"></i>
                        <h5>+0123456789</h5>
                    </li>

                    <li>
                        <i class="fa-solid fa-envelope"></i>
                        <h5>random@gmail.com</h5>
                    </li>

                    <li>
                        <i class="fa-solid fa-location-dot"></i>
                        <h5>Florida, United States</h5>
                    </li>

                </ul>

                <ul class="contact__socials">
                    <li> <a href="https://facebook.com"><i class="fa-brands fa-facebook"></i></a></li>
                    <li> <a href="https://twitter.com"><i class="fa-brands fa-twitter"></i></a></li>
                    <li> <a href="https://instagram.com"><i class="fa-brands fa-instagram"></i></a></li>
                    <li> <a href="https://linkedin.com"><i class="fa-brands fa-linkedin"></i></a></li>
                </ul>

            </aside>

<form action="https://formspree.io/f/xnqybred" method="POST" class="contact__form">
    <div class="form__name">
        <input type="text" name="First Name" placeholder="First Name" required>
        <input type="text" name="Last Name" placeholder="Last Name" required>
    </div>

<input type="email" name="Email Address" placeholder="Your Email Address" required>
<textarea name="Message" rows="7" placeholder="Message" required></textarea>
<button type="submit" class="btn btn-primary">Send Message</button>
</form>

        </div>
    </section>




@endsection
