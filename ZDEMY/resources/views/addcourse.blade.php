@extends('layout')

@section('styles')
  <!-- Additional styles specific to this view -->
   <link rel="stylesheet" href="{{ asset('css/addcourse.css') }}"/>

@endsection



@section('content')

<h1 class="add">Submit a Course</h1>
<section class="contact">

    <div class="container contact__container">

<form action="/home/addcourse" method="POST" class="contact__form" enctype="multipart/form-data">
@csrf

<h4>Course title</h4>
<input type="text" name="title" placeholder="Course title" value="{{old('title')}}" required>

@error('title')
<p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror

<h4>Course category</h4>
<input type="text" name="category" placeholder="e.g : Web development" value="{{old('category')}}" required>

@error('category')
<p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror

<h4>Course icon</h4>
<input type="file" name="icon" placeholder="Course icon" value="{{old('icon')}}" >

@error('icon')
<p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror

<h4>Course overview</h4>
<textarea name="overview" rows="7" placeholder="Course overview" value="{{old('overview')}}" required></textarea>

@error('overview')
<p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror

<h4>Course outcome (Comma separated)</h4>
<textarea name="outcome" rows="7" placeholder="Course outcome" value="{{old('outcome')}}" required></textarea>

@error('outcome')
<p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror

<h4>Video ID (from youtube)</h4>
<input type="text" name="ytid" placeholder="Video ID" value="{{old('ytid')}}" required>

@error('ytid')
<p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror

<h4>Video duration</h4>
<input type="text" name="duration" placeholder="e.g : 6h 50m" value="{{old('duration')}}" required>

@error('duration')
<p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror

<h4>Price</h4>
<input type="text" name="price" placeholder="e.g : $49.99" value="{{old('price')}}" required>

@error('price')
<p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror

<h4>Video titles (Comma separated)</h4>
<textarea name="titles" rows="7" placeholder="Video titles" value="{{old('titles')}}" required></textarea>

@error('titles')
<p class="text-red-500 text-xs mt-1">{{$message}}</p>
@enderror

<button type="submit" class="btn btn-primary">Submit</button>
</form>

        </div>
    </section>

    @endsection
