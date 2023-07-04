<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Multipage Education Website using HTML, CSS & JavaSript</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <script src="{{asset('./main.js')}}"></script>

    @yield('styles')




    <!-- GOOGLE FONT (MONTSERRAT) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Aldrich&family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- FONT-AWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- SWIPERJS -->
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>

</head>
<body>
    <nav>
        <div class="container nav_container">
            <a href="/home"><h4>ZDEMY</h4></a>
            <ul class="nav__menu">
                <li><a href="/home">Home</a></li>
                <li><a href="/home/about">About</a></li>
                <li><a href="/home/about/blog">Blog</a></li>
                <li><a href="/home/courses">Courses</a></li>

                @if (auth()->user()?->role=='Teacher')
                <li><a href="/home/addcourse">AddCourse</a></li>
                @endif

                @if (auth()->user()?->role=='Admin')
                <li><a href="/home/dashboard">Dashboard</a></li>
                @endif


                <li><a href="/home/contact">Contact</a></li>
                {{-- @guest
                <li><a href="/home/login">Log in</a></li>
                @endguest or --}}

                @if (!auth()->check())      {{--if the user is not signed in --}}
                <li><a href="/home/login">Log in</a></li>

                @endif

               @if (auth()->check())
               <div class="wrapper">

                <div class="right-menu">
                    <div class="menu-button">
                    <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="dropdown-menu">
                    <ul>
                    <li><a href="/home/enroll">My learning</a></li>
                    <li><a href="/home/cart">My cart</a></li>
                    <li><a href="/home/editprofile/{{auth()->user()->id}}">Edit Profile</a></li>
                    <li><a href="/home/privacypolicy">Privacy Policy</a></li>
                    <li><a href="/home/termsandconditions">Terms and Conditions</a></li>
                    <li><a href="/home/refundpolicy">Refund Policy</a></li>
                    <li><a href="/home/faq">FAQ</a></li>
                    <form id="logout-form" method="POST" action="/home/logout">
                        @csrf
                        <li><a href="/home/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a></li>
                    </form>

                    </ul>
                </div>
            </div>

               @endif

               <script>
                function toggleDropdown() {
                    const dropdownContent = document.querySelector('.dropdown-content');
                    dropdownContent.classList.toggle('show');
                }
                </script>

                {{-- <li><a href="/home/logout">Log out</a></li> --}}
            </ul>
                {{-- @auth
                    <form method="POST" action="/home/logout">
                        @csrf
                        <li><a href="/home/login">Log out</a></li>
                    </form>


                @else --}}

                {{-- @endauth --}}

            <button id="open-menu-btn"><i class="fa-solid fa-bars"></i></button>
            <button id="close-menu-btn"><i class="fa-solid fa-xmark"></i></button>

        </div>
    </nav>

    <!-- ----------------------END OF NAVBAR-------------------- -->


    @yield('content')

{{-- @if (session()->has('success'))
<div>
    <p>{{session('success')}}</p>
</div>

@endif --}}



@if (session()->has('success'))
<div class="logoutflash">
    <p>{{ session('success') }}</p>
</div>

<script>
    setTimeout(function() {
        document.querySelector('.logoutflash').style.display = 'none';
    }, 4000); // 4000 milliseconds = 4 seconds
</script>
@endif

<footer>
    <div class="container footer__container">
        <div class="footer__1">
            <a href="/home" class="footer_logo"><h4>ZDEMY</h4></a>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui excepturi porro molestias, vel sequi non omnis a voluptatem fugiat pariatur?
            </p>
        </div>

        <div class="footer__2">
      <h4>Permalinks</h4>
      <ul class="permalinks">
        <li><a href="/home">Home</a></li>
        <li><a href="/home/about">About</a></li>
        <li><a href="/home/courses">Courses</a></li>
        <li><a href="/home/contact">Contact</a></li>
      </ul>
        </div>


        <div class="footer__3">
            <h4>Privacy</h4>
            <ul class="privacy">
              <li><a href="/home/privacypolicy">Privacy Policy</a></li>
              <li><a href="/home/termsandconditions">Terms and Conditions</a></li>
              <li><a href="/home/refundpolicy">Refund Policy</a></li>
            </ul>
              </div>

              <div class="footer__4">
                <h4>Contact Us</h4>
                <div>
                    <p>+01 234 567 8910</p>
                    <p>random@gmail.com</p>
                </div>

             <ul class="footer__socials">
                <li>
                    <a href="https://facebook.com"><i class="fa-brands fa-facebook"></i></a>
                </li>
                <li>
                    <a href="https://instagram.com"><i class="fa-brands fa-instagram"></i></a>
                </li>
                <li>
                    <a href="https://twitter.com"><i class="fa-brands fa-twitter"></i></a>
                </li>
                <li>
                    <a href="https://linkedin.com"><i class="fa-brands fa-linkedin"></i></a>
                </li>
             </ul>

              </div>

             </div>

             <div class="footer__copyright">
                <small>Copyright &copy; ZDEMY Learning</small>
              </div>

</footer>


{{-- @if (session()->has('success'))
<div>
    <p>{{session('success')}}</p>
</div>
@endif --}}

<!-- ----------------------END OF FOOTER-------------------- -->


<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>



 <script>                //script for slider
    var swiper = new Swiper(".mySwiper",{
        slidesPerView:1,                   //for mobile phone
        spaceBetween:30,
        pagination:{
            el:".swiper-pagination",
            clickable:true,
        },
        //when window width is >=600px
        breakpoints:{
            600:{
                slidesPerView:2
            }
        }
    });
</script>

</body>
</html>
