@extends('layout')

    @section('styles')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    @endsection



@section('content')

<div class="logcontainer">
    <div class="card">
        <div class="inner-box" id="card">
            <div class="card-front">
                <h2 id="login">LOGIN</h2>
                <form method="POST" action="/home/login">
                    @csrf
                    <input type="email" class="input-box" name="email"
                    placeholder="Email Id" value="{{old('email')}}" required>

                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

                    <input type="password" class="input-box" name="password"
                    placeholder="Password" required>

                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror


                        <button type="submit" class="submit-btn">Submit</button>
                    </form>


                    <input type="checkbox"><span>Remember Me</span>
                </form>


                <button type="button" class="btn" onclick="openRegister()">I'm new here</button>
                <a href="">Forgot Password</a>
            </div>

        </div>
    </div>
</div>


<script>
    var card = document.getElementById("card");
    var margintop = document.getElementById("login");
    margintop.style.marginTop = "100px";
    function openRegister() {
        // card.style.transform = "rotateY(-180deg)";
        window.location.href = "/home/register";
    }

    function openLogin() {
        // card.style.transform = "rotateY(0deg)";
        margintop.style.marginTop = "100px";
        // card.style.height = "600px"; // Add this line
        // card.style.boxShadow = "0 0 40px 20px rgba(0, 0, 0, 0.26)";
    }


</script>

@if (session()->has('success'))
<div class="regflash">
    <p>{{ session('success') }}</p>
</div>

<script>
    setTimeout(function() {
        document.querySelector('.regflash').style.display = 'none';
    }, 4000); // 4000 milliseconds = 4 seconds
</script>
@endif


@endsection

