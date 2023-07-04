@extends('layout')

@section('styles')
  <!-- Additional styles specific to this view -->
  {{-- <link rel="stylesheet" href="{{asset('css/courses.css') }}"/>
   <link rel="stylesheet" href="{{ asset('css/about.css') }}"/> --}}
   {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}
   <script src="{{asset('main.js')}}"></script>
    <style>
        .courses{
            margin-top: 2.8rem !important;
        }

        nav{
            right: 0;
        }


    </style>
@endsection



@section('content')

<br><br><br><br>


<section class="courses">
    <div class="container courses__container">


        {{-- @unless (count($courses)==0) --}}
        @foreach ($courses as $course)

        <article class="course">
            <div class="course__image">
                <img src="{{asset('storage/' . $course->icon)}}">
            </div>
        <div class="course__info">
            <h4>{{$course->title}}</h4>
            <h6>{{$course->author}}</h6>
            @php
    $rating = $course->rating; // Assuming $course is the object representing the course with a rating property
    $fullStars = floor($rating);
    $halfStar = ceil($rating - $fullStars);
    $emptyStars = 5 - $fullStars - $halfStar;
@endphp

<span class="star">
    @for ($i = 1; $i <= $fullStars; $i++)
    <i class="fa-solid fa-star star-full"></i>
@endfor

@if ($halfStar > 0)
    <i class="fa-solid fa-star-half star-half"></i>
@endif

@for ($i = 1; $i <= $emptyStars; $i++)
    <i class="fa-regular fa-star star-empty"></i>
@endfor
</span>

<span>({{$course->enrolled}})</span>
<div class="learn"><a href="/home/enroll/{{$course->id}}/coursevideos" class="btn btn-primary">Go to Course</a></div>
            {{-- <p>
                {{$course->description}}
                            </p>
            <a href="/home/courses/{{$course['id']}}" class="btn btn-primary">Learn more</a> --}}
        </div>
        <div class="cost">{{$course->price}}</div>
        </article>


        @endforeach


    </div>
</section>

@endsection
