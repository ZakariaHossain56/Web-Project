<?php

namespace App\Http\Controllers;

use App\Models\AllCourses;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function showreview($id){
        $course=AllCourses::find($id);
        $courseid=$course->id;
        //dd($courseid);
        //dd($course);
        $reviews = Review::where('courseid', $courseid)->get();
        //dd($comments);
        $titles = $course->titles;
        $ytid = $course->ytid;
        $outcome = $course->outcome;

        // Convert comma-separated values into an array
        $titlesArray  = explode(',', $titles);
        $ytidsArray  = explode(',', $ytid);
        $outcomeArray = explode(',', $outcome);
        $lessons=count($ytidsArray);

        // $data=compact('course','titlesArray','ytidsArray','lessons','outcomeArray','comments');

        // return redirect('/home/enroll/{{ $course->id }}/coursevideos/comment')->with($data);

        return view('review',[
            'course'=>$course,
            // 'data'=>$data
            'titlesArray'=>$titlesArray,
            'ytidsArray'=> $ytidsArray,
            'lessons'=>$lessons,
            'outcomeArray'=>$outcomeArray,
            'reviews'=>$reviews
        ]);

    }

    public function submitreview($id){
        $course=AllCourses::find($id);
        $attributes = request()->validate([
            'review' => 'required',
            'rating'=>'required'
        ]);
        $user = auth()->user(); // Get the authenticated user
        //  dd($user->username);

        $attributes['courseid'] = $course->id; // Set the author ID to the authenticated user's ID
        $attributes['title'] = $course->title;
        $attributes['user'] = auth()->user()->username;
        Review::create($attributes);
        return redirect('/home/enroll/' . $course->id . '/coursevideos/review');


    }
}
