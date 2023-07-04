@extends('layout')

@section('styles')
    <!-- Additional styles specific to this view -->
    <link rel="stylesheet" href="{{ asset('css/coursedetails.css') }}" />

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}
    <script src="{{ asset('main.js') }}"></script>
@endsection



@section('content')
    <section id="course-inner">
        <div class="overview">
            <img src="{{ asset('storage/' . $course->icon) }}" class="course-img" alt="">
            <div class="course-head">
                <div class="c-name">
                    <h2 style="margin-bottom:12px;">{{ $course->title }}</h2>

                    @php

                        $rating = $course->rating; // Assuming $course is the object representing the course with a rating property
                        $fullStars = floor($rating);
                        $halfStar = ceil($rating - $fullStars);
                        $emptyStars = 5 - $fullStars - $halfStar;
                    @endphp

                    <span class="stars">
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
                    <span class="enrolls">({{ $course->enrolled }})</span>

                    <p>This is an introductory course to the {{ $course->title }}
                </div>
                <span>{{ $course->price }}</span>
            </div>
            <h3>Instructor</h3>
            <div class="tutor">
                <img src="{{ asset('storage/' . $user->icon) }}" alt="">
                <div class="tutor-det">
                    <h5>{{ $course->author }}</h5>
                    <p>Instructor</p>
                </div>
            </div>
            <hr>
            <h3>Course Overview</h3>
            <p>
                {{ $course->overview }}
            </p>
            <hr>
            <h3>What you'll learn</h3>
            <div class="learn">

                @foreach ($outcomeArray as $item)
                    <p><i class="fa-solid fa-circle-check"></i>{{ $item }}</p>
                @endforeach

            </div>
        </div>

        <div class="enroll">
            <h3>This course includes:</h3>
            <p><i class="fa-solid fa-video"></i>{{ $course->duration }} video</p>
            <p><i class="fa-solid fa-newspaper"></i>75 articles</p>
            <p><i class="fa-solid fa-cloud-arrow-down"></i>Downloadable resources</p>
            <p><i class="fa-solid fa-infinity"></i>Full lifetime access</p>
            <p><i class="fa-solid fa-mobile"></i>Access on mobile and TV</p>
            <p><i class="fa-solid fa-paperclip"></i>Assignment</p>
            <p><i class="fa-solid fa-trophy"></i>Certificate on completion</p>
            <div class="enroll-btn">

                {{-- <a class="blue" id="enroll" href="/home/courses/{{ $id }}/coursevideos">Enroll Course</a> --}}

                <a class="blue" id="enroll" href="/home/enroll">Enroll</a>
                

                <form action="/home/cart" method="POST" id="formcart">
                    @csrf
                    <input type="hidden" id="courseid" name="courseid">
                    <input type="hidden" id="title" name="title">
                    <input type="hidden" id="category" name="category">
                    <input type="hidden" id="icon" name="icon">
                    <input type="hidden" id="overview" name="overview">
                    <input type="hidden" id="outcome" name="outcome">
                    <input type="hidden" id="ytid" name="ytid">
                    <input type="hidden" id="duration" name="duration">
                    <input type="hidden" id="price" name="price">
                    <input type="hidden" id="titles" name="titles">
                    <input type="hidden" id="rating" name="rating">
                    <input type="hidden" id="enrolled" name="enrolled">
                    <input type="hidden" id="author_id" name="author_id">
                    <input type="hidden" id="author" name="author">
                    <input type="hidden" id="userid" name="userid">

                </form>

                <script>

                    var data={!!json_encode($course)!!};
                    var userid={{$userid}};
                    document.querySelector('#courseid').value=data['id'];
                    document.querySelector('#title').value=data['title'];
                    document.querySelector('#category').value=data['category'];
                    document.querySelector('#icon').value=data['icon'];
                    document.querySelector('#overview').value=data['overview'];
                    document.querySelector('#outcome').value=data['outcome'];
                    document.querySelector('#ytid').value=data['ytid'];
                    document.querySelector('#duration').value=data['duration'];
                    document.querySelector('#price').value=data['price'];
                    document.querySelector('#titles').value=data['titles'];
                    document.querySelector('#rating').value=data['rating'];
                    document.querySelector('#enrolled').value=data['enrolled'];
                    document.querySelector('#author_id').value=data['author_id'];
                    document.querySelector('#author').value=data['author'];
                    document.querySelector('#userid').value=userid;


                    document.querySelector('#enroll').addEventListener("click",(e)=>{
                        e.preventDefault();
                        document.querySelector('#formcart').action="/home/enroll";
                        document.querySelector('#formcart').submit();
                    });
                    document.querySelector('#cart').addEventListener("click",(e)=>{
                        e.preventDefault();
                        document.querySelector('#formcart').action="/home/cart";
                        document.querySelector('#formcart').submit();
                    });

                </script>


            </div>
        </div>


    </section>
@endsection
