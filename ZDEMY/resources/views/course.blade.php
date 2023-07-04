@extends('layout')

@section('content')

<img src="{{asset('images/course1.jpg')}}">
<h2>
{{$course->title}}
</h2>
<p>
    {{$course->description}}
</p>

@endsection
