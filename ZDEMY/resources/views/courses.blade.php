@extends('layout')

@section('styles')
  <!-- Additional styles specific to this view -->
  <link rel="stylesheet" href="{{asset('css/courses.css') }}"/>
   <link rel="stylesheet" href="{{ asset('css/about.css') }}"/>
   {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}
   <script src="{{asset('main.js')}}"></script>
    <style>
        .courses{
            margin-top: 2.8rem;
        }

        nav{
            right: 0;
        }
    </style>
@endsection



@section('content')


{{-- <div class="dropdown">
    <div class="select">
        <span class="selected">Figma</span>
        <div class="caret"></div>
    </div>

    <ul class="limenu">
        <li>Framer</li>
        <li>Sketch</li>
        <li class="active">Figma</li>
    </ul>

</div> --}}

<div class="dropsearchcontainer">

<div class="dropdowncontainer">
<span class="catecontainer">Categories</span>
<ul class="dropdown">
    @foreach ($categories as $category)
    {{-- <form method="POST" action="/home/courses/{{$category->id}}"> --}}
    <li><a href="/home/courses/filters/{{$category}}">{{$category}}</a></li>
    {{-- </form> --}}
    @endforeach


    {{-- <li>{{$category->tags}}</li> --}}

</ul>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    var dropdownItems = document.querySelectorAll(".dropdown li");
    var cateContainer = document.querySelector(".catecontainer");
    var dropdown = document.querySelector(".dropdown");
    var dropdowncontainer = document.querySelector(".dropdowncontainer");

    dropdownItems.forEach(function(item) {
      item.addEventListener("click", function() {
        var selectedText = item.textContent;
        cateContainer.textContent = selectedText;

        dropdown.style.display = "none"; // Hide the dropdown when an item is selected
      });
    });
    dropdowncontainer.addEventListener("mouseover", function() {
    dropdown.style.display = "block"; // Show the dropdown when the parent container is hovered
  });
  dropdowncontainer.addEventListener("mouseout", function() {
    console.log("mouseout");
    dropdown.style.display = "none"; // Hide the dropdown when not hovered
  });
  });
</script>

 <div class="search">
    <form action="">
        <input type="text"
            placeholder=" Search Courses"
            name="search">
        <button>
            <i class="fa fa-search"
                style="font-size: 18px;">
            </i>
        </button>
    </form>
</div>

</div>



<section class="courses">
    <div class="container courses__container">

        @section('content')
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
<div class="learn"><a href="/home/courses/{{$course->id}}" class="btn btn-primary">Learn more</a></div>
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

     {{-- {{$courses->links()}}  --}}


    {{-- @else
<p>No courses found</p> --}}

{{-- @endunless --}}

    <!-- ----------------------END OF COURSES-------------------- -->



@endsection





