@extends('layout')

@section('styles')
  <!-- Additional styles specific to this view -->
   <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}"/>

<style>
    .recent{
        width: 1600px;
    }
    </style>
@endsection

@section('content')

<input type="checkbox" id="sidebar-toggle">
<div class="sidebar">
    <div class="sidebar-header">
        <h3 class="brand">
            <span>ZDEMY</span>
        </h3>
        <label for="sidebar-toggle"><i class="fa-solid fa-bars"></i></label>
    </div>


    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="/home/dashboard">
                    <i class="fa-solid fa-house"></i>
                    <span>Dashboard</span>
                </a>
            </li>



            <li>
                <a href="/home/dashboard/students">
                    <i class="fa-solid fa-user-graduate"></i>
                    <span>Students</span>
                </a>
            </li>

            <li>
                <a href="/home/dashboard/instructors">
                    <i class="fa-solid fa-user-tie"></i>
                    <span>Instructors</span>
                </a>
            </li>

            <li>
                <a href="/home/dashboard/admins">
                    <i class="fa-solid fa-user-tie"></i>
                    <span>Admins</span>
                </a>
            </li>

            <li>
                <a href="/home/dashboard/messages">
                    <i class="fa-solid fa-message"></i>
                    <span>Reviews</span>
                </a>
            </li>

            <li>
                <a href="/home/dashboard/courses">
                    <i class="fa-solid fa-book-open"></i>
                    <span>Courses</span>
                </a>
            </li>

            <li>
                <a href="/home/dashboard/comments">
                    <i class="fa-solid fa-comment"></i>
                    <span>Comments</span>
                </a>
            </li>


        </ul>
    </div>


</div>

<div class="main-content">

    {{-- <header>
        {{-- <div class="search-wrapper">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="search" placeholder="search">
        </div> --}}

        {{-- <div class="social-icons">
            <div></div>
        </div> --}}
    {{--</header> --}}

    <main>


        <section class="recent">
            <div class="activity-grid">

                <div class="activity-card">
                    <h3>All Reviews</h3>

                    <table>
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Rating</th>
                                <th>Review</th>
                                <th>Username</th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($reviews as $review)


                            <tr>
                                <td>{{$review->title}}</td>
                                <td>{{$review->rating}}</td>
                                <td>{{$review->review}}</td>

                                <td>
                                    {{$review->user}}
                                </td>
                            </tr>
                            @endforeach





                        </tbody>


                    </table>
                </div>




            </div>



        </section>


    </main>

</div>


@endsection
