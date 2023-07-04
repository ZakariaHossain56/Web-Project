@extends('layout')

@section('styles')
    <!-- Additional styles specific to this view -->
    <link rel="stylesheet" href="{{ asset('css/coursevideos.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/coursedetails.css') }}" />

    <style>
        .topnav a.active {
            background-color: orangered !important;
            color: white;
        }
        </style>

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}
    <script src="{{ asset('main.js') }}"></script>
@endsection



@section('content')
    <div class="videoscontainer">

        <section class="main-video">


            <iframe id="myIframe" width="960" height="515" src="https://www.youtube.com/embed/{{ $ytidsArray[0] }}"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay;
             clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>

            <h3 class="videotitle">{{ $titlesArray[0]}}</h3>



        </section>





        {{-- <script>
        var jsArray = @json($data);
        console.log(jsArray);
    </script> --}}



        <section class="video-playlist">
            <h3 class="title">{{$course->title}}</h3>
            <p>{{$lessons}} lessons &nbsp; . &nbsp; {{ $course->duration }}</p>
            <div class="videos">


                @php
                    $counter = 1;
                @endphp
                @for ($i = 0; $i < count($titlesArray); $i++)
                    @php
                        $title = $titlesArray[$i];
                        $ytid = $ytidsArray[$i];
                    @endphp



                    {{-- <a href="home/courses/{id}/coursevideos/get-course-id"> --}}
                    <div class="video active" onclick="changeBackground(this)">

                        <span><i class="fa-solid fa-circle-pause"></i></span>
                        <p>0{{ $counter }}.</p>
                        <h3 class="title">{{ $title }}</h3>
                        <h4 class="id" style="display: none;">{{ $ytid }}</h4>

                    </div>
                    {{-- </a> --}}

                    @php
                        $counter++;
                    @endphp
                @endfor

                <script>
                    var previous=null;
                    function changeBackground(element) {
                        var box = element.querySelector('.id');
                        var id = box.innerHTML;

                        var iframe = document.getElementById("myIframe");
                        var url="https://www.youtube.com/embed/"+id.trim();
                        iframe.src =url;


                        document.querySelector('.videotitle').innerHTML=element.querySelector('.title').innerHTML;

                        console.log(url);
                        if(previous!=null){
                            previous.style.backgroundColor='#0003';
                        }
                        previous=element;
                        element.style.backgroundColor = '#424890'; // Change the background color as desired
                    }
                </script>

            </div>
        </section>

        <section class="enroll">

        <div class="topnav" id="myTopnav">
            <a href="/home/enroll/{{$course->id}}/coursevideos" class="active">Overview</a>
            <a href="/home/enroll/{{$course->id}}/coursevideos/comment">Comment</a>
            <a href="/home/enroll/{{$course->id}}/coursevideos/review">Review</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
              <i class="fa fa-bars"></i>
            </a>
        </div>
        <hr style="color: white">

            <div class="review">
          <div style="padding-left:16px">


        <hr>
        <h3>Course Overview</h3>
        <p>
            {{ $course->overview }}
        </p>
        <hr>
        <br><br>
        <h3>What you'll learn</h3>
        <div class="learn">

            @foreach ($outcomeArray as $item)
                <p><i class="fa-solid fa-circle-check"></i>{{ $item }}</p>
            @endforeach

        </div>
    </div>
          </div>
            </div>
        </section>

          <script>
          function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
              x.className += " responsive";
            } else {
              x.className = "topnav";
            }
          }
          </script>

    </div>
@endsection
