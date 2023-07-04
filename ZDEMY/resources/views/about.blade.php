@extends('layout')

    @section('styles')
    <link rel="stylesheet" href="{{asset('css/about.css') }}">
    @endsection


@section('content')
    <section class="about__achievements">
        <div class="container about__achievements-container">
            <div class="about__achievements-left">
                <img src="{{asset('images/about achievements.svg')}}">
            </div>

<div class="about__achievements-right">
    <h1>Achievements</h1>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Est libero delectus ea minus adipisci, doloribus optio. Nihil, quisquam laboriosam quo deleniti, dignissimos id dicta error impedit qui doloremque eveniet ad!
    </p>

<div class="achievements__cards">

    <article class="achievement__card">
        <span class="achievement__icon">
            <i class="fa-solid fa-video"></i>
        </span>
        <h3>{{$courses}}+</h3>
        <p>Courses</p>
    </article>

    <article class="achievement__card">
        <span class="achievement__icon">
            <i class="fa-solid fa-user-group"></i>
        </span>
        <h3>{{$students}}+</h3>
        <p>Students</p>
    </article>
    <article class="achievement__card">
        <span class="achievement__icon">
            <i class="fa-solid fa-trophy"></i>
        </span>
        <h3>26++</h3>
        <p>Awards</p>
    </article>


</div>

</div>

        </div>
    </section>


<!-- ----------------------END OF ACHIEVEMENTS-------------------- -->


<section class="team">
    <h2>Meet Our Team</h2>
    <div class="container team__container">

        @foreach ($teachers as $teacher)


        <article class="team__member">
            <div class="team__member-image">
                <img src="{{asset('storage/' . $teacher->icon)}}">
            </div>
            <div class="team__member-info">
                <h4>{{$teacher->firstname}} {{$teacher->lastname}}</h4>
                <p>Expert Tutor</p>
            </div>
            <div class="team__member-socials">
                <a href="https://instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://linkedin.com" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </article>

        @endforeach

    </div>
</section>


<!-- ----------------------END OF TEAM MEMBERS-------------------- -->



@endsection
