@extends('layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection



@section('content')
    <div class="logcontainer">
        <div class="card">
            <div class="inner-box" id="card">
                <div class="card-back">
                    <h2>REGISTER</h2>
                    <form method="POST" action="/home/register" enctype="multipart/form-data">

                        @csrf

                        <input type="text" class="input-box" name="firstname" placeholder="First Name"
                            value="{{ old('firstname') }}">

                        @error('firstname')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror

                        <input type="text" class="input-box" name="lastname" placeholder="Last Name"
                            value="{{ old('lastname') }}" required>

                        @error('lastname')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror

                        <input type="text" class="input-box" name="username" placeholder="Username"
                            value="{{ old('username') }}" required>

                        @error('username')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror

                        <input type="email" class="input-box" name="email" placeholder="Email Id"
                            value="{{ old('email') }}" required>

                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror

                        <input type="password" class="input-box" name="password" placeholder="Password" required>

                        @error('password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror

                        <div class="usericon" style="background: #1f2641; padding:10px;
                        border-radius:20px; margin-bottom:20px" >
                        <input type="file" name="icon" placeholder="Course icon" value="{{ old('icon') }}">
                        </div>
                        @error('icon')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror

                        <input type="hidden" name="role" value="{{ old('firstname') }}" id="selectedRole">

                        <form onsubmit="return validateForm()">

                            <div class="dropdown">
                                <button id="dropbtn" class="dropbtn" name="role" onclick="toggleDropdown()">I'm
                                    currently a
                                    <i class="a fa-caret-dowfn"></i>
                                </button>
                                <div class="dropdown-content">
                                    <p onclick="changeButtonText('Student')">Student</>
                                    <p onclick="changeButtonText('Teacher')">Teacher</>
                                    <p onclick="changeButtonText('Admin')">Admin</>
                                </div>
                            </div>

                            <p id="selectedText"></p>

                            <button type="submit" class="submit-btn">Submit</button>
                        </form>

                        <script>
                            function validateForm() {
                                const dropbtn = document.getElementById('dropbtn');
                                const selectedOption = dropbtn.firstChild.textContent.trim();

                                if (selectedOption === "I'm currently a") {
                                    // alert('Please select an option.');
                                    document.getElementById('selectedText').textContent = "Please select an option";
                                    //console.log(dropdownValue);
                                    return false; // Prevent form submission
                                }

                                return true; // Allow form submission
                            }
                        </script>




                        <script>
                            function toggleDropdown() {
                                const dropdownContent = document.querySelector('.dropdown-content');
                                dropdownContent.classList.toggle('show');
                            }

                            function changeButtonText(text) {
                                const dropbtn = document.getElementById('dropbtn');
                                dropbtn.firstChild.textContent = text;
                                document.getElementById('selectedText').textContent = text;
                                document.getElementById('selectedRole').value = text;
                            }

                            function getDropdownValue() {
                                const dropbtn = document.getElementById('dropbtn');
                                const selectedOption = dropbtn.firstChild.textContent.trim();
                                return selectedOption;
                            }
                        </script>

                        <!-- <button type="submit" class="submit-btn">Submit</button> -->


                        <button type="button" class="btn" onclick="openLogin()">I've an account</button>
                        <a href="">Forgot Password</a>
                    </form>

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

            window.location.href = "/home/login";
            margintop.style.marginTop = "100px";
            // card.style.height = "600px"; // Add this line
            // card.style.boxShadow = "0 0 40px 20px rgba(0, 0, 0, 0.26)";
        }
    </script>
@endsection
