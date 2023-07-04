@extends('layout')

    @section('styles')
    <link rel="stylesheet" href="{{asset('css/blog.css') }}">

    @endsection


@section('content')



<section id="blog-container">
    <div class="blogs">

        <div class="post">
            <div class="img"><img src="{{asset('images/course1.jpg')}}" alt=""></div>
            <h3>Learn Web development in the easiest way</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis
                nesciunt dolore aliquam molestiae similique esse ab. Eligendi est,
                praesentium obcaecati eveniet laboriosam omnis minus possimus! Cumque,
                inventore fugit cupiditate assumenda, itaque optio eveniet, quasi eligendi
                deserunt at placeat officiis adipisci.
            </p>
            <a href="/home/about/blog/post">Read more</a>
        </div>

        <div class="post">
            <div class="img"><img src="{{asset('images/course2.jpg')}}" alt=""></div>
            <h3>Learn Web development in the easiest way</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis
                nesciunt dolore aliquam molestiae similique esse ab. Eligendi est,
                praesentium obcaecati eveniet laboriosam omnis minus possimus! Cumque,
                inventore fugit cupiditate assumenda, itaque optio eveniet, quasi eligendi
                deserunt at placeat officiis adipisci.
            </p>
            <a href="/home/about/blog/post">Read more</a>
        </div>

        <div class="post">
            <div class="img"><img src="{{asset('images/course3.jpg')}}" alt=""></div>
            <h3>Learn Blockchain in the easiest way</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis
                nesciunt dolore aliquam molestiae similique esse ab. Eligendi est,
                praesentium obcaecati eveniet laboriosam omnis minus possimus! Cumque,
                inventore fugit cupiditate assumenda, itaque optio eveniet, quasi eligendi
                deserunt at placeat officiis adipisci.
            </p>
            <a href="/home/about/blog/post">Read more</a>
        </div>

        <div class="post">
            <div class="img"><img src="{{asset('images/course4.jpg')}}" alt=""></div>
            <h3>Learn Graphic design in the easiest way</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis
                nesciunt dolore aliquam molestiae similique esse ab. Eligendi est,
                praesentium obcaecati eveniet laboriosam omnis minus possimus! Cumque,
                inventore fugit cupiditate assumenda, itaque optio eveniet, quasi eligendi
                deserunt at placeat officiis adipisci.
            </p>
            <a href="/home/about/blog/post">Read more</a>
        </div>

        <div class="post">
            <div class="img"><img src="{{asset('images/course5.jpg')}}" alt=""></div>
            <h3>Learn Marketing in the easiest way</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis
                nesciunt dolore aliquam molestiae similique esse ab. Eligendi est,
                praesentium obcaecati eveniet laboriosam omnis minus possimus! Cumque,
                inventore fugit cupiditate assumenda, itaque optio eveniet, quasi eligendi
                deserunt at placeat officiis adipisci.
            </p>
            <a href="/home/about/blog/post">Read more</a>
        </div>

        <div class="post">
            <div class="img"><img src="{{asset('images/course6.jpg')}}" alt=""></div>
            <h3>Learn Finance in the easiest way</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis
                nesciunt dolore aliquam molestiae similique esse ab. Eligendi est,
                praesentium obcaecati eveniet laboriosam omnis minus possimus! Cumque,
                inventore fugit cupiditate assumenda, itaque optio eveniet, quasi eligendi
                deserunt at placeat officiis adipisci.
            </p>
            <a href="/home/about/blog/post">Read more</a>
        </div>

        <div class="post">
            <div class="img"><img src="{{asset('images/course7.jpg')}}" alt=""></div>
            <h3>Learn Business in the easiest way</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis
                nesciunt dolore aliquam molestiae similique esse ab. Eligendi est,
                praesentium obcaecati eveniet laboriosam omnis minus possimus! Cumque,
                inventore fugit cupiditate assumenda, itaque optio eveniet, quasi eligendi
                deserunt at placeat officiis adipisci.
            </p>
            <a href="/home/about/blog/post">Read more</a>
        </div>

        <div class="post">
            <div class="img"><img src="{{asset('images/course8.jpg')}}" alt=""></div>
            <h3>Learn App development in the easiest way</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis
                nesciunt dolore aliquam molestiae similique esse ab. Eligendi est,
                praesentium obcaecati eveniet laboriosam omnis minus possimus! Cumque,
                inventore fugit cupiditate assumenda, itaque optio eveniet, quasi eligendi
                deserunt at placeat officiis adipisci.
            </p>
            <a href="/home/about/blog/post">Read more</a>
        </div>

        <div class="post">
            <div class="img"><img src="{{asset('images/course9.jpg')}}" alt=""></div>
            <h3>Learn Machine learning in the easiest way</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis
                nesciunt dolore aliquam molestiae similique esse ab. Eligendi est,
                praesentium obcaecati eveniet laboriosam omnis minus possimus! Cumque,
                inventore fugit cupiditate assumenda, itaque optio eveniet, quasi eligendi
                deserunt at placeat officiis adipisci.
            </p>
            <a href="/home/about/blog/post">Read more</a>
        </div>


    </div>

    <div class="cate">
        <h2>Categories</h2>
        <hr>
        <a href="/home/about/blog/post">Web Development</a>
        <hr>
        <a href="/home/about/blog/post">Blockchain</a>
        <hr>
        <a href="/home/about/blog/post">Graphic Design</a>
        <hr>
        <a href="/home/about/blog/post">Marketing</a>
        <hr>
        <a href="/home/about/blog/post">Finance</a>
        <hr>
        <a href="/home/about/blog/post">Music</a>
        <hr>
        <a href="/home/about/blog/post">Business</a>
        <hr>
        <a href="/home/about/blog/post">App development</a>
        <hr>
        <a href="/home/about/blog/post">Machine Learning</a>
        <hr>
    </div>
</section>




@endsection



