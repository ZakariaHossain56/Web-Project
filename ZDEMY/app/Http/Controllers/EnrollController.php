<?php

namespace App\Http\Controllers;

use App\Models\AllCourses;
use App\Models\Comment;
use Exception;
use App\Models\Enroll;
use Illuminate\Http\Request;

class EnrollController extends Controller
{


    public function showcomment($id){
        $course=AllCourses::find($id);
        $courseid=$course->id;
        //dd($courseid);
        //dd($course);
        $comments = Comment::where('courseid', $courseid)->get();
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

        return view('comment',[
            'course'=>$course,
            // 'data'=>$data
            'titlesArray'=>$titlesArray,
            'ytidsArray'=> $ytidsArray,
            'lessons'=>$lessons,
            'outcomeArray'=>$outcomeArray,
            'comments'=>$comments
        ]);

    }

    public function submitcomment($id){
        $course=AllCourses::find($id);
        $attributes = request()->validate([
            'message' => 'required'
        ]);
        $user = auth()->user(); // Get the authenticated user
        //  dd($user->username);

        $attributes['courseid'] = $course->id; // Set the author ID to the authenticated user's ID
        $attributes['title'] = $course->title;
        $attributes['user'] = auth()->user()->username;
        Comment::create($attributes);
        return redirect('/home/enroll/' . $course->id . '/coursevideos/comment');


    }

    public function showvideo($id){
        //dd($id);
        $course=AllCourses::find($id);

        $titles = $course->titles;
        $ytid = $course->ytid;
        $outcome = $course->outcome;

        // Convert comma-separated values into an array
        $titlesArray  = explode(',', $titles);
        $ytidsArray  = explode(',', $ytid);
        $outcomeArray = explode(',', $outcome);
        $lessons=count($ytidsArray);


        return view('coursevideos',[
            'course'=>$course,
            // 'data'=>$data
            'titlesArray'=>$titlesArray,
            'ytidsArray'=> $ytidsArray,
            'lessons'=>$lessons,
            'outcomeArray'=>$outcomeArray
        ]);
    }
    public function showenroll(){
        $user=auth()->user()->id;
        //dd($user);
        $courses = Enroll::where('userid', $user)->get();
        //dd($courses);
        $data=compact('courses');
        return view('enroll')->with($data);
    }

    public function addenroll(Request $request){
        try{
            $var=Enroll::updateOrCreate([
                'courseid' => $request['courseid'],
                'title' => $request['title'],
                'category' => $request['category'],
                'icon'=>$request['icon'],
                'overview'=>$request['overview'],
                'outcome'=>$request['outcome'],
                'ytid'=>$request['ytid'],
                'duration'=>$request['duration'],
                'price'=>$request['price'],
                'titles'=>$request['titles'],
                'rating'=>$request['rating'],
                'enrolled'=>$request['enrolled'],
                'author_id'=>$request['author_id'],
                'author'=>$request['author'],
                'userid'=>$request['userid'],
            ]);
            $var->save();
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
        return redirect('/home/enroll');

    }
}
